require('./bootstrap');

import Vue from "vue";

// Пример компонента
Vue.component('example-component', require('./components/ExampleComponent').default);

new Vue({
    el: '#app',
});
