require('./bootstrap');

import Vue from 'vue';
import axios from 'axios';
import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';

import App from './src/App.vue';
import router from './src/routes';
import store from './src/store/';

Vue.router = router;
Vue.use(VueRouter);

Vue.use(VueAxios, axios);

axios.defaults.baseURL = `${process.env.MIX_BASE_URL}/api`;
axios.defaults.headers.common['Accept'] = 'application/json';

new Vue({
    el: '#app',
    router,
    store,
    render: h => h(App),
});
