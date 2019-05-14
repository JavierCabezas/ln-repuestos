<template>
    <div class="companyinfo" @click="go_up()">
        <router-link :to="{'name': 'index'}">
            <img src="src/assets/img/logo.png" alt="LN Repuestos">
            Especialistas en Volvo
        </router-link>
    </div>
</template>

<script>
  export default {
    methods: {
      go_up: function() {
        $('html, body').animate({ scrollTop: 0 }, 'slow');
      }
    }
  }
</script>