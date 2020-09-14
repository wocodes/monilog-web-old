/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from "vue-router";
import VueHead from "vue-head";

Vue.use(VueHead);
Vue.use(VueRouter);

const routes = [
    // {
    //     name: "welcome",
    //     path: "/",
    //     component: Vue.component('welcome-component', require('./components/WelcomeComponent.vue').default)
    // },
    {
        name: "auth",
        path: "/",
        component: Vue.component('auth-component', require('./components/AuthComponent.vue').default)
    },
    {
        name: "dashboard",
        path: "/dashboard",
        props: true,
        component: Vue.component('dashboard-component', require('./components/DashboardComponent.vue').default)
    }
]


// assign routes
const router = new VueRouter({
    routes: routes,
    // mode: "history"
})



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
    router: router,
    data() {
      return {
          user: null,
          authToken: null,
          isAuthenticated: false,
      }
    },

    created() {

        // add route guards
        router.beforeEach((to, from, next) => {
            if(to.name !== 'auth' && this.isAuthenticated) next({name: 'auth'})
            else next()
        })


        // check if token has expired, then clear session and redirect
        setInterval(function() {
            console.log('checking auth');
            if(localStorage.getItem('authExpireTime')) {
                let expires = parseInt(localStorage.getItem('authExpireTime'));
                if(Date.now() > expires) {
                    console.log('removed auth')
                    localStorage.removeItem('auth');

                    console.log('removed auth expire time')
                    localStorage.removeItem('authExpireTime');
                    window.location = ('/#/auth');
                }
            }
        }, 5000)

        if(localStorage.getItem('auth')) {
            let auth = JSON.parse(localStorage.getItem('auth'));
            if(auth.user && auth.token) {
                this.user = auth.user;
                this.authToken = "Bearer "+auth.token;
            }
        }
    },

    methods: {
        checkAuth() {
            if(this.user && this.authToken) this.isAuthenticated = true;
        }
    }
});
