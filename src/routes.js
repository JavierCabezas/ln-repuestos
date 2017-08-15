/**
 * Created by javier on 5/7/17.
 */
import Home from './components/main/Home.vue'

const AboutUs = resolve => {
    require.ensure(['./components/sections/AboutUs.vue'], () => {
        resolve(require('./components/sections/AboutUs.vue'));
    });
};

export const routes = [
    { path: '', component: Home },
    { path: '/inicio', component: Home },
    { path: '/sobre-nosotros', component: AboutUs }
];