// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router/index.js'
import VueSweetalert2 from 'vue-sweetalert2'
import {sync} from 'vuex-router-sync'
import store from './store/store.js'
import 'vue-directive-tooltip/css/index.css';
import LoadScript from 'vue-plugin-load-script';

Vue.config.productionTip = false
Vue.use(VueSweetalert2)
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
