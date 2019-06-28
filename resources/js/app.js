require('./bootstrap');
import Vuetify from 'vuetify'

window.Vue = require('vue');
Vue.use(Vuetify)
Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
});
