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
    <body class="bg-light">
        <div class="tr-menu">
            <nav class="navbar navbar-toggleable-md">
                <a id="jb-main-logo" class="navbar-brand" href="javascript:void(0)"></a>
                <a class="btn navbar-toggler navbar-toggler-right no-border" href="javascript:void(0)">
                    <span class="navbar-toggler-icon"></span>
                </a>

                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="javascript:void(0)" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Produk
                            </a>
                            <ul class="dropdown-menu dropright multi-level" aria-labelledby="navbarDropdown">
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">
                                        <img src="<?php echo base_url(); ?>assets/img/brands/advan-200x25.png">
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="advan/smart">Smartphone</a></li>
                                        <li><a class="dropdown-item" href="advan/tab">Tablet</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-item dropdown-toggle" data-toggle="dropdown">
                                        <img src="<?php echo base_url(); ?>assets/img/brands/asus-200x25.png">
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="asus/smart">Smartphone</a></li>
                                        <li><a class="dropdown-item" href="asus/tab">Tablet</a></li>
                                        <li><a class="dropdown-item" href="asus/laptop">Laptop</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/blackberry-200x25.png"></a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/evercoss-200x25.png"></a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/huawei-200x25.png"></a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/lenovo-200x25.png"></a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/lg-200x25.png"></a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/luna-200x25.png"></a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/nokia-200x25.png"></a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/oppo-200x25.png"></a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/samsung-200x25.png"></a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/spc-200x25.png"></a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/vivo-200x25.png"></a></li>
                                <li><a class="dropdown-item" href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/xiaomi-200x25.png"></a></li>
                            </ul>
                        </li>

                        <form id="jb-search-form" class="form-inline">
                            <span id="basic-addon1" class="input-group-text ml-lg-5"><i style="padding:4px" class="fa fa-search"></i></span>
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                            <div class="dropdown">
                                <button id="dropdownMenuButton" class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Semua
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/advan-200x25.png"></a>
                                    <a class="dropdown-item" href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/asus-200x25.png"></a>
                                    <a class="dropdown-item" href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/blackberry-200x25.png"></a>
                                    <a class="dropdown-item" href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/evercoss-200x25.png"></a>
                                    <a class="dropdown-item" href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/huawei-200x25.png"></a>
                                    <a class="dropdown-item" href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/lenovo-200x25.png"></a>
                                    <a class="dropdown-item" href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/lg-200x25.png"></a>
                                    <a class="dropdown-item" href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/luna-200x25.png"></a>
                                    <a class="dropdown-item" href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/nokia-200x25.png"></a>
                                    <a class="dropdown-item" href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/oppo-200x25.png"></a>
                                    <a class="dropdown-item" href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/samsung-200x25.png"></a>
                                    <a class="dropdown-item" href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/spc-200x25.png"></a>
                                    <a class="dropdown-item" href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/vivo-200x25.png"></a>
                                    <a class="dropdown-item" href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/xiaomi-200x25.png"></a>
                                </div>
                            </div>
                            <button class="btn my-2 my-sm-0" type="submit">Cari</button>
                        </form>
                    </ul>
                </div>
            </nav>
        </div>     

        <div class="main-wrapper product-details">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="tr-section product-details">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="product-details-slider">
                                        <?php 
                                            $images = explode('|', $product->IMAGE);
                                            foreach ($images as $image) {
                                                $this->db->select('NAME');
                                                $this->db->where('TOKEN', $image);
                                                $query = $this->db->get('UPLOAD');
                                                if ($query->num_rows() != 0) {
                                                    $img = $query->row()->NAME;
                                        ?>
                                        <div class="product">
                                            <img class="img-fluid" src="<?php echo base_url('uploads/products/' . $img); ?>" alt="<?php echo $product->NAME; ?>">
                                        </div>
                                        <?php
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="products-details-info">
                                        <span class="product-title"><?php echo $product->BRAND; ?></span>
                                        <h1><?php echo $product->NAME; ?></h1>
                                        <div class="quantity-price">
                                            <div class="price">
                                                <span>Rp.<?php echo $product->PRICE; ?>,-</span>
                                            </div>                                             
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tr-section products-description">
                            <ul class="nav nav-tabs description-tabs" role="tablist">
                                <li class="nav-item" role="presentation"><a class="nav-link active" href="#details" aria-controls="details" role="tab" data-toggle="tab">Detil</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#spec" aria-controls="spec" role="tab" data-toggle="tab" aria-expanded="true">Spesifikasi</a></li>
                            </ul>  

                            <div class="tab-content">
                                <div id="details" role="tabpanel" class="tab-pane fade show active">
                                    <?php echo $product->DETAIL; ?>
                                </div>

                                <div id="spec" role="tabpanel" class="tab-pane fade">
                                    <?php echo $product->SPEC; ?>
                                </div>
                            </div>           
                        </div>
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
                    $(".remove-icon").on('click', function() {
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
            });
        </script>
    </body>
</html> 