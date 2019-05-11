<template>
    <section class="container">

        <breadcrumbs-products active_page="Productos"></breadcrumbs-products>
        <catalog-categories></catalog-categories>

        <div class="section-cont">
            <products-per-page v-if="false" @new_products_per_page="update_products_per_page"></products-per-page>
            <p v-if="products.length == 0 && !has_search_params"> Sin productos para esta categoría. </p>
            <p v-if="products.length == 0 && has_search_params"> No se encontró resultados para {{search_params}}. </p>
            <catalog-thumb v-for="(p, index) in products"
                           v-else-if="is_index_in_range()"
                           :key="p.product_id"
                           :product="p"
            ></catalog-thumb>
            <paginate
                    v-show="false"
                    :pageCount="products.length / products_per_page"
                    :containerClass="'pagi'"
                    :clickHandler="clickCallback">
            </paginate>
        </div>
    </section>
</template>

<script>
  import {EventBus} from './../../../event-bus.js';
  import CatalogThumb from './CatalogThumb.vue'
  import CatalogCategories from './CatalogCategories.vue'
  import ProductsPerPage from './ProductsPerPage.vue'
  import BreadcrumbsProducts from '../../other/BreadcrumbsProducts.vue'
  import Paginate from 'vuejs-paginate'

  export default {
    computed: {
      has_category: function () {
        return this.category !== null;
      },
      has_search_params: function () {
        return this.search_params !== null;
      },
      has_subcategory: function () {
        return this.subcategory !== null;
      },
    },
    data() {
      return {
        category: this.$route.params.category === undefined ? null : this.$route.params.category,
        subcategory: this.$route.params.subcategory === undefined ? null : this.$route.params.subcategory,
        search_params: this.$route.params.search_params === undefined ? null : this.$route.params.search_params,
        products: [],
        products_per_page: 12,
        active_page: 1,
        ajaxData: null
      }
    },
    created: function () {
      let vm = this;
      this.get_products();
      EventBus.$on('updated_product_url', function () {
        vm.get_products();
      });
    },
    components: {
      CatalogThumb,
      CatalogCategories,
      BreadcrumbsProducts,
      ProductsPerPage,
      Paginate
    },
    watch:{
      $route (to, from){
        this.get_products();
        document.location.reload();
      }
    },
    methods: {
      update_products_per_page: function (new_products_per_page) {
        this.products_per_page = new_products_per_page;
        this.active_page = 1;
      },
      get_products: function () {
        let vm = this;
        if (vm.has_search_params) {
          vm.ajaxData = {filter_params: vm.search_params};
        } else {
          vm.ajaxData = {
            category: vm.$route.params.category,
            subcategory: vm.$route.params.subcategory
          };
        }
        console.log(vm.ajaxData);
        $.ajax({
          url: vm.url_backend + 'products/list',
          data: vm.ajaxData,
          success: function (result) {
            console.log(result);
            vm.products = result;
          }
        });
      },
      clickCallback: function (page) {
        this.active_page = page;
      },
      is_index_in_range(index) {
        return true;
        //let item_number = index +1;
        //return item_number > ( (this.active_page -1 ) * this.products_per_page ) && item_number <= ( (this.active_page ) * this.products_per_page)
      }
    }
  }
</script>