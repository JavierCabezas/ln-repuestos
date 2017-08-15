<template>
    <div class="f-block-list">
        <footer-block v-for="block in blocks" :block="block"></footer-block>
    </div>
</template>

<script>
    import FooterBlock from './FooterBlock.vue';

    export default {
        data () {
            return {
                blocks: [
                    {
                        "img_src": "http://placehold.it/300x127",
                        "icon_name": "home",
                        "section_name": "Inicio",
                        "section_subtext": "Últimos productos, promociones y novedades",
                        "path": "/"
                    },
                    {
                        "img_src": "http://placehold.it/300x127",
                        "icon_name": "question",
                        "section_name": "Sobre Nosotros",
                        "section_subtext": "Información comercial y de nuestra empresa",
                        "path": "sobre-nosotros"
                    },
                    {
                        "img_src": "http://placehold.it/300x127",
                        "icon_name": "shopping-bag",
                        "section_name": "Productos",
                        "section_subtext": "Listdo de productos disponibles para su venta",
                        "path": "productos"
                    },
                    {
                        "img_src": "http://placehold.it/300x127",
                        "icon_name": "envelope",
                        "section_name": "Contacto",
                        "section_subtext": "Ponte en contacto con nosotros.",
                        "path": "contacto"
                    }
                ],
            }
        },
        components: {
            FooterBlock
        }
    }

</script>