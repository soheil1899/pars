
require('./bootstrap');


window.Vue = require('vue');
window.axios=require('axios');
import BootstrapVue from 'bootstrap-vue';


Vue.use(BootstrapVue);


Vue.component('article-slider', require('./components/client/articleSlider.vue').default);
Vue.component('shop-slider', require('./components/client/shopSlider.vue').default);
Vue.component('blog-list', require('./components/client/blogList.vue').default);
Vue.component('blog-single', require('./components/client/blogSingle.vue').default);
Vue.component('product-list', require('./components/client/productList.vue').default);










Vue.component('error', require('./components/custom/error.vue').default);






const clientApp = new Vue({
    el: '#clientApp',
});





/* npms

npm install verte --save


*/
