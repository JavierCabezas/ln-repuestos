<template>
    <ul>
        <li v-if="show_contact_form"><span class="fa fa-globe"></span>
            <router-link class="azul" :to="{name:'contact'}">Formulario de contacto</router-link>.
        </li>
        <li><span class="fa fa-envelope"></span> Correo electrónico a
            <a href="mailto:contacto@lnrepuestos.cl" target="_top">contacto@lnrepuestos</a>.
        </li>
        <li><i class="fa fa-phone"></i> Telefónico: <a href="tel:432646557" target="_top">
            +56 4 3264 6557
        </a>.
        </li>
        <li>
            <span class="fa fa-whatsapp"> </span> Whatsapp:
            <a href="https://wa.me/56956433982" target="_top">+56 9 56433982</a>.
        </li>
    </ul>
</template>


<script>
export default {
  props: {
    show_contact_form: {
      type: Boolean,
      default: true
    }
  }
}
</script>

