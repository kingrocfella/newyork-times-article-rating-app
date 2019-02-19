<template>
  <feedskeleton feed_title="Technology" :feed_content="tech_Feed"/>
</template>

<script>
import feedskeleton from './feedskeleton';
import apiroutes from '../services/apiroutes';
export default {
  components: {
    feedskeleton
  },
  created() {
    apiroutes.getNewsFeed('Tech')
    .then(response => {
      this.tech_Feed = response.data;
    })
  },
  data() {
    return {
      tech_Feed: ""
    }
  },
}
</script>

<style>

</style>
