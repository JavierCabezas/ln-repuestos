<template>
    <section class="container">
        <breadcrumbs :crumbs="crumbs"></breadcrumbs>
        <h1 class="main-ttl"><span>¿Cómo comprar?</span></h1>

        <div class="row">
            <div class="stylization col-md-8 text-justify">
                <ul>
                    <li> 1) Elija el producto que necesitas desde nuestra
                        <router-link class="azul" :to="{name:'products'}"> sección de productos</router-link>.
                    </li>
                    <li>
                        2) Una vez encontrado su producto contáctenos para confirmar el stock y coordinar compra y
                        envío o entrega.
                    </li>
                    <li>
                        2b) Si no encuentra el producto que está buscando contáctenos para ver la posibilidad de
                        importarlo de forma especial.
                    </li>
                    <li>
                        3) Se puede hacer retiro del producto en Las Condes o pedir envío por pagar a
                        cualquier parte de Chile.
                    </li>
                    <li>
                        4) El pago puede ser por tarjeta de crédito/débito por webpay o por transferencia
                        bancaria.
                    </li>
                    <li>5) Si tiene alguna duda puede contactarnos por nuestro
                        <router-link class="azul" :to="{name:'contact'}">formulario de contacto</router-link>,
                        escribiéndonos a<a href="mailto:contacto@lnrepuestos.cl" target="_top">contacto@lnrepuestos</a>
                        o contactándonos a nuestro Whatsapp en
                        <a href="https://wa.me/56956433982" target="_top">+56 9 56433982</a>.
                    </li>
                </ul>
            </div>
        </div>
    </section>
</template>


<script>
  import Breadcrumbs from '../other/Breadcrumbs.vue';
  import Vin from '../other/Vin.vue'

  export default {
    data () {
      return {
        crumbs: [
          { 'title': '¿Cómo comprar?',  'path': null }
        ],
      }
    },
    components: {
      Breadcrumbs,
      Vin
    }
  }
</script>

<style>

    a.azul {
        color: #337ab7;
    }
</style>