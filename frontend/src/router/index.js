import Vue from 'vue'
import Router from 'vue-router'
import error404 from '../components/404';
import techfeed from '../components/techfeed';
import europefeed from '../components/europefeed';
import techadmin from '../components/techadmin'
import europeadmin from '../components/europeadmin'

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
      component: techfeed
    },
    {
      path: '/europe',
      name: 'europefeed',
      component: europefeed
    },
    {
      path: '/techadmin',
      name: 'techadmin',
      component: techadmin
    },
    {
      path: '/europeadmin',
      name: 'europeadmin',
      component: europeadmin
    }
  ],
  mode: 'history'
})
