webpackJsonp([0],{100:function(t,r,a){a(115);var e=a(0)(a(88),a(111),"data-v-6a776758",null);t.exports=e.exports},104:function(t,r){t.exports={render:function(){var t=this,r=t.$createElement,a=t._self._c||r;return a("section",{staticClass:"container"},[a("breadcrumbs-products",{attrs:{active_page:t.product.main.name}}),t._v(" "),a("h1",{staticClass:"main-ttl"},[a("span",[t._v(t._s(t.product.main.name))])]),t._v(" "),a("div",{staticClass:"prod-wrap"},[t.is_loaded?a("slider",{attrs:{product:t.product}}):t._e(),t._v(" "),a("div",{staticClass:"prod-cont"},[a("div",{staticClass:"prod-cont-txt"},[t._v("\n                "+t._s(t.product.main.description)+"\n            ")]),t._v(" "),a("div",{staticClass:"prod-info"},[a("p",{staticClass:"prod-price"},[a("b",{staticClass:"item_current_price"},[t._v(t._s(t._f("cash")(t.product.main.price)))])]),t._v(" "),void 0!==t.product.main.id?a("p",{staticClass:"prod-addwrap"},[a("router-link",{staticClass:"prod-add",attrs:{to:{name:"contact_product",params:{product_id:t.product.main.id}},rel:"nofollow"}},[t._v("\n                        Solicitar este producto\n                    ")])],1):t._e()])]),t._v(" "),a("div",{staticClass:"prod-tabs-wrap"},[a("ul",{staticClass:"prod-tabs"},[a("li",[a("a",{class:{active:1==t.active_tab},attrs:{href:"#"},on:{click:function(r){r.preventDefault(),t.active_tab=1}}},[t._v("\n                        Descripción\n                    ")])]),t._v(" "),a("li",[t.product.main.has_tutorial?a("a",{class:{active:2==t.active_tab},attrs:{id:"prod-props",href:"#"},on:{click:function(r){r.preventDefault(),t.active_tab=2}}},[t._v("\n                        Tutorial\n                    ")]):t._e()])]),t._v(" "),a("div",{staticClass:"prod-tab-cont"},[a("p",{staticClass:"prod-tab-mob",class:{active:1==t.active_tab}},[t._v("Descripción")]),t._v(" "),a("div",{staticClass:"prod-tab stylization"},[1==t.active_tab?a("p",[t._v(t._s(t.product.main.description))]):t._e(),t._v(" "),2==t.active_tab?a("p",[t.product.main.has_tutorial?a("product-tutorial",{attrs:{tutorial_text:t.product.main.tutorial,is_tutorial_video:t.product.main.is_tutorial_video}}):t._e()],1):t._e()])])])],1),t._v(" "),t.product.related.length>0?a("related",{attrs:{products:t.product.related}}):t._e()],1)},staticRenderFns:[]}},111:function(t,r){t.exports={render:function(){var t=this,r=t.$createElement,a=t._self._c||r;return t.is_tutorial_video?a("div",{staticClass:"videoWrapper"},[a("iframe",{attrs:{width:"560",height:"349",src:"http://www.youtube.com/embed/"+t.tutorial_text+"?rel=0&hd=1",frameborder:"0",allowfullscreen:""}})]):a("p",[t._v(" "+t._s(t.tutorial_text))])},staticRenderFns:[]}},112:function(t,r){t.exports={render:function(){var t=this,r=t.$createElement,a=t._self._c||r;return a("div",{staticClass:"prod-slider-wrap"},[a("div",{staticClass:"prod-slider"},[a("ul",{staticClass:"prod-slider-car"},[a("li",[a("a",{staticClass:"fancy-img",attrs:{"data-fancybox-group":"product"}},[a("img",{attrs:{src:t.url_server+t.product.main.picture,alt:t.product.main.name}})])]),t._v(" "),t._l(t.product.pictures,function(r){return a("li",[a("a",{staticClass:"fancy-img",attrs:{"data-fancybox-group":"product"}},[a("img",{attrs:{src:t.url_server+r,alt:t.product.main.name}})])])})],2)]),t._v(" "),a("div",{staticClass:"prod-thumbs"},[a("ul",{staticClass:"prod-thumbs-car"},[a("li",[a("a",{attrs:{"data-slide-index":"0"}},[a("img",{attrs:{src:t.url_server+t.product.main.picture,alt:t.product.main.name}})])]),t._v(" "),t._l(t.product.pictures,function(r,e){return t.product.pictures.lenght>0?a("li",[a("a",{attrs:{"data-slide-index":e+1}},[a("img",{attrs:{src:r,alt:t.product.main.name}})])]):t._e()})],2)])])},staticRenderFns:[]}},113:function(t,r){t.exports={render:function(){var t=this,r=t.$createElement,a=t._self._c||r;return a("div",{staticClass:"prod-related"},[t._m(0),t._v(" "),a("div",{staticClass:"prod-related-car",attrs:{id:"prod-related-car"}},[a("ul",{staticClass:"slides"},[a("li",{staticClass:"prod-rel-wrap"},t._l(t.products,function(r){return a("div",{staticClass:"prod-rel"},[a("router-link",{staticClass:"prod-rel-img",attrs:{to:{name:"product_name",params:{product_id:r.seo_name}}}},[a("img",{attrs:{src:t.url_server+r.picture,alt:r.name}})]),t._v(" "),a("div",{staticClass:"prod-rel-cont"},[a("h3",[a("router-link",{attrs:{to:{name:"product_name",params:{product_id:r.seo_name}}}},[t._v("\n                                "+t._s(r.name)+"\n                            ")])],1),t._v(" "),a("p",{staticClass:"prod-rel-price"},[r.upon_request?t._e():a("b",[t._v(t._s(t._f("cash")(r.price)))]),t._v(" "),r.upon_request?a("b",[t._v(" A pedido ")]):t._e()])])],1)}))])])])},staticRenderFns:[function(){var t=this,r=t.$createElement,a=t._self._c||r;return a("h2",[a("span",[t._v("Productos relacionados")])])}]}},115:function(t,r,a){var e=a(96);"string"==typeof e&&(e=[[t.i,e,""]]),e.locals&&(t.exports=e.locals);a(12)("3f6153fe",e,!0)},13:function(t,r,a){var e=a(0)(a(85),a(104),null,null);t.exports=e.exports},77:function(t,r,a){"use strict";Object.defineProperty(r,"__esModule",{value:!0});var e=a(5);r.default={props:{active_page:{default:null}},data:function(){return{breadcrumbs:{category:null,subcategory:null}}},created:function(){this.get_breadcrumbs()},methods:{update:function(){var t=this;this.get_breadcrumbs(),e.a.$on("updated_product_url",function(){t.get_breadcrumbs()})},get_breadcrumbs:function(){var t=this;$.ajax({url:t.url_backend+"site/breadcrumbs",data:{category:t.$route.params.category,subcategory:t.$route.params.subcategory,subsubcategory:t.$route.params.subsubcategory,name:t.$route.params.name},success:function(r){t.breadcrumbs=r}})}}}},78:function(t,r,a){var e=a(0)(a(77),a(80),null,null);t.exports=e.exports},80:function(t,r){t.exports={render:function(){var t=this,r=t.$createElement,a=t._self._c||r;return a("ul",{staticClass:"b-crumbs"},[a("li",{on:{click:function(r){t.update()}}},[a("router-link",{attrs:{to:{name:"home"}}},[t._v("\n            Inicio\n        ")])],1),t._v(" "),null!==t.breadcrumbs.category?a("li",{on:{click:function(r){t.update()}}},[a("router-link",{attrs:{to:{name:"products_category",params:{category:t.breadcrumbs.category.path}}}},[t._v("\n            "+t._s(t.breadcrumbs.category.name)+"\n        ")])],1):t._e(),t._v(" "),null!==t.breadcrumbs.subcategory?a("li",{on:{click:function(r){t.update()}}},[a("router-link",{attrs:{to:{name:"products_subcategory",params:{subcategory:t.breadcrumbs.subcategory.path}}}},[t._v("\n            "+t._s(t.breadcrumbs.subcategory.name)+"\n        ")])],1):t._e(),t._v(" "),null!==t.active_page?a("li",[t._v(" "+t._s(t.active_page)+"  ")]):t._e()])},staticRenderFns:[]}},82:function(t,r,a){var e=a(0)(a(86),a(113),null,null);t.exports=e.exports},85:function(t,r,a){"use strict";Object.defineProperty(r,"__esModule",{value:!0});var e=a(82),s=a.n(e),i=a(99),c=a.n(i),o=a(78),n=a.n(o),u=a(100),d=a.n(u);r.default={data:function(){return{category:this.$route.params.category,product_id:this.$route.params.product_id,product:{main:{},pictures:{},related:{}},is_loaded:!1,active_tab:1}},watch:{$route:function(t,r){this.product_id=this.$route.params.product_id,this.get_product(this.product_id)}},created:function(){this.get_product(this.product_id)},methods:{get_product:function(t){var r=this;$.ajax({url:r.url_backend+"products/get",data:{product_id:t},success:function(t){r.product=t,r.is_loaded=!0}})}},components:{Related:s.a,Slider:c.a,BreadcrumbsProducts:n.a,ProductTutorial:d.a}}},86:function(t,r,a){"use strict";Object.defineProperty(r,"__esModule",{value:!0});var e=a(82);a.n(e);r.default={props:{products:{default:[]}}}},87:function(t,r,a){"use strict";Object.defineProperty(r,"__esModule",{value:!0}),r.default={props:["product"]}},88:function(t,r,a){"use strict";Object.defineProperty(r,"__esModule",{value:!0}),r.default={props:{tutorial_text:{default:""},is_tutorial_video:{default:!1}}}},96:function(t,r,a){r=t.exports=a(11)(),r.push([t.i,".videoWrapper[data-v-6a776758]{position:relative;padding-bottom:56.25%;padding-top:25px;height:0}.videoWrapper iframe[data-v-6a776758]{position:absolute;top:0;left:0;width:100%;height:100%}",""])},99:function(t,r,a){var e=a(0)(a(87),a(112),null,null);t.exports=e.exports}});
//# sourceMappingURL=0.build.js.map