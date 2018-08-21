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
            <?php echo $menu; ?>
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
                    <?php if ($table !== 'location') { ?>
                    <button id="add-modal" class="btn btn-cons btn-primary m-l-20 hidden-md-down"><i class="fa fa-plus"></i> Tambah</button>
                    <?php } ?>
                </div>
            </div>
            <div class="page-content-wrapper">
                <div class="content">
                    <?php if ($table !== 'location') { ?>
                    <div class="modal fade stick-up" id="addNewModal" tabindex="-1" role="dialog" aria-labelledby="addNewModal" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form id="add-inventory" method="POST" action="" role="form">
                                    <div class="modal-header clearfix">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i></button>
                                        <h4 class="p-b-5"><span class="semi-bold">Tambah</span> Inventaris</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group form-group-default">
                                                    <label>Nama</label>
                                                    <input name="inventory-name" type="text" class="form-control" placeholder="Nama Barang Inventaris" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>Jumlah</label>
                                                    <input name="inventory-quantity" type="number" class="form-control" placeholder="Jumlah Barang" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group form-group-default">
                                                    <label>Tipe</label>
                                                    <input name="inventory-type" type="text" class="form-control" placeholder="Kategori Barang" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary  btn-cons">Tambah</button>
                                        <button type="button" class="btn btn-cons" data-dismiss="modal">Batal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="container-fluid container-fixed-lg" style="z-index:2">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>jebews/dashboard">Home</a></li>
                            <?php
                                if ($table !== 'location') {
                            ?>
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>jebews/master/inventory">Inventaris</a></li>
                            <li class="breadcrumb-item active"><?php echo ($page_name); ?></li>
                            <?php
                                } else {
                            ?>
                            <li class="breadcrumb-item active">Inventaris</li>
                            <?php
                                }
                            ?>
                        </ol>
                    </div>
                    <div class="tbl-container">
                        <div class="card card-transparent tbl-card">
                            <div class="card-block tbl-block">
                                <table id="<?php echo $table; ?>-table" class="table table-striped tbl">
                                    <thead class="bg-white">
                                        <tr>
                                            <?php
                                                foreach ($table_cols as $table_col) {
                                            ?>
                                            <th><?php echo $table_col; ?></th>
                                            <?php
                                                }
                                            ?>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
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
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/jquery.validate.js" type="text/javascript"></script>
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

                var initAutoWidthTable = function() {
                    if ($(document).width() <= 1200 && $(document).width() >= 993) {
                        $('#<?php echo $table; ?>-table').css('width', ($(document).width() - 70) + 'px');
                    } else if ($(document).width() <= 992) {
                        $('#<?php echo $table; ?>-table').css('width', '100%');
                    } else {
                        $('#<?php echo $table; ?>-table').css('width', ($(document).width() - 250) + 'px');
                    }
                    $('.tbl > tbody').css('height', ($(document).height() - 210) + 'px');
                    if ($('.dataTables_empty').length == 0) {
                        for (var i = 1; i <= $('tr th').length; i++) {
                            $('tr td:nth-child(' + i + ')').css('width', ($('tr th:nth-child(' + i + ')').width() + 20) + 'px');
                        };
                    } else {
                        $('tr td').css('width', ($('tbody').width()) + 'px').css('border', '0');
                    }
                }

                var initProductTable = function() {
                    var table = $('#<?php echo $table; ?>-table');

                    var settings = {
                        'dom': '<t><<"tbl-prc"r><"tbl-pgn"p>><<"tbl-src"f><"tbl-len"l>>',
                        'destroy': true,
                        'scrollCollapse': true,
                        'processing': true,
                        'serverSide': true,
                        'order': [[0, 'desc']],
                        'ajax': {
                            'url': '<?php echo base_url("jebews/master/inventory/load" . $page_url); ?>',
                            'type': 'POST'
                        },
                        'columnDefs': [{
                            'targets': [0],
                            'orderable': false
                        }],
                        'oLanguage': {
                            'sLengthMenu': '_MENU_',
                            'sSearch': 'Cari',
                            'sEmptyTable': 'Data masih kosong',
                            'sZeroRecords': 'Data tidak ditemukan'
                        },
                        'iDisplayLength': 5,
                        'initComplete': function(settings, json) {
                            initAutoWidthTable();
                        },
                        'drawCallback': function(settings) {
                           initAutoWidthTable();
                        },
                    };

                    table.dataTable(settings);
                }

                $(document).ready(function() {
                    $('.list-view-wrapper').scrollbar();
                    $('select').select2({
                        placeholder: 'Baris',
                        width: '100px'
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
                $(window).resize(function() {
                    initAutoWidthTable();
                });

                initProductTable();

                $('.panel-collapse label').on('click', function(e){
                    e.stopPropagation();
                });

                <?php if ($table !== 'location') { ?>
                $('#add-modal').click(function() {
                    $('#addNewModal').modal('show');
                    $('#add-inventory').validate();
                });
                <?php } ?>

                feather.replace({
                    'width':16, 
                    'height':16 
                })
                
            })(window.jQuery);
        </script>
    </body>
</html>