import axios from 'axios'
const baseURL = "http://0.0.0.0:9000"

export default {
  getNewsFeed(feedType){
    return axios({
      method: 'get',
      url: baseURL+'/api/newsfeed/'+feedType
    });
  },
  saveRatings(feed_id,rating){
    return axios({
      method: 'post',
      data: {
        'feed_id': feed_id,
        'rating': rating
      },
      url: baseURL+'/api/ratings/save'
    });
  },
  importNewsFeed(){
    return axios({
      method: 'get',
      url: baseURL+'/api/newsfeed/import'
    });
  }
}