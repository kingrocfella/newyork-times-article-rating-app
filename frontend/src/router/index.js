import Vue from 'vue'
import Router from 'vue-router'
import error404 from '../components/404';
import newsfeed from '../components/newsfeed';

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/404',
      name: '404',
      component: error404
    },
    {
      path: '/',
      name: 'newsfeed',
      meta: {
				forVisitors: true
			},
      component: newsfeed
    }
  ],
  mode: 'history'
})
