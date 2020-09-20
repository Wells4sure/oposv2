window.Vue = require('vue');

Vue.component('login', require('./components/LoginForm.vue').default);

var app = new Vue({
    el: '#app'
});