<template>
    <section class="container">
        <ul class="b-crumbs">
            <li>
                <a href="index.html">
                    Home
                </a>
            </li>
            <li>
                <a href="catalog-list.html">
                    Catalog
                </a>
            </li>
            <li>
                <span>Women</span>
            </li>
        </ul>
        <h1 class="main-ttl"><span>Women</span></h1>
        <!-- Catalog Sidebar - start -->
        <div class="section-sb">

            <!-- Catalog Categories - start -->
            <div class="section-sb-current">
                <h3><a href="catalog-list.html">Women <span id="section-sb-toggle" class="section-sb-toggle"><span class="section-sb-ico"></span></span></a></h3>
                <ul class="section-sb-list" id="section-sb-list">
                    <li class="categ-1">
                        <a href="catalog-list.html">
                            <span class="categ-1-label">Knitwear</span>
                        </a>
                    </li>
                    <li class="categ-1">
                        <a href="catalog-list.html">
                            <span class="categ-1-label">Dresses</span>
                        </a>
                    </li>
                    <li class="categ-1 has_child">
                        <a href="catalog-list.html">
                            <span class="categ-1-label">Bags</span>
                            <span class="section-sb-toggle"><span class="section-sb-ico"></span></span>
                        </a>
                        <ul>
                            <li class="categ-2">
                                <a href="catalog-list.html">
                                    <span class="categ-2-label">Shoulder Bags</span>
                                </a>
                            </li>
                            <li class="categ-2">
                                <a href="catalog-list.html">
                                    <span class="categ-2-label">Falabella</span>
                                </a>
                            </li>
                            <li class="categ-2">
                                <a href="catalog-list.html">
                                    <span class="categ-2-label">Becks</span>
                                </a>
                            </li>
                            <li class="categ-2">
                                <a href="catalog-list.html">
                                    <span class="categ-2-label">Clutches</span>
                                </a>
                            </li>
                            <li class="categ-2">
                                <a href="catalog-list.html">
                                    <span class="categ-2-label">Travel Bags</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="categ-1 has_child">
                        <a href="catalog-list.html">
                            <span class="categ-1-label">Accessories</span>
                            <span class="section-sb-toggle"><span class="section-sb-ico"></span></span>
                        </a>
                        <ul>
                            <li class="categ-2">
                                <a href="catalog-list.html">
                                    <span class="categ-2-label">Sunglasses</span>
                                </a>
                            </li>
                            <li class="categ-2">
                                <a href="catalog-list.html">
                                    <span class="categ-2-label">Tech Cases</span>
                                </a>
                            </li>
                            <li class="categ-2">
                                <a href="catalog-list.html">
                                    <span class="categ-2-label">Jewelry</span>
                                </a>
                            </li>
                            <li class="categ-2">
                                <a href="catalog-list.html">
                                    <span class="categ-2-label">Stella</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="categ-1">
                        <a href="catalog-list.html">
                            <span class="categ-1-label">Coats & Jackets</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Catalog Categories - end -->

        </div>
        <!-- Catalog Sidebar - end -->
        <!-- Catalog Items | List V1 - start -->
        <div class="section-cont">

            <!-- Catalog Topbar - start -->
            <div class="section-top">

                <!-- Sorting -->
                <div class="section-sortby">
                    <p>default sorting</p>
                    <ul>
                        <li>
                            <a href="#">sort by popularity</a>
                        </li>
                        <li>
                            <a href="#">low price to high</a>
                        </li>
                        <li>
                            <a href="#">high price to low</a>
                        </li>
                        <li>
                            <a href="#">by title A <i class="fa fa-angle-right"></i> Z</a>
                        </li>
                        <li>
                            <a href="#">by title Z <i class="fa fa-angle-right"></i> A</a>
                        </li>
                        <li>
                            <a href="#">default sorting</a>
                        </li>
                    </ul>
                </div>

                <!-- Count per page -->
                <div class="section-count">
                    <p>12</p>
                    <ul>
                        <li><a href="#">12</a></li>
                        <li><a href="#">24</a></li>
                        <li><a href="#">48</a></li>
                    </ul>
                </div>

            </div>
            <!-- Catalog Topbar - end -->
            <div class="prod-items section-items">
                <div class="prodlist-i">
                    <a class="prodlist-i-img" href="product.html"><!-- NO SPACE --><img src="http://placehold.it/300x311" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>
                    <div class="prodlist-i-cont">
                        <h3><a href="product.html">Adipisci aperiam commodi</a></h3>
                        <div class="prodlist-i-txt">
                            Quisquam totam quas veritatis dolor voluptates, laudantium repellendus. Cupiditate repellat tempora consequatur sequi, neque					</div>

                        <div class="prodlist-i-action">
                            <p class="prodlist-i-addwrap">
                                <a href="#" class="prodlist-i-add">Pedir este producto</a>
                            </p>
                            <span class="prodlist-i-price">
							<b>$59</b>
													</span>
                        </div>
                        <p class="prodlist-i-info">
                            <a href="#" class="qview-btn prodlist-i-qview"><i class="fa fa-search"></i> Ver más detalles </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Pagination - start -->
            <ul class="pagi">
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li class="pagi-next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
            <!-- Pagination - end -->
        </div>

        <!-- Quick View Product - start -->
        <div class="qview-modal">
            <div class="prod-wrap">
                <a href="product.html">
                    <h1 class="main-ttl">
                        <span>Reprehenderit adipisci</span>
                    </h1>
                </a>
                <div class="prod-slider-wrap">
                    <div class="prod-slider">
                        <ul class="prod-slider-car">
                            <li>
                                <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">
                                    <img src="http://placehold.it/500x525" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x591">
                                    <img src="http://placehold.it/500x591" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x525">
                                    <img src="http://placehold.it/500x525" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-fancybox-group="popup-product" class="fancy-img" href="http://placehold.it/500x722">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="prod-thumbs">
                        <ul class="prod-thumbs-car">
                            <li>
                                <a data-slide-index="0" href="#">
                                    <img src="http://placehold.it/500x525" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="1" href="#">
                                    <img src="http://placehold.it/500x591" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="2" href="#">
                                    <img src="http://placehold.it/500x525" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="3" href="#">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="4" href="#">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="5" href="#">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                            <li>
                                <a data-slide-index="6" href="#">
                                    <img src="http://placehold.it/500x722" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="prod-cont">
                    <p class="prod-actions">
                        <a href="#" class="prod-favorites"><i class="fa fa-heart"></i> Add to Wishlist</a>
                        <a href="#" class="prod-compare"><i class="fa fa-bar-chart"></i> Compare</a>
                    </p>
                    <div class="prod-skuwrap">
                        <p class="prod-skuttl">Color</p>
                        <ul class="prod-skucolor">
                            <li class="active">
                                <img src="img/color/blue.jpg" alt="">
                            </li>
                            <li>
                                <img src="img/color/red.jpg" alt="">
                            </li>
                            <li>
                                <img src="img/color/green.jpg" alt="">
                            </li>
                            <li>
                                <img src="img/color/yellow.jpg" alt="">
                            </li>
                            <li>
                                <img src="img/color/purple.jpg" alt="">
                            </li>
                        </ul>
                        <p class="prod-skuttl">Sizes</p>
                        <div class="offer-props-select">
                            <p>XL</p>
                            <ul>
                                <li><a href="#">XS</a></li>
                                <li><a href="#">S</a></li>
                                <li><a href="#">M</a></li>
                                <li class="active"><a href="#">XL</a></li>
                                <li><a href="#">L</a></li>
                                <li><a href="#">4XL</a></li>
                                <li><a href="#">XXL</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="prod-info">
                        <p class="prod-price">
                            <b class="item_current_price">$238</b>
                        </p>
                        <p class="prod-qnt">
                            <input type="text" value="1">
                            <a href="#" class="prod-plus"><i class="fa fa-angle-up"></i></a>
                            <a href="#" class="prod-minus"><i class="fa fa-angle-down"></i></a>
                        </p>
                        <p class="prod-addwrap">
                            <a href="#" class="prod-add">Add to cart</a>
                        </p>
                    </div>
                    <ul class="prod-i-props">
                        <li>
                            <b>SKU</b> 05464207
                        </li>
                        <li>
                            <b>Manufacturer</b> Mayoral
                        </li>
                        <li>
                            <b>Material</b> Cotton
                        </li>
                        <li>
                            <b>Pattern Type</b> Print
                        </li>
                        <li>
                            <b>Wash</b> Colored
                        </li>
                        <li>
                            <b>Style</b> Cute
                        </li>
                        <li>
                            <b>Color</b> Blue, Red
                        </li>
                        <li><a href="#" class="prod-showprops">All Features</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Quick View Product - end -->
    </section>
</template>

<script>
    export default {
        data () {
            return {

            }
        },
        created: function () {

        },
        methods: {

        }
    }
</script>