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
                        "img_src": "src/assets/img/footer/footer-001.png",
                        "icon_name": "home",
                        "section_name": "Inicio",
                        "section_subtext": "Últimos productos, promociones y novedades",
                        "path": "/"
                    },
                    2: {
                        "img_src": "src/assets/img/footer/footer-002.png",
                        "icon_name": "question",
                        "section_name": "Sobre Nosotros",
                        "section_subtext": "Información comercial y de nuestra empresa",
                        "path": "sobre-nosotros"
                    },
                    3: {
                        "img_src": "src/assets/img/footer/footer-003.png",
                        "icon_name": "shopping-bag",
                        "section_name": "Productos",
                        "section_subtext": "Listdo de productos disponibles para su venta",
                        "path": "productos"
                    },
                    4: {
                        "img_src": "src/assets/img/footer/footer-004.png",
                        "icon_name": "envelope",
                        "section_name": "Contacto",
                        "section_subtext": "Ponte en contacto con nosotros.",
                        "path": "contacto"
                    }
                },
            }
        },
        components: {
            FooterBlock
        }
    }

</script>