<template>
  <div>
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
      //get articles from the resources API every 20 minutes
      window.setInterval(() => {
        this.importArticles();
      },300000);
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
    }
  }
}
</script>

<style>
</style>
