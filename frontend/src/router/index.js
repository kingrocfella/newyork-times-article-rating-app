import Vue from 'vue'
import Router from 'vue-router'
import error404 from '../components/404';
import techfeed from '../components/techfeed';
import europefeed from '../components/europefeed';

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
      name: 'techfeed',
      meta: {
				forVisitors: true
			},
      component: techfeed
    },
    {
      path: '/europe',
      name: 'europefeed',
      meta: {
				forVisitors: true
			},
      component: europefeed
    }
  ],
  mode: 'history'
})
