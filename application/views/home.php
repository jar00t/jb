<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $head; ?>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/plugins/font-awesome/font-awesome.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/pages-animate.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/pages-fonts.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/plugins/slick/slick.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/pages-main.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/pages-responsive.css" rel="stylesheet" />
    </head>
    <body>
        <div class="tr-menu">
            <nav class="navbar navbar-toggleable-md" style="background:#b0171f">
                <a id="jb-main-logo" class="navbar-brand" href="javascript:void(0)"></a>
                <a class="btn navbar-toggler navbar-toggler-right no-border" href="javascript:void(0)">
                    <span class="navbar-toggler-icon"></span>
                </a>

                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <form id="jb-search-form" class="form-inline">
                            <span id="basic-addon1" class="input-group-text ml-lg-5"><i style="padding:4px" class="fa fa-search"></i></span>
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn my-2 my-sm-0" type="submit">Cari</button>
                        </form>
                    </ul>
                </div>
            </nav>
        </div>     

        <div class="tr-banner">     
            <div id="home-carousel" class="carousel slide" data-ride="carousel">            
                <div class="carousel-inner" role="listbox">                
                    <div class="carousel-item item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="banner-info">
                                        <div class="info-middle">
                                            <span class="click-cart" data-animation="animated fadeInDown">Produk Baru</span>
                                            <h1 data-animation="animated fadeInDown"><span>Advan</span> i6</h1>
                                            <div class="paragraphs" data-animation="animated fadeInDown">
                                                <p>Dapatkan Hape Advan i6 Gratisan Sekarang</p>
                                            </div>
                                            <div class="buy-now" data-animation="animated fadeInUp">
                                                <span>Rp.999rb</span>
                                                <a class="btn btn-primary" href="javascript:void(0)">Lihat</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>              
                                <div class="col-sm-6">
                                    <div class="banner-image" data-animation="animated fadeInUp">
                                        <div class="info-middle">
                                            <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/advan/advan-i6-banner.png" alt="Image">
                                        </div>
                                    </div>   
                                </div>              
                            </div>                              
                        </div>                 
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="banner-info">
                                        <div class="info-middle">
                                            <span class="click-cart" data-animation="animated fadeInDown">Promo</span>
                                            <h1 data-animation="animated fadeInDown"><span>Asus</span> Zenpong 900</h1>
                                            <div class="paragraphs" data-animation="animated fadeInDown">
                                                <p>Ada promo baru nich sobat jb! yuk intipin!</p>
                                            </div>
                                            <div class="buy-now" data-animation="animated fadeInUp">
                                                <span>Rp.123rb</span>
                                                <a class="btn btn-primary" href="javascript:void(0)">Lihat</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>              
                                <div class="col-sm-6">
                                    <div data-animation="animated fadeInDown" class="banner-image">
                                        <div class="info-middle">
                                            <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/advan/advan-i6-banner.png" alt="Image">
                                        </div>
                                    </div>   
                                </div>              
                            </div>            
                        </div>     
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="banner-info">
                                        <div class="info-middle">
                                            <span class="click-cart" data-animation="animated fadeInDown">Promo Cashback</span>
                                            <h1 data-animation="animated fadeInDown"><span>Epercos</span> ABCDEFG</h1>
                                            <div class="paragraphs" data-animation="animated fadeInDown">
                                                <p>Halo gan! ada promo kesbek nich! ikutan yuukk!</p>
                                            </div>
                                            <div class="buy-now" data-animation="animated fadeInUp">
                                                <span>Rp.1,5jt</span>
                                                <a class="btn btn-primary" href="javascript:void(0)">Lihat</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>              
                                <div class="col-sm-6">
                                    <div class="banner-image" data-animation="animated fadeInUp">
                                        <div class="info-middle">
                                            <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/advan/advan-i6-banner.png" alt="Image">
                                        </div>
                                    </div>   
                                </div>              
                            </div>            
                        </div>             
                    </div>
                </div>
                <div class="container indicators-content">
                    <ol class="carousel-indicators">
                        <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#home-carousel" data-slide-to="1"></li>
                        <li data-target="#home-carousel" data-slide-to="2"></li>
                    </ol>                   
                </div>
            </div>
        </div>

        <div class="main-wrapper">
            <div class="container">
                <div class="tr-promotion">
                    <div class="row">
                        <div class="col-md-5 col-lg-4">
                            <div class="promotion promotion-left">
                                <div class="left-content">
                                    <h1>Produk Terbaru</h1>
                                    <span>1000+ Produk</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-8">
                            <div class="promotion promotion-right">
                                <div class="right-content">
                                    <h1>Discount 25%</h1>
                                    <h2>Hedset Keren Broh</h2>
                                    <p>Hedset ini memiliki fitur yang aneh. dimana pemakainya dapat mendengarkan suara dari komputer atau dari smartphone. keren kan!</p>
                                    <a class="btn btn-primary" href="javascript:void(0)">Lihat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tr-brands">
                    <div class="brands-slider">
                        <a class="brand" href="javascript:void(0)">
                            <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/brands/advan.png" alt="Image">
                        </a>
                        <a class="brand" href="javascript:void(0)">
                            <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/brands/asus.png" alt="Image">
                        </a>
                        <a class="brand" href="javascript:void(0)">
                            <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/brands/blackberry.png" alt="Image">
                        </a>
                        <a class="brand" href="javascript:void(0)">
                            <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/brands/evercoss.png" alt="Image">
                        </a>
                        <a class="brand" href="javascript:void(0)">
                            <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/brands/huawei.png" alt="Image">
                        </a>
                        <a class="brand" href="javascript:void(0)">
                            <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/brands/lenovo.png" alt="Image">
                        </a>
                        <a class="brand" href="javascript:void(0)">
                            <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/brands/lg.png" alt="Image">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="tr-footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="left-content">
                                <div class="text-white jb-on-footer">
                                    <p>
                                        Jayabaru.com adalah website resmi dari Jayabaru Selular yang menyediakan produk-produk gadget dengan garansi resmi. Belilah selalu produk-produk gadget dengan garansi resmi hanya di jayabaru.com
                                    </p>
                                    <a href="javascript:void(0)" class="card-link text-white"><i class="fa fa-facebook"></i></a>
                                    <a href="javascript:void(0)" class="card-link text-white"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-payment">
                            <h3>Metode Pembayaran</h3>
                            <div class="payment-card">
                                <ul class="tr-list">
                                    <li><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/others/card1.png" alt="Image"></li>
                                    <li><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/others/card2.png" alt="Image"></li>
                                    <li><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/others/card3.png" alt="Image"></li>
                                    <li><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/others/card4.png" alt="Image"></li>
                                    <li><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/others/card5.png" alt="Image"></li>
                                    <li><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/others/card6.png" alt="Image"></li>
                                    <li><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/others/card1.png" alt="Image"></li>
                                    <li><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/others/card2.png" alt="Image"></li>
                                    <li><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/others/card3.png" alt="Image"></li>
                                    <li><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/others/card4.png" alt="Image"></li>
                                    <li><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/others/card5.png" alt="Image"></li>
                                    <li><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/others/card6.png" alt="Image"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom footer-bottom-sm">
                <div class="container">
                    <small>Copyright © 2018 Jayabaru.com. All rights reserved.</small>
                </div>
            </div>
        </div>      

        <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/tether/tether.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/slick/slick.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-spinner/jquery.spinner.js"></script>
        <script type="text/javascript">
            jQuery(function ($) {

                'use strict';

                (function() {
                    $(".product-slider").slick({
                        infinite: true,
                        dots: true,
                        slidesToShow: 3,
                        autoplay:true,
                        autoplaySpeed:10000,
                        slidesToScroll: 1,
                        responsive: [
                        {
                          breakpoint: 1200,
                          settings: {
                            slidesToShow: 2,
                          }
                        },
                        {
                          breakpoint: 990,
                          settings: {
                            slidesToShow: 1,
                          }
                        },
                        {
                          breakpoint: 767,
                          settings: {
                            slidesToShow: 2,
                          }
                        },
                        {
                          breakpoint: 480,
                          settings: {
                            slidesToShow: 1,
                          }
                        }
                        ]        
                    }); 

                    $(".cta-slider").slick({
                        infinite: true,
                        dots: true,
                        slidesToShow: 1,
                        autoplay:true,
                        autoplaySpeed:10000,
                        slidesToScroll: 1      
                    }); 

                    $(".image-slider").slick({
                        infinite: true,
                        dots: true,
                        slidesToShow: 1,
                        autoplay:false,
                        autoplaySpeed:10000,
                        slidesToScroll: 1      
                    }); 

                    $(".brands-slider").slick({
                        infinite: true,
                        dots: true,
                        slidesToShow: 4,
                        autoplay:true,
                        autoplaySpeed:10000,
                        slidesToScroll: 1,
                        responsive: [
                        {
                          breakpoint: 1025,
                          settings: {
                            slidesToShow: 3,
                          }
                        },
                        {
                          breakpoint: 767,
                          settings: {
                            slidesToShow: 2,
                          }
                        },
                        {
                          breakpoint: 450,
                          settings: {
                            slidesToShow: 1,
                          }
                        }
                        ]        
                    });  

                    $(".product-details-slider").slick({
                        dots: true,
                        infinite: true,
                        speed: 500,
                        fade: true,
                        cssEase: 'linear',            
                        infinite: true,
                        dots: true,
                        slidesToShow: 1,
                        autoplay:true,
                        autoplaySpeed:10000,
                        slidesToScroll: 1      
                    });                                 
                }());

                (function() {

                    $('[data-toggle="tooltip"]').tooltip();

                }());

                (function() {

                    $( ".remove-icon" ).on('click', function() {
                        $(this).parents('.remove-item').fadeOut();
                    });

                }());

               (function() {

                    $('.tr-dropdown').on('click', '.tr-change a', function(ev) {
                        if ("#" === $(this).attr('href')) {
                            ev.preventDefault();
                            var parent = $(this).parents('.tr-dropdown');
                            parent.find('.change-text').html($(this).html());
                        }
                    });

                }()); 

                (function( $ ) {
                    function doAnimations( elems ) {
                        var animEndEv = 'webkitAnimationEnd animationend';
                        elems.each(function () {
                            var $this = $(this),
                                $animationType = $this.data('animation');
                            $this.addClass($animationType).one(animEndEv, function () {
                                $this.removeClass($animationType);
                            });
                        });
                    }
                    
                    var $myCarousel = $('#home-carousel'),
                        $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
                        
                    $myCarousel.carousel();
                    doAnimations($firstAnimatingElems);
                    $myCarousel.carousel('pause');
                    $myCarousel.on('slide.bs.carousel', function (e) {
                        var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
                        doAnimations($animatingElems);
                    });  
                    
                })(jQuery);      

                /*$( function() {
                    $( "#price_slider" ).slider({
                    range: true,
                    min: 0,
                    max: 20,
                    values: [ 0, 20 ],
                    slide: function( event, ui ) {
                    $( "#amount" ).val( "Rp." + ui.values[ 0 ] + " - Rp." + ui.values[ 1 ] + " jt" );
                    }
                    });
                    $( "#amount" ).val( "Rp." + $( "#price_slider" ).slider( "values", 0 ) +
                    " - Rp." + $( "#price_slider" ).slider( "values", 1 ) + " jt");
                } );*/

            });
        </script>
    </body>
</html> 