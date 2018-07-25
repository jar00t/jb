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

        <div class="main-wrapper product-details">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="tr-section product-details">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="product-details-slider">
                                        <div class="product">
                                            <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/slider1.png" alt="Image">
                                        </div>
                                        <div class="product">
                                            <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/slider2.png" alt="Image">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="products-details-info">
                                        <ul class="tr-list list-inline tr-share-content">
                                            <li class="share-icon">
                                                <i class="fa fa-share-alt" aria-hidden="true"></i>
                                                <span>
                                                    <a href="javascript:void(0)"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                    <a href="javascript:void(0)"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                    <a href="javascript:void(0)"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                </span>
                                            </li>
                                        </ul>
                                        <span class="product-title">Apple</span>
                                        <h1>Iphone 7</h1>
                                        <div class="rating-star">
                                            <ul class="tr-list rating">
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                                <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                            </ul>                                      
                                        </div>
                                        <div class="quantity-price">
                                            <div class="price">
                                                <span><del>Rp.20.000,-</del> Rp.20.000.000,-</span>
                                            </div>
                                            <div class="quantity" data-trigger="spinner">
                                                <a class="btn" href="javascript:void(0)" data-spin="down"><i class="fa fa-minus"></i></a>
                                                <input class="input-text" type="text" name="quantity" value="1" title="quantity">
                                                <a class="btn" href="javascript:void(0)" data-spin="up"><i class="fa fa-plus"></i></a>
                                            </div>                                              
                                        </div>
                                        <div class="add-to-cart">
                                            <a class="btn btn-primary" href="javascript:void(0)">Cek</a>
                                            <a href="javascript:void(0)"><span class="icon icon-pulse"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tr-section color-and-size">
                            <div class="tr-color">
                                <span>Warna</span>
                                <form action="#">
                                    <input type="radio" name="sellType" value="color1" id="color1"><label for="color1"></label>
                                    <input type="radio" name="sellType" value="color2" id="color2"><label for="color2"></label> 
                                    <input type="radio" name="sellType" value="color3" id="color3"><label for="color3"></label> 
                                    <input type="radio" name="sellType" value="color4" id="color4"><label for="color4"></label>
                                    <input type="radio" name="sellType" value="color5" id="color5"><label for="color5"></label>
                                    <input type="radio" name="sellType" value="color6" id="color6"><label for="color6"></label>
                                </form>
                            </div>
                            <div class="tr-size">
                                <div class="title">
                                    <span class="pull-left">Kapasitas</span>
                                </div>
                                <ul class="tr-list">
                                    <li><a href="javascript:void(0)">4/16</a></li>
                                    <li><a href="javascript:void(0)">8/32</a></li>
                                </ul>
                            </div>                                                   
                        </div>

                        <div class="tr-section products-description">
                            <ul class="nav nav-tabs description-tabs" role="tablist">
                                <li class="nav-item" role="presentation"><a class="nav-link active" href="#details" aria-controls="details" role="tab" data-toggle="tab">Detil</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#payment" aria-controls="payment" role="tab" data-toggle="tab" aria-expanded="true">Spesifikasi</a></li>
                            </ul>  

                            <div class="tab-content">
                                <div id="details" role="tabpanel" class="tab-pane fade show active">
                                    <p>#BREAKRESISTANT</p>
                                    <p>Polytron PRIME 7 didesain khusus dengan konstruksi frame metal dan teknologi Nano Molding yang presisi sehingga menghasilkan smartphone dengan built quality yang tinggi, menjadikannya kuat sekaligus ringan digenggam untuk melengkapi gaya hidupmu yang aktif.<br>Dipadukan dengan layar IPS Retina display dan Gorilla Glass dengan Native Damage Resistant yang dikenal dengan kekuatan pelindung display yang sudah teruji. Gorilla Glass juga memiliki kemampuan mentransmisikan spektrum warna secara luas sehingga kualitas layar tetap tajam dan kaya warna.</p>
                                    <p></p>
                                    <p></p>
                                    <p></p>
                                    <p>ENHANCED AUDIO</p>
                                    <p>Teknologi audio multi-channel yang memberikan suara surround, lengkap dengan suara bass yang mendalam dan suara vokal sejernih kristal. Dengan DTS Sound, dapatkan pengalaman mendengarkan suara seperti di barisan depan konser.</p>
                                    <p></p>
                                    <p></p>
                                    <p>WIRELESS CONTROL</p>
                                    <p>Dilengkapi dengan sensor pemancar infra red yang memungkinkan pengguna mengontrol perangkat elektronik* seperti AC, LED TV, Home Theater dan lainnya menggunakan Polytron PRIME 7.</p>
                                    <p></p>
                                    <p></p>
                                    <p>NFC WITH eSE</p>
                                    <p>Chip NFC dengan eSE (embedded Secure Element) yang ditanamkan pada Polytron PRIME 7 menawarkan perlindungan keamanan data pengguna dan mendukung transaksi pembayaran contactless yang aman. Mendukung standar EMVCo (Europay International, Mastercard, VISA) chip ini dapat memfasilitasi interoperabilitas dan penerimaan transaksi pembayaran yang aman.</p>
                                    <p></p>
                                    <p></p>
                                    <p>TURBO CHARGING</p>
                                    <p>Didukung dengan teknologi Turbo Charging terbaru sehingga proses pengisian baterai lebih cepat dan lebih efisien dari generasi sebelumnya. Cocok untuk menemani aktifitasmu yang padat sepanjang hari.</p>
                                    <p></p>
                                    <p></p>
                                    <p>13 MP REAR CAMERA</p>
                                    <p>Kualitas gambar optimal dengan kamera 13MP dan resolusi gambar 4160 x 3120 pixel, di lengkapi dengan Dual Tone Bright LED Flash yang memberikan cahaya secara merata untuk hasil foto lebih terang dan jelas di setiap kondisi</p>
                                    <p></p>
                                    <p></p>
                                    <p>ANTI FLARE LENS CONSTRUCTION</p>
                                    <p>Lensa kamera berkualitas tinggi yang didesain untuk mengurangi efek flare pada saat memotret dekat dengan sumber cahaya dan memaksimalkan penangkapan cahaya dari lingkungan sekitar sehingga menghasilkan kualitas gambar yang optimal.</p>
                                    <p></p>
                                    <p>PDAF SENSOR</p>
                                    <p>Sensor PDAF (Phase Detection Auto Focus] yang dilengkapi dengan Ball Bearing AF Motor menghasilkan pengambilan fokus gambar yang akurat dan lebih cepat, bahkan pada saat objek foto bergerak.</p>
                                    <p></p>
                                    <p></p>
                                    <p></p>
                                    <p>8MP FRONT CAMERA</p>
                                    <p>Kamera depan 8MP (wide angle) menangkap gambar dengan terang dan tajam. Tampilan Ultra High Definition dengan resolusi tinggi 3264 x 2448 pixel dilengkapi dengan multilayer lensa optikal, menjadikan setiap momen selfie-mu lebih berkesan.</p>
                                    <p></p>
                                    <p></p>
                                    <p>ISOCELL</p>
                                    <p>Sensor ISOCELL menghasilkan komposisi warna dan kualitas gambar lebih tajam walaupun dalam kondisi minim cahaya.</p>
                                </div>

                                <div id="payment" role="tabpanel" class="tab-pane fade">
                                   <ul class="tr-list">
                                        <li>Analogue Display </li>
                                        <li>Band Material: PU Leather Quartz movement</li>
                                        <li>Case Material: alloy </li>
                                        <li>High Quality, Stylish Design</li>
                                    </ul>
                                </div>
                            </div>           
                        </div>
                    </div>
                </div>

                <div class="related-product">
                    <div class="section-title text-center">
                        <h1><span>Produk Tak Kalah Keren</span></h1>
                    </div> 
                    <div class="random-product">
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="products">
                                    <div class="product">
                                        <div class="image-slider">
                                            <div class="product-image">
                                                <a href="javascript:void(0)"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/product1.png" alt="Image"></a>
                                            </div>
                                            <div class="product-image">
                                                <a href="javascript:void(0)"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/product1.png" alt="Image"></a>
                                            </div>
                                            <div class="product-image">
                                                <a href="javascript:void(0)"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/product1.png" alt="Image"></a>
                                            </div>
                                        </div>                                     
                                        <a href="javascript:void(0)">
                                            <span class="product-title">Apple Iphone 7</span>
                                            <span class="color">Dark Metal</span>
                                            <span class="price">Rp.123.000,-</span>
                                        </a>
                                        <div class="product-icon">
                                            <a href="javascript:void(0)"><span class="icon icon-info"></span></a>
                                            <a href="javascript:void(0)"><span class="icon icon-pulse"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="products">
                                    <div class="product">
                                        <div class="image-slider">
                                            <div class="product-image">
                                                <a href="javascript:void(0)"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/product1.png" alt="Image"></a>
                                            </div>
                                            <div class="product-image">
                                                <a href="javascript:void(0)"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/product1.png" alt="Image"></a>
                                            </div>
                                            <div class="product-image">
                                                <a href="javascript:void(0)"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/product1.png" alt="Image"></a>
                                            </div>
                                        </div>                                     
                                        <a href="javascript:void(0)">
                                            <span class="product-title">Apple Iphone 7</span>
                                            <span class="color">Dark Metal</span>
                                            <span class="price">Rp.123.000,-</span>
                                        </a>
                                        <div class="product-icon">
                                            <a href="javascript:void(0)"><span class="icon icon-info"></span></a>
                                            <a href="javascript:void(0)"><span class="icon icon-pulse"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="products">
                                    <div class="product">
                                        <div class="image-slider">
                                            <div class="product-image">
                                                <a href="javascript:void(0)"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/product1.png" alt="Image"></a>
                                            </div>
                                            <div class="product-image">
                                                <a href="javascript:void(0)"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/product1.png" alt="Image"></a>
                                            </div>
                                            <div class="product-image">
                                                <a href="javascript:void(0)"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/product1.png" alt="Image"></a>
                                            </div>
                                        </div>                                     
                                        <a href="javascript:void(0)">
                                            <span class="product-title">Apple Iphone 7</span>
                                            <span class="color">Dark Metal</span>
                                            <span class="price">Rp.123.000,-</span>
                                        </a>
                                        <div class="product-icon">
                                            <a href="javascript:void(0)"><span class="icon icon-info"></span></a>
                                            <a href="javascript:void(0)"><span class="icon icon-pulse"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="products">
                                    <div class="product">
                                        <div class="image-slider">
                                            <div class="product-image">
                                                <a href="javascript:void(0)"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/product1.png" alt="Image"></a>
                                            </div>
                                            <div class="product-image">
                                                <a href="javascript:void(0)"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/product1.png" alt="Image"></a>
                                            </div>
                                            <div class="product-image">
                                                <a href="javascript:void(0)"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/product/product1.png" alt="Image"></a>
                                            </div>
                                        </div>                                     
                                        <a href="javascript:void(0)">
                                            <span class="product-title">Apple Iphone 7</span>
                                            <span class="color">Dark Metal</span>
                                            <span class="price">Rp.123.000,-</span>
                                        </a>
                                        <div class="product-icon">
                                            <a href="javascript:void(0)"><span class="icon icon-info"></span></a>
                                            <a href="javascript:void(0)"><span class="icon icon-pulse"></span></a>
                                        </div>
                                    </div>
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