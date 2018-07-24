<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $head; ?>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/fonts.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/slick.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" />
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
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="javascript:void(0)"><i class="fa fa-users"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)"><i class="fa fa-phone"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)"><i class="fa fa-location-arrow"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>  

        <div class="main-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-3">
                        <div class="product-categories tr-section">
                            <div id="accordion" class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="#faq-1" class="collapsed" data-toggle="collapse" data-parent="#accordion">
                                            <span>Promo</span>
                                        </a>
                                    </div>

                                    <div id="faq-1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul class="tr-list">
                                                <li><a href="javascript:void(0)">Produk Terbaru</a></li>
                                                <li><a href="javascript:void(0)">Cashback</a></li>
                                                <li><a href="javascript:void(0)">Diskon</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="#faq-2" class="collapsed" data-toggle="collapse" data-parent="#accordion">
                                            <span>Tipe</span>
                                        </a>
                                    </div>

                                    <div id="faq-2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul class="tr-list">
                                                <li><a href="javascript:void(0)">Smartphone</a></li>
                                                <li><a href="javascript:void(0)">Tablet</a></li>
                                                <li><a href="javascript:void(0)">Laptop</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a href="#faq-6" data-toggle="collapse" data-parent="#accordion">
                                            <span>Merek</span>
                                        </a>
                                    </div>

                                    <div id="faq-6" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul class="tr-list">
                                                <li><a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/advan-200x25.png"></a></li>
                                                <li><a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/asus-200x25.png"></a></li>
                                                <li><a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/blackberry-200x25.png"></a></li>
                                                <li><a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/evercoss-200x25.png"></a></li>
                                                <li><a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/lenovo-200x25.png"></a></li>
                                                <li><a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/lg-200x25.png"></a></li>
                                                <li><a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/oppo-200x25.png"></a></li>
                                                <li><a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/vivo-200x25.png"></a></li>
                                                <li><a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/img/brands/samsung-200x25.png"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tr-section choices-option">
                            <ul class="tr-list">
                                <li class="tr-color">
                                    <span>Warna</span>
                                    <form action="">
                                        <input id="color1" type="radio" name="sellType" value="color1"><label for="color1"></label>
                                        <input id="color2" type="radio" name="sellType" value="color2"><label for="color2"></label> 
                                        <input id="color3" type="radio" name="sellType" value="color3"><label for="color3"></label> 
                                        <input id="color4" type="radio" name="sellType" value="color4"><label for="color4"></label>
                                    </form>
                                </li> 
                                <li>
                                    <span>Rentang Harga</span>                    
                                    <form method="get" action="">
                                        <div id="price_slider"></div>
                                        <div class="price_slider_amount">
                                            <input id="amount" type="text">
                                            <button class="btn btn-primary" type="submit">Cari</button>
                                        </div>
                                    </form>
                                </li>
                                <li class="tr-size">
                                    <span>Kapasitas</span>
                                    <ul class="tr-list">
                                        <li><a href="javascript:void(0)">4/16</a></li>
                                        <li><a href="javascript:void(0)">8/32</a></li>
                                    </ul>
                                </li>  
                                <li class="brands">
                                    <span>Merek</span>
                                    <form class="search-form" action="" method="get">
                                        <input class="form-control" type="text" name="sellType" placeholder="Keyword">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                        <ul class="tr-list">
                                            <li><input id="apple" type="checkbox" name="sellType"><label for="apple"> Apple</label></li>
                                            <li><input id="google" type="checkbox" name="sellType"><label for="google"> Advan</label></li>
                                            <li><input id="microsoft" type="checkbox" name="sellType"><label for="microsoft"> Samsung</label></li>
                                            <li><input id="intel" type="checkbox" name="sellType"><label for="intel">Lenovo</label></li>
                                            <li><input id="microsoft1" type="checkbox" name="sellType"><label for="microsoft1"> Asus</label></li>
                                            <li><input id="intel1" type="checkbox" name="sellType"><label for="intel1">LG</label></li>
                                        </ul>
                                    </form>                                    
                                </li>                                                            
                            </ul>
                            <div class="apply-changes">
                                <span><a href="javascript:void(0)"><i class="fa fa-check" aria-hidden="true"></i>Ubah Pencarian</a></span> 
                            </div>                 
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-9">
                        <div class="product-list">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="product">
                                        <a href="javascript:void(0)">
                                            <span class="product-image">
                                                <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/product1.png" alt="Image">
                                            </span>                                            
                                            <span class="product-title">Apple Iphone 7</span>
                                            <span class="color">Dark Metal</span>
                                            <span class="price">Rp.2.000.000,-</span>
                                        </a>
                                        <div class="product-icon">
                                            <a href="javascript:void(0)"><span class="icon icon-info"></span></a>
                                            <a href="javascript:void(0)"><span class="icon icon-pulse"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="product">
                                        <a href="javascript:void(0)">
                                            <span class="product-image">
                                                <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/product1.png" alt="Image">
                                            </span>                                            
                                            <span class="product-title">Apple Iphone 7</span>
                                            <span class="color">Dark Metal</span>
                                            <span class="price">Rp.2.000.000,-</span>
                                        </a>
                                        <div class="product-icon">
                                            <a href="javascript:void(0)"><span class="icon icon-info"></span></a>
                                            <a href="javascript:void(0)"><span class="icon icon-pulse"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="product">
                                        <a href="javascript:void(0)">
                                            <span class="product-image">
                                                <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/product1.png" alt="Image">
                                            </span>                                            
                                            <span class="product-title">Apple Iphone 7</span>
                                            <span class="color">Dark Metal</span>
                                            <span class="price">Rp.2.000.000,-</span>
                                        </a>
                                        <div class="product-icon">
                                            <a href="javascript:void(0)"><span class="icon icon-info"></span></a>
                                            <a href="javascript:void(0)"><span class="icon icon-pulse"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="product">
                                        <a href="javascript:void(0)">
                                            <span class="product-image">
                                                <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/product1.png" alt="Image">
                                            </span>                                            
                                            <span class="product-title">Apple Iphone 7</span>
                                            <span class="color">Dark Metal</span>
                                            <span class="price">Rp.2.000.000,-</span>
                                        </a>
                                        <div class="product-icon">
                                            <a href="javascript:void(0)"><span class="icon icon-info"></span></a>
                                            <a href="javascript:void(0)"><span class="icon icon-pulse"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="product">
                                        <a href="javascript:void(0)">
                                            <span class="product-image">
                                                <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/product1.png" alt="Image">
                                            </span>                                            
                                            <span class="product-title">Apple Iphone 7</span>
                                            <span class="color">Dark Metal</span>
                                            <span class="price">Rp.2.000.000,-</span>
                                        </a>
                                        <div class="product-icon">
                                            <a href="javascript:void(0)"><span class="icon icon-info"></span></a>
                                            <a href="javascript:void(0)"><span class="icon icon-pulse"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="product">
                                        <a href="javascript:void(0)">
                                            <span class="product-image">
                                                <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/product1.png" alt="Image">
                                            </span>                                            
                                            <span class="product-title">Apple Iphone 7</span>
                                            <span class="color">Dark Metal</span>
                                            <span class="price">Rp.2.000.000,-</span>
                                        </a>
                                        <div class="product-icon">
                                            <a href="javascript:void(0)"><span class="icon icon-info"></span></a>
                                            <a href="javascript:void(0)"><span class="icon icon-pulse"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tr-section tr-cta cta-2">
                                <div class="cta-info">
                                    <h1>Apple Watch</h1>
                                    <p>Apple Watch adalah Apel yang mirip jam tapi juga mirip Hape. dipake nya di tangan jadi weh jam tangan. gitu!</p>
                                    <div class="specification">
                                        <p>
                                            Spesifikasi 
                                            <span> 
                                                <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Lorem ipsum">
                                                    <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/others/1.png" alt="Image">
                                                </a>
                                                <a href="javascript:void(0)">Detil</a>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="buy-now">
                                        <span>Rp.2.000,-</span>
                                        <a class="btn btn-primary" href="javascript:void(0)">Lihat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="product">
                                        <a href="javascript:void(0)">
                                            <span class="product-image">
                                                <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/product1.png" alt="Image">
                                            </span>                                            
                                            <span class="product-title">Apple Iphone 7</span>
                                            <span class="color">Dark Metal</span>
                                            <span class="price">Rp.2.000.000,-</span>
                                        </a>
                                        <div class="product-icon">
                                            <a href="javascript:void(0)"><span class="icon icon-info"></span></a>
                                            <a href="javascript:void(0)"><span class="icon icon-pulse"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="product">
                                        <a href="javascript:void(0)">
                                            <span class="product-image">
                                                <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/product1.png" alt="Image">
                                            </span>                                            
                                            <span class="product-title">Apple Iphone 7</span>
                                            <span class="color">Dark Metal</span>
                                            <span class="price">Rp.2.000.000,-</span>
                                        </a>
                                        <div class="product-icon">
                                            <a href="javascript:void(0)"><span class="icon icon-info"></span></a>
                                            <a href="javascript:void(0)"><span class="icon icon-pulse"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="product">
                                        <a href="javascript:void(0)">
                                            <span class="product-image">
                                                <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/product1.png" alt="Image">
                                            </span>                                            
                                            <span class="product-title">Apple Iphone 7</span>
                                            <span class="color">Dark Metal</span>
                                            <span class="price">Rp.2.000.000,-</span>
                                        </a>
                                        <div class="product-icon">
                                            <a href="javascript:void(0)"><span class="icon icon-info"></span></a>
                                            <a href="javascript:void(0)"><span class="icon icon-pulse"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="product">
                                        <a href="javascript:void(0)">
                                            <span class="product-image">
                                                <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/product1.png" alt="Image">
                                            </span>                                            
                                            <span class="product-title">Apple Iphone 7</span>
                                            <span class="color">Dark Metal</span>
                                            <span class="price">Rp.2.000.000,-</span>
                                        </a>
                                        <div class="product-icon">
                                            <a href="javascript:void(0)"><span class="icon icon-info"></span></a>
                                            <a href="javascript:void(0)"><span class="icon icon-pulse"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="product">
                                        <a href="javascript:void(0)">
                                            <span class="product-image">
                                                <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/product1.png" alt="Image">
                                            </span>                                            
                                            <span class="product-title">Apple Iphone 7</span>
                                            <span class="color">Dark Metal</span>
                                            <span class="price">Rp.2.000.000,-</span>
                                        </a>
                                        <div class="product-icon">
                                            <a href="javascript:void(0)"><span class="icon icon-info"></span></a>
                                            <a href="javascript:void(0)"><span class="icon icon-pulse"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="product">
                                        <a href="javascript:void(0)">
                                            <span class="product-image">
                                                <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/product1.png" alt="Image">
                                            </span>                                            
                                            <span class="product-title">Apple Iphone 7</span>
                                            <span class="color">Dark Metal</span>
                                            <span class="price">Rp.2.000.000,-</span>
                                        </a>
                                        <div class="product-icon">
                                            <a href="javascript:void(0)"><span class="icon icon-info"></span></a>
                                            <a href="javascript:void(0)"><span class="icon icon-pulse"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tr-pagination tr-section text-center">
                                <ul class="pagination">
                                    <li class="float-left"><a href="javascript:void(0)"><span class="fa fa-arrow-left"></span></a></li>
                                    <li><a href="javascript:void(0)">1</a></li>
                                    <li><a href="javascript:void(0)">2</a></li>
                                    <li class="active"><a href="javascript:void(0)">3</a></li>
                                    <li><a href="javascript:void(0)">4</a></li>
                                    <li><a href="javascript:void(0)">5</a></li>
                                    <li><a href="javascript:void(0)">6</a></li>
                                    <li><a href="javascript:void(0)">7</a></li>
                                    <li><a href="javascript:void(0)">8</a></li>
                                    <li><a href="javascript:void(0)">9</a></li>
                                    <li><a href="javascript:void(0)">...</a></li>
                                    <li><a href="javascript:void(0)">21</a></li>
                                    <li><a href="javascript:void(0)">22</a></li>
                                    <li><a href="javascript:void(0)">23</a></li>
                                    <li><a href="javascript:void(0)">24</a></li>
                                    <li class="float-right"><a href="javascript:void(0)"><span class="fa fa-arrow-right"></span></a></li>
                                </ul>       
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

        <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/tether/js/tether.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/slick/slick.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-spinner/jquery.spinner.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    </body>
</html> 