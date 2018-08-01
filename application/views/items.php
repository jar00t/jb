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
            <nav class="navbar navbar-toggleable-md" style="background:#b0171f">
                <a id="jb-main-logo" class="navbar-brand" href="<?php echo base_url(); ?>"></a>
                <a class="btn navbar-toggler navbar-toggler-right no-border" href="javascript:void(0)">
                    <span class="navbar-toggler-icon"></span>
                </a>

                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <form id="jb-search-form" class="form-inline" method="GET" action="<?php echo base_url($page); ?>">
                            <span id="basic-addon1" class="input-group-text ml-lg-5"><i style="padding:4px" class="fa fa-search"></i></span>
                            <input class="form-control" type="search" name="keyword" placeholder="Cari sesuatu..." value="<?php if ($this->input->get('keyword')) { echo $this->input->get('keyword'); } ?>" aria-label="Cari sesuatu..." autocomplete="off">
                        </form>
                    </ul>
                </div>
            </nav>
        </div>      

        <div class="main-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-3">
                        <div class="product-categories tr-section">
                            <div id="product-categories" class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="#product-type" data-toggle="collapse" data-parent="#product-categories">
                                            <span>Tipe</span>
                                        </a>
                                    </div>

                                    <div id="product-type" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul class="tr-list">
                                                <?php 
                                                    $this->load->config('types');
                                                    foreach ($this->config->item('types') as $type) {
                                                        $tpage = explode('/', $page);
                                                        $tpage[2] = strtolower($type);
                                                        $tpage = implode('/', $tpage);
                                                        $turl = base_url($tpage);
                                                        if (count($url) == 2) {
                                                            $turl .= '?' . $url[1];
                                                        }
                                                ?>
                                                <li <?php if ($url[0] === base_url($tpage)) { echo 'class="active"'; } ?>>
                                                    <a href="<?php echo $turl; ?>"><?php echo $type; ?></a>
                                                </li>
                                                <?php
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="#product-brand" data-toggle="collapse" data-parent="#product-categories">
                                            <span>Merek</span>
                                        </a>
                                    </div>

                                    <div id="product-brand" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul class="tr-list">
                                                <?php 
                                                    $this->load->config('brands');
                                                    foreach ($this->config->item('brands') as $brand) {
                                                        $bpage = explode('/', $page);
                                                        $bpage[1] = strtolower($brand);
                                                        $bpage = implode('/', $bpage);
                                                        $burl = base_url($bpage);
                                                        if (count($url) == 2) {
                                                            $burl .= '?' . $url[1];
                                                        }
                                                ?>
                                                <li <?php if ($url[0] === base_url($bpage)) { echo 'class="active"'; } ?>>
                                                    <a href="<?php echo $burl; ?>"><?php echo $brand; ?></a>
                                                </li>
                                                <?php
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form name="product-filter" method="GET" action="<?php echo base_url($page); ?>">
                            <div class="tr-section choices-option">
                                <ul class="tr-list">
                                    <li>
                                        <span>Rentang Harga</span>                    
                                        <div id="price_slider"></div>
                                        <div class="price_slider_amount">
                                            <input id="amount" type="text" name="price-range">
                                        </div>
                                    </li> 
                                    <li>
                                        <span>Keyword</span>
                                        <input class="form-control" type="text" name="keyword" value="<?php if ($this->input->get('keyword')) { echo $this->input->get('keyword'); } ?>" autocomplete="off">
                                    </li>                                                            
                                    <li>
                                        <span class="text-center">
                                            <button class="filter-submit" type="submit"><i class="fa fa-check" aria-hidden="true"></i>Ubah Pencarian</a></button>                                 
                                        </span>
                                    </li>
                                </ul>            
                            </div>
                        </form>
                    </div>
                    <div class="col-md-8 col-lg-9">
                        <div class="product-list">
                            <div class="row">
                                <?php
                                    foreach ($products as $product) {
                                ?>
                                <div class="col-md-6 col-lg-4">
                                    <div class="product">
                                        <a href="<?php echo base_url($product['URL']); ?>">
                                            <span class="product-image">
                                                <?php
                                                    $images = explode('|', $product['IMAGE']);
                                                    $this->db->select('NAME');
                                                    $this->db->where('TOKEN', $images[1]);
                                                    $query = $this->db->get('UPLOAD');
                                                    if ($query->num_rows() != 0) {
                                                        $img = $query->row()->NAME;
                                                ?>
                                                <img class="img-fluid" src="<?php echo base_url('uploads/products/' . $img); ?>" alt="<?php echo $product['NAME']; ?>">
                                                <?php
                                                    }
                                                ?>
                                            </span>                                            
                                            <span class="product-title"><?php echo $product['NAME']; ?></span>
                                            <span class="color"><?php echo $product['BRAND']; ?></span>
                                            <span class="price">Rp.<?php echo number_format($product['PRICE'], NULL, '.', '.'); ?>,-</span>
                                        </a>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
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
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui-slider.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-spinner/jquery.spinner.js"></script>
        <script type="text/javascript">
            jQuery(function ($) {

                'use strict';

                (function() {

                    $('[data-toggle="tooltip"]').tooltip();

                }());

                $(function() {
                    $('#price_slider').slider({
                        range: true,
                        min: 0,
                        max: 20,
                        values: [ <?php echo $price_min/1000000; ?>, <?php echo $price_max/1000000; ?> ],
                        slide: function(event, ui) {
                            $('#amount').val( 'Rp.' + ui.values[ 0 ] + ' - Rp.' + ui.values[ 1 ] + ' jt' );
                        }
                    });
                    $('#amount').val( 'Rp.' + $('#price_slider').slider('values', 0) + ' - Rp.' + $('#price_slider').slider('values', 1) + ' jt');
                } );

            });
        </script>
    </body>
</html> 