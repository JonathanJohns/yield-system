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

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import Vuex from  'vuex'
import VueRouter from 'vue-router'
import VueSweetalert2 from 'vue-sweetalert2';
import moment from 'moment'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
// import {BootstrapVue, IconsPlugin, NavbarPlugin} from 'bootstrap-vue';
// Vue.use(BootstrapVue );

// If you don't need the styles, do not connect
import 'sweetalert2/dist/sweetalert2.min.css';

// Import Bootstrap an BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)



 Vue.use(VueRouter)
 Vue.use(Vuex)
 Vue.use(VueSweetalert2);
 Vue.prototype.moment = moment;

import Content from './components/layout/Content.vue';
import SidebarComp from './components/layout/SidebarComp';
import NavbarComp from './components/layout/NavbarComp.vue';
import Dashboard from './components/Dashboard.vue';
import Organizations from './components/Organizations.vue';
import Printers from './components/Printers.vue';
import PrinterHistory from './components/PrinterHistory.vue';


 const routes = [
    {
        path: '/',
        components: {
            default: Content,
            nav: NavbarComp,
            sidebar: SidebarComp
        },
        children: [
            {
                path: '',
                component: Organizations
            },
            {
                path: '/printers/:id',
                component: Printers
            },
            {
                path: '/printer/:id',
                component: PrinterHistory
            },
            {
                path: '/capture/:id',
                component: PrinterHistory
            },
        ]
    },
   
]

const router = new VueRouter({
    // mode: 'history',
    routes,
    scrollBehavior (to, from, savedPosition) {
        // return desired position
        return { x: 0, y: 0 }
      }
})


const app = new Vue({
    el: '#app',
    // components: {NavbarComp,SurveyBuilder},
    data: {
       
    },
    router,
    methods: {

    }
});
