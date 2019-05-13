<template>
    <div class="f-block-list">
        <footer-block v-for="b in blocks" :key="b.path" :block="b"></footer-block>
    </div>
</template>

<script>
    import FooterBlock from './FooterBlock.vue';

    export default {
        data () {
            return {
                blocks: {
                    1: {
                        "img_src": "src/assets/img/footer/inicio-manubrio.png",
                        "icon_name": "home",
                        "section_name": "Inicio",
                        "section_subtext": "Últimos productos, promociones y novedades",
                        "path": "/",
                        "name": 'index'
                    },
                    2: {
                        "img_src": "src/assets/img/footer/sobre-nosotros.png",
                        "icon_name": "question",
                        "section_name": "Sobre Nosotros",
                        "section_subtext": "Información comercial y de nuestra empresa",
                        "path": "sobre-nosotros",
                        "name": "about-us"
                    },
                    3: {
                        "img_src": "src/assets/img/footer/listado-productos.png",
                        "icon_name": "shopping-bag",
                        "section_name": "Productos",
                        "section_subtext": "Listdo de productos disponibles para su venta",
                        "path": "productos",
                        "name": "products"
                    },
                    4: {
                        "img_src": "src/assets/img/footer/contacto.png",
                        "icon_name": "envelope",
                        "section_name": "Contacto",
                        "section_subtext": "Ponte en contacto con nosotros.",
                        "path": "contacto",
                        "name": "contact"
                    }
                },
            }
        },
        components: {
            FooterBlock
        }
    }

</script>