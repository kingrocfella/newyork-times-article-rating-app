<template>
  <div class="container main_body">
    <br>
    <nav class="navbar navbar-light bg-light justify-content-between">
      <a class="navbar-brand" href="#">
        <img src="../../static/favicon/favicon-32.png" width="32" height="32" class="d-inline-block align-top" alt="">
        New York Times
      </a>
      <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </nav>
    <br><br>
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-sm-9">
            <h4>{{feed_title}} Feed</h4>
          </div>
          <div class="col-sm-3">
            <h6 class="text-muted font-weight-light">Feed Filter</h6>
            <button class="btn btn-outline-primary btn-sm" @click="navigateTo('/')">Technology</button>
            <button class="btn btn-outline-primary btn-sm" @click="navigateTo('/europe')">Europe</button>
          </div>
        </div>
        <div class="d-flex justify-content-center" v-if="loader">
          <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
          </div>
        </div>
      </div>
      <div class="jumbotron" v-for="(data,index) in feed_content" :key="index">
        <div class="container-fluid">
          <h5 class="display-6">{{data['title']}}</h5>
          <p class="lead">{{data['description']}}</p>
          <hr class="my-4">
          <div class="row">
            <div class="col-sm-4">
              <b style="font-size: 10px;">Rate this article:</b> 
            </div>
          </div>
          <div class="row">
            <div class="col-sm-10" @click="updateRating(data.rating, data['feed_id'])">
              <star-rating v-model="data.rating" :item-size=size :show-rating=showRating></star-rating>
            </div>
            <div class="col-sm-2"><a class="btn btn-primary btn-sm" :href="data['link']" target="_blank" role="button">Read Article</a></div>
          </div><br>
          <div class="row">
            <div class="col-sm-4">
              <b style="font-size: 10px;">Category:</b> 
            </div>
          </div>
          <div class="row bottom_text">
            <div class="col-sm-8" v-for="(item,n) in data['category']" :key="n">
              <span style="font-size: 12px;">{{item['category']}} </span>
            </div>
            <div class="col-sm-4">
              <div class="text-muted">
                <code>Published: {{data['pubDate']}}</code>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row footer_text">
        <div class="col-sm-9"></div>
        <div class="col-sm-3">Copyright &copy; 2019 Kingsley.</div>
      </div>
    </div>
  </div>
</template>

<script>
import {StarRating} from 'vue-rate-it';
import apiroutes from '../services/apiroutes';
export default {
  props: [
    'feed_title', 'feed_content'
  ],
  mounted() {
		document.body.style.backgroundColor = "#f4f4f4";
  },
  components: {
    StarRating
  },
  methods: {
    navigateTo(route){
      this.$router.push({path: route})
    },
    updateRating(rating,feed_id){
      //get array of rated feed items
      this.feedArray = JSON.parse(localStorage.getItem("feed_id"));
      //initiase the array and add 0 as the first array item if null
      if (!this.feedArray) {
        this.feedArray = [0];
      }
      //check if the feed_id exists in the localstorage, if yes it means that article has been rated by the user and should not be rated again
      let check  = this.feedArray.indexOf(feed_id);
      if (check < 0) {
        apiroutes.saveRatings(feed_id,rating)
        .then(response => {
          //save feed_id in localstorage so user cannot rate the same article unless he/she reloads
          //store feed_id in localstorage so user cannot rate the same article more than once.
          this.feedArray.push(feed_id)
          localStorage.setItem("feed_id",JSON.stringify(this.feedArray))
        })
      }
      else{
        alert('You have previously rated this article hence your new rating would not be registered!');
      }
    }
  },
  watch: {
    feed_content: function(content){
      if (content) {
        this.loader = false;
      }
    }
  },
  data() {
    return {
      loader: true,
      rating: '',
      size : 15,
      showRating: false,
      feedArray: []
    }
  },
}
</script>

<style>
  .main_body{
    max-width: 80%;
  }
  .bottom_text{
    margin-bottom: -5%;
  }
  .footer_text{
    margin-bottom: 5%;
  }
</style>
