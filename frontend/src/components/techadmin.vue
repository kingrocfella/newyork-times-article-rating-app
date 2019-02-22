<template>
  <div>
    <!-- error modal -->
    <div class="modal fade" id="error" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="defaultModalLabel" style="color: #a81a12;">Error!</h4>
          </div>
          <div class="modal-body">
            Sorry, an error occured while fetching new data!
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-link" data-dismiss="modal">CLOSE</button>
          </div>
        </div>
      </div>
    </div>
  <feedskeleton feed_title="Europe" :feed_content="europe_feed"/>
    <newfeedalert v-if="show"/>
    <adminfeedskeleton feed_title="Technology" :feed_content="tech_Feed"/>
  </div>
</template>

<script>
import newfeedalert from './newfeedalert';
import adminfeedskeleton from './adminfeedskeleton';
import apiroutes from '../services/apiroutes';
export default {
  components: {
    adminfeedskeleton,
    newfeedalert
  },
  mounted() {
    //get current articles first
    apiroutes.getNewsFeed('Tech')
    .then(response => {
      this.tech_Feed = response.data;
      this.feedcount = response.data.length;
      //get articles from the resources API every 30 minutes
      window.setInterval(() => {
        this.importArticles();
      },1800000);
    })
    .catch(error => {
      $("#error").modal('show');
      console.log(error.response.data)
    })
  },
  data() {
    return {
      tech_Feed: '',
      show: false,
      feedcount: ''
    }
  },
  methods: {
    //populate the DB with fresh content
    importArticles(){
      apiroutes.importNewsFeed()
      .then(response => {
        //ask user to reload page to load new content if there's new content available
        if (this.feedcount < response.data.length) {
          this.show  = true;
        }
      })
      .catch(error => {
        console.log(error.response.data);
        $("#error").modal("show");
      })
    }
  }
}
</script>

<style>
</style>
