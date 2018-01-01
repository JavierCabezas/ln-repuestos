<template>
    <div class="section-sb" v-if="categories_loaded">
        <h1 class="main-ttl"><span> {{categories.parent.name}} </span></h1>

        <div class="section-sb-current">
            <h3><a href="#" @click.prevent=""> {{categories.parent.name}} </a></h3>
            <ul class="section-sb-list" id="section-sb-list">
                <li v-for="son in categories.sons" v-if="categories.type === 'category'">
                    <router-link :to="{name:'products_subcategory', params: {'subcategory': son.id }}">
                        <span class="categ-1-label">{{son.name}}</span>
                    </router-link>
                </li>

                <li v-for="son in categories.sons" v-if="categories.type === 'subcategory'">
                    <router-link :to="{name:'products_subsubcategory', params: { 'subsubcategory': son.id }}">
                        <span class="categ-1-label">{{son.name}}</span>
                    </router-link>
                </li>

            </ul>
        </div>
    </div>
</template>

<script>
    import { EventBus } from './../../../event-bus.js';

    export default {
        data () {
            return {
                categories: {},
                categories_loaded: false
            }
        },
        created: function () {
            let vm = this;

            this.get_categories();
            EventBus.$on('updated_product_url', function() {
                vm.get_categories();
            });
        },
        methods: {
            get_categories: function(){
                let vm = this;
                $.ajax({
                    url: vm.url_backend + 'site/categories',
                    data: {
                        category: vm.$route.params.category,
                        subcategory: vm.$route.params.subcategory,
                        subsubcategory: vm.$route.params.subsubcategory
                    },
                    success: function (result) {
                        vm.categories = result;
                        vm.categories_loaded = true;
                    }
                });
            }
        }
    }
</script>