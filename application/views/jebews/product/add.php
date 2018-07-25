<!DOCTYPE html>
<html>
    <head>
        <?php echo $head; ?>
        <link href="<?php echo base_url(); ?>assets/plugins/pace/pace.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/plugins/font-awesome/font-awesome.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="<?php echo base_url(); ?>assets/plugins/select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="<?php echo base_url(); ?>assets/plugins/switchery/switchery.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="<?php echo base_url(); ?>assets/plugins/summernote/summernote.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="<?php echo base_url(); ?>assets/plugins/dropzone/dropzone.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/pages-icons.css" rel="stylesheet" type="text/css" />
        <link class="main-stylesheet" href="<?php echo base_url(); ?>assets/css/pages-light.css" rel="stylesheet" type="text/css" />
  </head>
  <body class="fixed-header menu-pin">
        <nav class="page-sidebar" data-pages="sidebar">
            <div class="sidebar-header">
                <img class="brand"
                    src="<?php echo base_url(); ?>assets/img/logo.png"
                    data-src="<?php echo base_url(); ?>assets/img/logo.png" 
                    data-src-retina="<?php echo base_url(); ?>assets/img/logo_2x.png" alt="logo" width="78" height="22">
            </div>
            <div class="sidebar-menu">
                <ul class="menu-items">
                    <li class="m-t-30">
                        <a href="<?php echo base_url(); ?>jebews/dashboard" class="detailed">
                            <span class="title">Dashboard</span>
                        </a>
                        <span class="icon-thumbnail"><i data-feather="shield"></i></span>
                    </li>
                    <li class="open active">
                        <a href="javascript:void(0);"><span class="title">Produk</span>
                        <span class="arrow open active"></span></a>
                        <span class="icon-thumbnail"><i data-feather="grid"></i></span>
                        <ul class="sub-menu">
                            <li class="active">
                                <a href="<?php echo base_url(); ?>jebews/product/add">Tambah Produk</a>
                                <span class="icon-thumbnail"><i data-feather="plus"></i></span>
                            </li>
                            <li class="">
                                <a href="<?php echo base_url(); ?>jebews/product/manage">Manage Produk</a>
                                <span class="icon-thumbnail"><i data-feather="list"></i></span>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><span class="title">Profil</span> 
                        <span class="arrow"></span></a>
                        <span class="icon-thumbnail"><i data-feather="user"></i></span>
                        <ul class="sub-menu">
                            <li class="">
                                <a href="<?php echo base_url(); ?>jebews/logout">Logout</a>
                                <span class="icon-thumbnail"><i data-feather="power"></i></span>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </nav>
        <div class="page-container ">
            <div class="header">
                <a href="javascript:void(0);" class="btn-link toggle-sidebar hidden-lg-up pg pg-menu" data-toggle="sidebar"></a>
                <div class="">
                    <div class="brand inline">
                        <img 
                            src="<?php echo base_url(); ?>assets/img/logo.png" 
                            data-src="<?php echo base_url(); ?>assets/img/logo.png" 
                            data-src-retina="<?php echo base_url(); ?>assets/img/logo_2x.png" alt="logo" width="78" height="22">
                    </div>
                </div>
            </div>
            <div class="page-content-wrapper">
                <div class="content ">
                    <div class="container-fluid container-fixed-lg">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Home</a></li>
                            <li class="breadcrumb-item active">Tambah Produk</li>
                        </ol>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Upload Gambar</div>
                                    </div>
                                    <div class="card-block">
                                        <form class="dropzone" action="/form-upload">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid container-fixed-lg">
                        <form id="form-work" class="form-horizontal" role="form" autocomplete="off">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Informasi Produk</div>
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group row">
                                                <label for="fname" class="col-md-3 control-label">Nama Produk</label>
                                                <div class="col-md-9">
                                                    <input id="fname" class="form-control" type="text" placeholder="Nama Produk" name="name" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 control-label">Merek</label>
                                                <div class="col-md-9">
                                                    <div class="radio radio-success">
                                                        <input id="male" type="radio" name="optionyes" value="male">
                                                        <label for="male">Advan</label>
                                                        <input id="female" type="radio" name="optionyes" value="female" checked="checked">
                                                        <label for="female">Asus</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="jumlah" class="col-md-3 control-label">Jumlah Produk</label>
                                                <div class="col-md-9">
                                                    <input id="jumlah" class="form-control" type="text" name="jumlah" placeholder="Jumlah Produk" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 control-label">Kapasitas</label>
                                                <div class="col-md-9">
                                                    <div class="radio radio-success">
                                                        <input id="male" type="radio" name="optionyes" value="male">
                                                        <label for="male">4/16</label>
                                                        <input id="female" type="radio" name="optionyes" value="female" checked="checked">
                                                        <label for="female">8/32</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 control-label">Warna</label>
                                                <div class="col-md-9">
                                                    <div class="radio radio-success">
                                                        <input id="male" type="radio" name="optionyes" value="male">
                                                        <label for="male">Merah</label>
                                                        <input id="female" type="radio" name="optionyes" value="female" checked="checked">
                                                        <label for="female">Kuning</label>
                                                        <input id="female" type="radio" name="optionyes" value="female" checked="checked">
                                                        <label for="female">Hijau</label>
                                                        <input id="female" type="radio" name="optionyes" value="female" checked="checked">
                                                        <label for="female">Biru</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="harga" class="col-md-3 control-label">Harga</label>
                                                <div class="col-md-9">
                                                    <input id="harga" class="form-control" type="text" name="harga" placeholder="Harga" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header ">
                                    <div class="card-title">Detil</div>
                                </div>
                                <div class="card-block no-scroll card-toolbar">
                                    <div id="detil-form"></div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header">
                                    <div class="card-title">Spesifikasi</div>
                                </div>
                                <div class="card-block no-scroll card-toolbar">
                                    <div id="spek-form"></div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <button class="btn btn-success" type="submit">Simpan</button>
                                            <button class="btn btn-default"><i class="pg-close"></i> Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=" container-fluid container-fixed-lg footer">
                    <div class="copyright sm-text-center">
                        <p class="small no-margin pull-left sm-pull-reset">
                            <span class="hint-text">Copyright &copy; 2018 </span>
                            <span class="font-montserrat">JAYABARU SELULAR</span>.
                            <span class="hint-text">All rights reserved. </span>
                        </p>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>

        <script src="<?php echo base_url(); ?>assets/plugins/feather-icons/feather.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/pace/pace.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/modernizr/modernizr.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/tether/tether.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-unveil/jquery.unveil.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-ios-list/jquery.ioslist.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-actual/jquery.actual.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-scrollbar/jquery.scrollbar.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/select2/select2.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/classie/classie.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/switchery/switchery.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/dropzone/dropzone.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/jquery.validate.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/pages.js"></script>
        <script type="text/javascript">
            (function($) {

                'use strict';

                $(document).ready(function() {

                    $.validator.addMethod("usd", function(value, element) {
                        return this.optional(element) || /^(\$?)(\d{1,3}(\,\d{3})*|(\d+))(\.\d{2})?$/.test(value);
                    }, "Please specify a valid dollar amount");

                    $('#form-personal').validate();
                    $("#form-project").validate();
                    $("#form-work").validate();

                    $('#form-personal').submit(function(e){
                      e.preventDefault()
                    })
                    $('#form-project').submit(function(e){
                      e.preventDefault()
                    })
                    $('#form-work').submit(function(e){
                      e.preventDefault()
                    })

                });

            })(window.jQuery);
        </script>
        <script type="text/javascript">
            (function($) {

                'use strict';

                $(document).ready(function() {
                    $(".list-view-wrapper").scrollbar();
                });

                $('.panel-collapse label').on('click', function(e){
                    e.stopPropagation();
                });

                feather.replace({
                    'width':16, 
                    'height':16 
                })
                
            })(window.jQuery);
        </script>
        <script>
            $(document).ready(function() {
               $('#detil-form, #spek-form').summernote({
                    height: "250px"
               });
            });
        </script>
    </body>
</html>