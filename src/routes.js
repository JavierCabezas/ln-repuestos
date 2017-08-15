/**
 * Created by javier on 5/7/17.
 */
import Home from './components/main/Home.vue'

const AboutUs = resolve => {
    require.ensure(['./components/sections/AboutUs.vue'], () => {
        resolve(require('./components/sections/AboutUs.vue'));
    });
};

const Contact = resolve => {
    require.ensure(['./components/sections/Contact.vue'], () => {
        resolve(require('./components/sections/Contact.vue'));
    });
};

export const routes = [
    { path: '', component: Home },
    { path: '/sobre-nosotros', component: AboutUs },
    { path: '/contacto', component: Contact }
];