<template>
  
  <feedskeleton feed_title="Europe" :feed_content="europe_feed"/>
</template>

<script>
import feedskeleton from './feedskeleton';
import apiroutes from '../services/apiroutes';
export default {
  components: {
    feedskeleton
  },
  created() {
    apiroutes.getNewsFeed('Europe')
    .then(response => {
      this.europe_feed = response.data
    })
  },
  data() {
    return {
      europe_feed: ''
    }
  },
}
</script>

<style>

</style>
