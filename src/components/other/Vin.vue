<template>
    <a class="fancybox" rel="group" :href="img_vin">siguiente diagrama</a>
</template>

<script>
    export default {
        data () {
            return {
                img_vin: 'src/assets/img/vin.png'
            }
        },
        created: function () {
            this.fbox = $(".fancybox").fancybox();
        }
    }
</script>