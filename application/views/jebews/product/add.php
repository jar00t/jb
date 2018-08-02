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
                                        <div class="dropzone"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid container-fixed-lg">
                        <form id="add-product" class="form-horizontal" role="form" method="POST" action="" autocomplete="off">
                            <input id="productImage" type="text" name="product-image" style="display:none" />
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Informasi Produk</div>
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group row">
                                                <label for="product-name" class="col-md-3 control-label">Nama Produk</label>
                                                <div class="col-md-9">
                                                    <input id="product-name" class="form-control" type="text" placeholder="Nama Produk" name="product-name" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 control-label">Tipe</label>
                                                <div class="col-md-9">
                                                    <div class="form-group p-t-0 p-b-0">
                                                        <select class="full-width" name="product-type" data-init-plugin="select2">
                                                            <option value="Smartphone">Smartphone</option>
                                                            <option value="Tablet">Tablet</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 control-label">Merek</label>
                                                <div class="col-md-9">
                                                    <div class="form-group p-t-0 p-b-0">
                                                        <select class="full-width" name="product-brand" data-init-plugin="select2">
                                                            <?php 
                                                                $this->load->config('brands');
                                                                foreach ($this->config->item('brands') as $brand) {
                                                            ?>
                                                            <option value="<?php echo strtoupper($brand); ?>"><?php echo ucfirst($brand); ?></option>
                                                            <?php 
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="product-quantity" class="col-md-3 control-label">Jumlah Produk</label>
                                                <div class="col-md-9">
                                                    <input id="product-quantity" class="form-control" type="number" name="product-quantity" placeholder="Jumlah Produk" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 control-label">Kapasitas</label>
                                                <div class="col-md-9">
                                                    <div class="radio radio-success">
                                                        <input id="product-capacity-4-16" type="radio" name="product-capacity" value="4/16">
                                                        <label for="product-capacity-4-16">4/16</label>
                                                        <input id="product-capacity-8-32" type="radio" name="product-capacity" value="8/32">
                                                        <label for="product-capacity-8-32">8/32</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="product-price" class="col-md-3 control-label">Harga</label>
                                                <div class="col-md-9">
                                                    <input id="product-price" class="form-control" type="number" name="product-price" placeholder="Harga" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="product-quantity" class="col-md-3 control-label">Caption</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" style="min-height:200px" name="product-caption" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header">
                                    <div class="card-title">Detil</div>
                                </div>
                                <div class="card-block no-scroll card-toolbar">
                                    <div id="detil-form"></div>
                                    <textarea id="productDetail" style="display:none" name="product-detail"></textarea>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header">
                                    <div class="card-title">Spesifikasi</div>
                                </div>
                                <div class="card-block no-scroll card-toolbar">
                                    <div id="spek-form"></div>
                                    <textarea id="productSpec" style="display:none" name="product-spec"></textarea>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <button class="btn btn-success" type="submit">Simpan</button>
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
               $('#add-product').validate()
            });

            $('#add-product').submit(function( event ) {
                $("#productDetail").val($('#detil-form').code());
                $("#productSpec").val($('#spek-form').code());
            });

            Dropzone.autoDiscover = false;

            var productimg_upload = new Dropzone(".dropzone",{
            url: '<?php echo base_url("jebews/product/add/upload") ?>',
                maxFilesize: 2,
                method: 'post',
                acceptedFiles: 'image/*',
                paramName: 'productimgfile',
                dictInvalidFileType: 'Type file ini tidak dizinkan',
                addRemoveLinks: true,
            });

            productimg_upload.on('sending', function(a,b,c){
                a.token = Math.random();
                c.append('img_token', a.token);
                $('#productImage').val($('#productImage').val() + '|' + a.token);
            });

            productimg_upload.on('removedfile', function(a){
                var token = a.token;
                $.ajax({
                    type: 'post',
                    data: {token:token},
                    url: '<?php echo base_url("jebews/product/add/delete") ?>',
                    cache: false,
                    dataType: 'json',
                    success: function(){
                        $('#productImage').val($('#productImage').val().replace('|' + a.token, ''));
                        $('body').pgNotification({
                            style: 'bar',
                            message: 'Foto terhapus',
                            position: 'bottom',
                            timeout: 3000,
                            type: 'success'
                        }).show();
                    },
                    error: function(){
                        console.log('Error');
                    }
                });
            });
        </script>
    </body>
</html>