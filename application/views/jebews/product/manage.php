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
        <link href="<?php echo base_url(); ?>assets/plugins/jquery-datatable/jquery-datatable.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/plugins/jquery-datatable/jquery-datatable-fixed-columns.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/plugins/datatables-responsive/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen" />
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
                            <li class="">
                                <a href="<?php echo base_url(); ?>jebews/product/add">Tambah Produk</a>
                                <span class="icon-thumbnail"><i data-feather="plus"></i></span>
                            </li>
                            <li class="active">
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
        <div class="page-container">
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
                            <li class="breadcrumb-item active">Manage Produk</li>
                        </ol>
                    </div>
                    <div class="container-fluid container-fixed-lg well">
                        <div class="card card-transparent">
                            <div class="card-block">
                                <table id="product-table" class="table table-striped table-bordered dt-responsive">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Produk</th>
                                            <th>Merek</th>
                                            <th>Stok</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid container-fixed-lg footer">
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
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/jquery-datatable.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/jquery-datatable-table-tools.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/datatable-bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/jquery-datatable-bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/datatables.responsive.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/lodash.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/pages.js"></script>
        <script type="text/javascript">
            (function($) {

                'use strict';

                var initProductTable = function() {
                    var table = $('#product-table');

                    var settings = {
                        'dom': '<"row"<f l>><tr><"row"<"col-6"i><"col-6"p>>',
                        'destroy': true,
                        'scrollCollapse': true,
                        'processing': true,
                        'serverSide': true,
                        'order': [[0, 'desc']],
                        'ajax': {
                            'url': '<?php echo base_url("jebews/product/manage/load"); ?>',
                            'type': 'POST'
                        },
                        'columnDefs': [{
                            'targets': [0],
                            'orderable': false
                        }],
                        'oLanguage': {
                            'sLengthMenu': '_MENU_ ',
                            'sInfo': 'Menampilkan <b>_START_ sampai _END_</b> dari _TOTAL_ produk'
                        },
                        'iDisplayLength': 5
                    };

                    table.dataTable(settings);
                }

                $(document).ready(function() {
                    $('.list-view-wrapper').scrollbar();
                    $('select').select2({
                        placeholder: 'Baris per halaman',
                        width: '200px'
                    });
                    <?php if (isset($message)) { ?>
                    var message = '<?php echo $message[1]; ?>';
                    $('body').pgNotification({
                        style: 'bar',
                        message: message,
                        position: 'bottom',
                        timeout: 3000,
                        type: '<?php echo $message[0]; ?>'
                    }).show();
                    <?php } ?>
                });

                initProductTable();

                $('.panel-collapse label').on('click', function(e){
                    e.stopPropagation();
                });

                feather.replace({
                    'width':16, 
                    'height':16 
                })
                
            })(window.jQuery);
        </script>
    </body>
</html>