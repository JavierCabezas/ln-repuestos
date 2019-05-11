<template>
    <div class="header-bottom">
        <div class="container">
            <nav class="topmenu">
                <div class="topcatalog">
                    <router-link :to="{name: 'products'}" class="topcatalog-btn">Productos</router-link>
                    <ul class="topcatalog-list">
                        <li v-for="cat in categories">
                            <router-link :to="{name:'products_category', params: {category: cat.id}}"> {{cat.n}}
                            </router-link>
                        </li>
                    </ul>
                </div>

                <button type="button" class="mainmenu-btn">Menu</button>

                <ul class="mainmenu">
                    <li>
                        <router-link :to="{name: 'home'}"> Inicio</router-link>
                    </li>
                    <li>
                        <router-link :to="{name: 'howto'}"> Como comprar</router-link>
                    </li>
                    <li>
                        <router-link :to="{name: 'about-us'}"> Sobre Nosotros</router-link>
                    </li>
                    <li>
                        <router-link :to="{name: 'contact'}"> Contacto</router-link>
                    </li>

                    <li class="mainmenu-more">
                        <span>...</span>
                        <ul class="mainmenu-sub"></ul>
                    </li>
                </ul>

                <div class="topsearch">
                    <a id="topsearch-btn" class="topsearch-btn" href="#"><i class="fa fa-search"></i></a>
                    <div class="form topsearch-form" @keydown.enter="go_to_search_product">
                        <input type="text" placeholder="Buscar productos" v-model="search_params">
                        <button type="submit" @click.prevent="go_to_search_product">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</template>

<script>
  export default {
    data() {
      return {
        search_params: '',
      }
    },
    props: ['categories'],
    methods: {
      go_to_search_product: function () {
        this.$router.push({ name: 'products_search', params: { search_params: this.search_params } })
        if ($('body').hasClass('search-show')) {
          $('body').removeClass('search-show');
        }
      }
    }
  }
</script>