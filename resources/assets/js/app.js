/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

window.Event = new Vue();

Vue.component('navbar', require('./components/NavbarComponent.vue'))
Vue.component('breadcrumb-component', require('./components/BreadcrumbComponent.vue'))
Vue.component('table-component', require('./components/TableComponent.vue'))
Vue.component('modal-component', require('./components/ModalComponent.vue'))
const app = new Vue({
    el: '#app'
});