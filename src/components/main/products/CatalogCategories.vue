<template>
    <div class="section-sb" v-if="categories_loaded">

        <h1 class="main-ttl"> Categorías </h1>
        <h3 v-if="selected_son !== ''"> {{selected_son}} </h3>
        <div class="section-sb-current">
            <ul class="section-sb-list" id="section-sb-list">
                <li v-for="son in categories">
                    <router-link :class="{active: son.id === selected_son}"
                                 :to="{name:'products_category', params: {'category': son.id }}"
                                 @click.prevent="pick_category(son.id)"
                    >
                        <span class="categ-1-label">{{son.n}}</span>
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
                categories_loaded: false,
                selected_son: ''
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
            pick_category: function(son_id) {
              this.selected_son = son_id;
            },
            get_categories: function(){
                let vm = this;
                $.ajax({
                    url: vm.url_backend + 'products/nested-categories',
                    success: function (result) {
                      vm.categories = result;
                      vm.categories_loaded = true;
                    }
                });
            }
        }
    }
</script>