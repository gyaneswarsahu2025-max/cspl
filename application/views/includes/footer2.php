 <?php $all_category = all_parent_category(); //echo "<pre>"; print_r($all_category); exit; ?>
 <footer class="ps-footer">
        <div class="container">
            <div class="ps-footer__widgets">
                <aside class="widget widget_footer">
                    <h4 class="widget-title">Quick links</h4>
                    <ul class="ps-list--link">
                        <li><a href="<?=site_url('site/privacypolicy');?>">Vendor Policy</a></li>
                        <li><a href="<?=site_url('site/termsconditions');?>">Term & Condition</a></li>
                        <li><a href="<?=site_url('site/advertise');?>">Advertise with us</a></li>
                    </ul>
                </aside>
                <aside class="widget widget_footer">
                    <h4 class="widget-title">Services</h4>
                    <ul class="ps-list--link">
                        <li><a href="<?=site_url('site/aboutus');?>">Price & Payment</a></li>
                        <li><a href="<?=site_url('site/contactus');?>">Listing & Catelogye</a></li>
                        <li><a href="#">Order Management & Shipping</a></li>
                    </ul>
                </aside>
                <aside class="widget widget_footer">
                    <h4 class="widget-title">Bussiness</h4>
                    <ul class="ps-list--link">
                        <li><a href="<?=site_url('vendor/vregistration1');?>">Vendor Registration</a></li>
                        <li><a href="<?=site_url('vendor/login');?>">Vendor Login</a></li>
                    </ul>
                </aside>
            </div>
            
            <div class="ps-footer__copyright">
                <p>© 2021 All Rights Reserved by cakiweb.</p>
                <p><span>We Using Safe Payment For:</span><a href="#"><img src="<?=base_url();?>assets/img/payment-method/master-card.png" alt="" ></a><a href="#"><img src="<?=base_url();?>assets/img/payment-method/visa-card.png" alt=""></a><a href="#"><img src="<?=base_url();?>assets/img/payment-method/maestro-card.png" alt=""></a><a href="#"><img src="<?=base_url();?>assets/img/payment-method/netbanking.png" alt="" ></a><a href="#"><img src="<?=base_url();?>assets/img/payment-method/paytm-wallet.png" alt="" ></a></p>
            </div>
        </div>
    </footer>
    <div id="back2top"><i class="icon icon-arrow-up"></i></div>
    <div class="ps-site-overlay"></div>
    <div id="loader-wrapper">
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <div class="ps-search" id="site-search"><a class="ps-btn--close" href="#"></a>
        <div class="ps-search__content">
            <form class="ps-form--primary-search" action="http://nouthemes.net/html/martfury/do_action" method="post">
                <input class="form-control" type="text" placeholder="Search for...">
                <button><i class="aroma-magnifying-glass"></i></button>
            </form>
        </div>
    </div>

    <div class="modal fade" id="product-quickview" tabindex="-1" role="dialog" aria-labelledby="product-quickview" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content"><span class="modal-close" data-dismiss="modal"><i class="icon-cross2"></i></span>
                <article class="ps-product--detail ps-product--fullwidth ps-product--quickview">
                    <div class="ps-product__header">
                        <div class="ps-product__thumbnail" data-vertical="false">
                            <div class="ps-product__images" data-arrow="true">
                                <div class="item"><img src="<?=base_url();?>assets/img/products/detail/fullwidth/1.jpg" alt=""></div>
                                <div class="item"><img src="<?=base_url();?>assets/img/products/detail/fullwidth/2.jpg" alt=""></div>
                                <div class="item"><img src="<?=base_url();?>assets/img/products/detail/fullwidth/3.jpg" alt=""></div>
                            </div>
                        </div>
                        <div class="ps-product__info">
                            <h1 class="ps-product_name">Marshall Kilburn Portable Wireless Speaker</h1>
                            <div class="ps-product__meta">
                                <p>Brand:<a class="ps-brand_name" href="shop-default.html">Sony</a></p>
                                <p>RK No: <a class="ps-rkno" href="shop-default.html">Sony</a></p>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>(1 review)</span>
                                </div>
                            </div>
                            <h4 class="ps-product__price">0</h4>
                            <div class="ps-product__desc">
                                <p>Sold By:<a class="ps-product__seller" href="shop-default.html"><strong> Go Pro</strong></a></p>
                                <ul class="ps-list--dot product-quickview-feature">
                                </ul>
                            </div>
                            <!-- <div class="ps-product__shopping"><a class="ps-btn ps-btn--black" href="#">Add to cart</a><a class="ps-btn" href="#">Buy Now</a>
                                <div class="ps-product__actions"><a href="#"><i class="icon-heart"></i></a><a href="#"><i class="icon-chart-bars"></i></a></div>
                            </div> -->
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>

    
    <!-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
    <script src="<?php echo base_url()?>assets/plugins/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/nouislider/nouislider.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/masonry.pkgd.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/jquery.matchHeight-min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/slick/slick/slick.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/slick-animation.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/lightGallery-master/dist/js/lightgallery-all.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/sticky-sidebar/dist/sticky-sidebar.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/select2/dist/js/select2.full.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/gmap3.min.js"></script>
    <!-- custom scripts-->
    <script src="<?php echo base_url()?>assets/js/main.js"></script>
    <script src="<?php echo base_url()?>assets/js/site.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <script type="text/javascript">
        var appUrl = '<?=base_url();?>';
    </script>
    <script>
    $(document).ready(function(){
        //alert(6);
				$('.rehab_image').magnificPopup({
					type:'image',
					delegate:'a',
					gallery:{
						enabled:true
					}
				});
			});

    $(document).on("click" , "#showroom_menu" , function(){
    $("#showroom").show();
    $("#bootique").hide();
    $("#brand").hide();
});

$(document).on("click" , "#bootique_menu" , function(){
    $("#showroom").hide();
    $("#bootique").show();
    $("#brand").hide();
});


$(document).on("click" , "#brand_menu" , function(){
    $("#showroom").hide();
    $("#bootique").hide();
    $("#brand").show();
});

$(document).on("click" , "#all_menu1" , function(){
    $("#showroom").hide();
    $("#bootique").hide();
    $("#brand").hide();
});

$(document).on("click" , "#all_menu2" , function(){
    $("#showroom").hide();
    $("#bootique").hide();
    $("#brand").hide();
});


$(document).on("click" , "#sell_online" , function(){
    $("#sell_online_content").show();
    $("#why_realbest_content").hide();
    $("#why_shopsy_content").hide();
    $("#how_register_content").hide();
});
    
$(document).on("click" , "#why_realbest" , function(){
    $("#sell_online_content").hide();
    $("#why_realbest_content").show();
    $("#why_shopsy_content").hide();
    $("#how_register_content").hide();
});

$(document).on("click" , "#why_shopsy" , function(){
    $("#sell_online_content").hide();
    $("#why_realbest_content").hide();
    $("#why_shopsy_content").show();
    $("#how_register_content").hide();
});

$(document).on("click" , "#how_register" , function(){
    $("#sell_online_content").hide();
    $("#why_realbest_content").hide();
    $("#why_shopsy_content").hide();
    $("#how_register_content").show();
});
</script>
</body>
</html>