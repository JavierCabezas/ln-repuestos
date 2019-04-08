<template>
    <section class="container">
        <breadcrumbs :crumbs="crumbs"></breadcrumbs>
        <h1 class="main-ttl"><span>¿Cómo comprar?</span></h1>

        <div class="row">
            <ol class="connumero">
                <!-- @todo: Poner link a productos después de hacer un link que no requiera categoría -->
                <li> Elija el producto que necesita desde nuestra sección de productos [link_pendiente]   </li>
                <li>
                    Si no encuentra el producto que está buscando contáctenos para ver la posibilidad de importarlo de forma especial.
                </li>
                <li>Si encuentra el producto contáctenos para confirmar el stock y coordinar compra y entrega.</li>
                <li>Se puede hacer retiro del producto en Las Condes o pedir envío por pagar a cualquier parte de Chile.</li>
                <li>El pago puede ser por tarjeta de crédito/débito por webpay o por transferencia bancaria. </li>
                <li>Si tiene alguna duda puede contactarnos por nuestro formulario, correo electrónico o Whatsapp.</li>
            </ol>

            <!-- @todo: Agregar datos de contacto -->
            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Secondary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
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
    .connumero {
        list-style: decimal !important;
    }
</style>