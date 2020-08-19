/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('register-component', require('./components/RegisterComponent.vue').default);
Vue.component('login-component', require('./components/LoginComponent.vue').default);
Vue.component('logger-component', require('./components/LoggerComponent.vue').default);
Vue.component('logs-component', require('./components/LogsComponent.vue').default);
Vue.component('stat-component', require('./components/StatComponent.vue').default);
Vue.component('navbar-component', require('./components/NavbarComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import moment from 'moment';

Vue.filter('formatShortWordDate', function(value) {
    if (value) {
        return moment(String(value)).format('MMM Do, YYYY')
    }
});

Vue.filter('formatShortWordDateTime', function(value) {
    if (value) {
        return moment(String(value)).format('MMM Do YYYY hh:mm')
    }
});


const app = new Vue({
    el: '#app',
    data() {
      return {
          user: null,
          authToken: null
      }
    },

    created() {
        if(localStorage.getItem('user')) {
            let user = JSON.parse(localStorage.getItem('user'));
            if(user.user && user.token) {
                this.user = user;
                this.authToken = "Bearer "+user.token;
            }
        }
    }
});
