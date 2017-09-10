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

const Product = resolve => {
    require.ensure(['./components/main/products/Products.vue'], () => {
        resolve(require('./components/main/products/Products.vue'));
    });
};

const ProductDetail = resolve => {
    require.ensure(['./components/main/products/ProductDetail.vue'], () => {
        resolve(require('./components/main/products/ProductDetail.vue'));
    });
};

export const routes = [
    { path: '', component: Home, name:'home' },
    { path: '/sobre-nosotros', component: AboutUs, name:'about-us' },
    { path: '/contacto', component: Contact, name:'contact' },
    { path: '/productos', name:'products', component: Product },
    { path: '/productos/categoria/:category', name:'products_category', component: Product },
    { path: '/productos/categoria/:category/subcategoria/:subcategory', name:'products_subcategory', component: Product },
    { path: '/productos/categoria/:category/subcategoria/:subcategory/subsubcategoria/:subsubcategory', name:'products_subsubcategory', component: Product },
    { path: '/productos/categoria/:category/nombre/:product_name', name:'product_name', component: ProductDetail }
];