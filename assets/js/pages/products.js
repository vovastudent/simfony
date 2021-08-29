import Vue from 'vue';

import App from '@/pages/products.vue';

const app = new Vue({
    render: (h) => h(App),
}).$mount('#app');


// import Vue from 'vue';
//
// const app = new Vue({
//     el: '#app',
//     template: '<h1>Hello Vue! Is this cooler?</h1>',
// });