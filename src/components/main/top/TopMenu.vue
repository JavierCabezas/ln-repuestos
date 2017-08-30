<template>
    <div class="header-bottom">
        <div class="container">
            <nav class="topmenu">
                <div class="topcatalog">
                    <router-link to="producto" class="topcatalog-btn">Catálogo</router-link>
                    <ul class="topcatalog-list">
                        <li v-for="cat in categories">
                            <router-link :to="cat.l" exact> {{ cat.n }} </router-link>
                            <i class="fa fa-angle-right"></i>
                            <ul>
                                <li v-for="son in cat.s">
                                    <router-link :to="son.l" exact> {{son.n}} </router-link>
                                    <i v-if="son.s !== undefined" class="fa fa-angle-right"></i>
                                    <ul v-if="son.s !== undefined">
                                        <li v-for="grandon in son.s">
                                            <router-link :to="grandon.l" exact> {{grandon.n}} </router-link>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>


                <button type="button" class="mainmenu-btn">Menu</button>

                <ul class="mainmenu">
                    <li> <router-link to="/"> Inicio </router-link> </li>
                    <li> <router-link to="sobre-nosotros"> Sobre Nosotros </router-link> </li>

                    <li class="menu-item-has-children">
                        <router-link to="producto">Productos <i class="fa fa-angle-down"></i></router-link>
                        <ul class="sub-menu">
                            <li v-for="cat in categories">
                                <router-link :to="cat.l"> {{cat.n}}</router-link>
                            </li>
                        </ul>
                    </li>
                    <li> <router-link to="contacto"> Contacto </router-link> </li>


                    <li class="mainmenu-more">
                        <span>...</span>
                        <ul class="mainmenu-sub"></ul>
                    </li>
                </ul>

                <!-- Search - start -->
                <div class="topsearch">
                    <a id="topsearch-btn" class="topsearch-btn" href="#"><i class="fa fa-search"></i></a>
                    <form class="topsearch-form" action="#">
                        <input type="text" placeholder="Search products">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- Search - end -->

            </nav>		</div>
    </div>
</template>

<script>
    export default {
        props: ['categories'],
    }
</script>