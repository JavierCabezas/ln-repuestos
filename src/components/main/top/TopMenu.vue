<template>
    <div class="header-bottom">
        <div class="container">
            <nav class="topmenu">
                <div class="topcatalog">
                    <router-link :to="{name: 'products'}" class="topcatalog-btn">Productos</router-link>
                    <ul class="topcatalog-list">
                        <li v-for="cat in categories">
                            <router-link :to="{name:'products_category', params: {category: cat.id}}"> {{cat.n}} </router-link>
                        </li>
                    </ul>
                </div>

                <button type="button" class="mainmenu-btn">Menu</button>

                <ul class="mainmenu">
                    <li> <router-link :to="{name: 'home'}"> Inicio </router-link> </li>
                    <li> <router-link :to="{name: 'howto'}"> Como comprar</router-link> </li>
                    <li> <router-link :to="{name: 'about-us'}"> Sobre Nosotros </router-link> </li>
                    <li> <router-link :to="{name: 'contact'}"> Contacto </router-link> </li>

                    <li class="mainmenu-more">
                        <span>...</span>
                        <ul class="mainmenu-sub"></ul>
                    </li>
                </ul>

                <div class="topsearch">
                    <a id="topsearch-btn" class="topsearch-btn" href="#"><i class="fa fa-search"></i></a>
                    <form class="topsearch-form" action="#">
                        <input type="text" placeholder="Search products">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </nav>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['categories'],
    }
</script>