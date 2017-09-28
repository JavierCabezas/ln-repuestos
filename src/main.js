import { routes } from './routes'
import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter);

import App from './App.vue'


const router = new VueRouter({
    routes
});

Vue.mixin({
    data: function() {
        return {
            get url_backend() {
                return "http://localhost/lnrepuestos/backend/web/index.php/api/";
            }
        }
    }
});

Vue.filter('money', function (value) {
    return '$' + parseInt(value)
});

new Vue({
    el: '#app',
    router,
    render: h => h(App)
});
