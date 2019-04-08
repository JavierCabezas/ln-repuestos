/**
 * Created by javier on 5/7/17.
 */
import Home from './components/main/Home.vue'

const Index = resolve => {
    require.ensure(['./components/sections/Index.vue'], () => {
        resolve(require('./components/sections/Index.vue'));
    });
};

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

const Product = resolve => {
    require.ensure(['./components/main/products/Products.vue'], () => {
        resolve(require('./components/main/products/Products.vue'));
    });
};

const Howto = resolve => {
  require.ensure(['./components/sections/Howto.vue'], () => {
    resolve(require('./components/sections/Howto.vue'));
  });
};

const ProductDetail = resolve => {
    require.ensure(['./components/main/products/ProductDetail.vue'], () => {
        resolve(require('./components/main/products/ProductDetail.vue'));
    });
};

export const routes = [
    { path: '/', component: Index, name: 'index' },
    { path: '/inicio', component: Home, name: 'home' },
    { path: '/como-comprar', component: Howto, name: 'howto'},
    { path: '/sobre-nosotros', component: AboutUs, name:'about-us' },
    { path: '/contacto', component: Contact, name:'contact' },
    { path: '/contacto/:product_id', component: Contact, name:'contact_product' },
    { path: '/productos', name:'products', component: Product },
    { path: '/productos/subcategoria/:subcategory', name:'products_subcategory', component: Product },
    { path: '/productos/categoria/:category', name:'products_category', component: Product },
    { path: '/productos/nombre/:product_id', name:'product_name', component: ProductDetail }
];