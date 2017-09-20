<template>
    <div class="section-top">
        <div class="section-count pull-right">
            <p>{{products_per_page}}</p>
            <ul>
                <li @click.prevent="change_items_per_page(12)"><a href="#">12</a></li>
                <li @click.prevent="change_items_per_page(24)"><a href="#">24</a></li>
                <li @click.prevent="change_items_per_page(36)"><a href="#">36</a></li>
                <li @click.prevent="change_items_per_page(48)"><a href="#">48</a></li>
            </ul>
        </div>
        <p class="pull-right"> Repuestos por página </p>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                products_per_page: 12
            }
        },
        methods: {
            change_items_per_page: function(new_items_per_page) {
                this.products_per_page = new_items_per_page;
                this.$emit('new_products_per_page', new_items_per_page);
            }
        }
    }
</script>