// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router/index.js'
import Papa from 'papaparse'
import Spinner from 'vue-spinkit'
import VueSweetalert2 from 'vue-sweetalert2'
import {sync} from 'vuex-router-sync'
import store from './store/store.js'
import autologout from './services/autologout.js'
import Datetime from 'vue-datetime'
// You need a specific loader for CSS files
import 'vue-datetime/dist/vue-datetime.css'
import Tooltip from 'vue-directive-tooltip';
import 'vue-directive-tooltip/css/index.css';
import LoadScript from 'vue-plugin-load-script';

Vue.config.productionTip = false
Vue.use(Papa)
Vue.component('Spinner', Spinner)
Vue.use(VueSweetalert2)
Vue.use(autologout)
Vue.use(Datetime) 
Vue.use(Tooltip);
Vue.use(LoadScript);

sync(store,router)

//create base url for url redirecting
Vue.prototype.$baseurl = "http://localhost:8080";

//handle routing
router.beforeEach(
	(to, from, next) => {
		if (!to.matched.length) {
			next('/404');
		}
		else if (to.matched.some(record => record.meta.forVisitors)) {
			if (store.state.isUserLoggedIn) {
				next({
					path: '/'
				})
			}
			else{
				next()
			}
		}
		else if (to.matched.some(record => record.meta.forAuth)) {
			if (!store.state.isUserLoggedIn) {
				next({
					path: '/login'
				})
			}
			else{
				next()
			}
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
