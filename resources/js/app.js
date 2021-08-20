require('./bootstrap');
require('./script');

import Vue from "vue";
import SlitherSlider from 'slither-slider';
import VueRouter from 'vue-router';

Vue.use(VueRouter)
Vue.use(SlitherSlider);

Vue.component('slider-component', require('./components/slider.vue').default);
Vue.component('new-items', require('./components/newItems.vue').default);
Vue.component('blog-list', require('./components/blog-list.vue').default);
Vue.component('catalog-list', require('./components/catalog.vue').default);
Vue.component('recomended-blog', require('./components/recomended-blog.vue').default);
Vue.component('blog-card', require('./components/blog-card.vue').default);
Vue.component('basket-modal', require('./components/basket-modal').default);
Vue.component('basket', require('./components/basket').default);
Vue.component('add-item', require('./components/add-item').default);
Vue.component('card-product', require('./components/card-product').default);
Vue.component('mail-post', require('./components/newsletter').default);

new Vue({
    el: '#app',
});
