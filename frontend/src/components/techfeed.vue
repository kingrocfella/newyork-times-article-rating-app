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
    <feedskeleton feed_title="Technology" :feed_content="tech_Feed"/>
  </div>
  
</template>

<script>
import feedskeleton from './feedskeleton';
import apiroutes from '../services/apiroutes';
export default {
  components: {
    feedskeleton
  },
  created() {
    //populate the DB with fresh content on page load
    apiroutes.importNewsFeed()
    .then(response => {
      //fetch content from DB
      apiroutes.getNewsFeed('Tech')
      .then(response => {
        this.tech_Feed = response.data;
      })
    })
    .catch(error => {
      $("#error").modal('show');
      console.log(error.response.data);
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
