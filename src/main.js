import { routes } from './routes'
import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter);

import App from './App.vue'


const router = new VueRouter({
    routes
});

Vue.filter("cash", function(value) {
    if(value){
        return "$"+value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
});

Vue.mixin({
    data: function() {
        return {
            get url_backend() {
                return "http://localhost/repuestos/backend/web/index.php/api/";
            },
            get url_server() {
                return "http://localhost/"
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
