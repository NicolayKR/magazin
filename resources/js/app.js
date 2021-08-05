require('./bootstrap');
require('./script');

import Vue from "vue";
import SlitherSlider from 'slither-slider';

Vue.use(SlitherSlider);

Vue.component('slider-component', require('./components/slider.vue').default);
Vue.component('new-items', require('./components/newItems.vue').default);
Vue.component('blog-list', require('./components/blog-list.vue').default);
Vue.component('catalog-list', require('./components/catalog.vue').default);
Vue.component('card-product', require('./components/card-product.vue').default);

new Vue({
    el: '#app',
});
