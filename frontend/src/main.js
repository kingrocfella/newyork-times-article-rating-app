// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router/index.js'
import {sync} from 'vuex-router-sync'
import store from './store/store.js'
import 'vue-directive-tooltip/css/index.css';
import LoadScript from 'vue-plugin-load-script';

Vue.config.productionTip = false
Vue.use(LoadScript);

sync(store,router)

//handle routing
router.beforeEach(
	(to, from, next) => {
		//display the 404 page if the route entered does not exist.
		if (!to.matched.length) {
			next('/404');
		}
		else{
			next()
		}
	}
)

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  store,
  components: { App },
  template: '<App/>'
})
