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
                        <a href="<?php echo base_url(); ?>dashboard" class="detailed">
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
                                <a href="<?php echo base_url(); ?>product/add">Tambah Produk</a>
                                <span class="icon-thumbnail"><i data-feather="plus"></i></span>
                            </li>
                            <li class="active">
                                <a href="<?php echo base_url(); ?>product/manage">Manage Produk</a>
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
                                <a href="<?php echo base_url(); ?>logout">Logout</a>
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
                    <a href="<?php echo base_url(); ?>product/add" class="btn btn-link text-primary m-l-20 hidden-md-down">Tambah Produk</a>
                    <a href="javascript:void(0);" class="search-link hidden-md-down" data-toggle="search"><i class="pg-search"></i>Cari <span class="bold">sesuatu...</span></a>
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
                    <div class="container-fluid container-fixed-lg">
                        <div class="card card-transparent">
                            <div class="card-block">
                                <table id="tableWithExportOptions" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nama Produk</th>
                                            <th>Merek</th>
                                            <th>Stok</th>
                                            <th>Harga</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>Advan i6</td>
                                            <td>Advan</td>
                                            <td>20</td>
                                            <td class="center"> Rp.4.000.000,-</td>
                                            <td class="center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>Advan i6</td>
                                            <td>Advan</td>
                                            <td>20</td>
                                            <td class="center"> Rp.4.000.000,-</td>
                                            <td class="center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>Advan i6</td>
                                            <td>Advan</td>
                                            <td>20</td>
                                            <td class="center"> Rp.4.000.000,-</td>
                                            <td class="center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>Advan i6</td>
                                            <td>Advan</td>
                                            <td>20</td>
                                            <td class="center"> Rp.4.000.000,-</td>
                                            <td class="center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>Advan i6</td>
                                            <td>Advan</td>
                                            <td>20</td>
                                            <td class="center"> Rp.4.000.000,-</td>
                                            <td class="center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>Advan i6</td>
                                            <td>Advan</td>
                                            <td>20</td>
                                            <td class="center"> Rp.4.000.000,-</td>
                                            <td class="center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>Advan i6</td>
                                            <td>Advan</td>
                                            <td>20</td>
                                            <td class="center"> Rp.4.000.000,-</td>
                                            <td class="center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>Advan i6</td>
                                            <td>Advan</td>
                                            <td>20</td>
                                            <td class="center"> Rp.4.000.000,-</td>
                                            <td class="center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>Advan i6</td>
                                            <td>Advan</td>
                                            <td>20</td>
                                            <td class="center"> Rp.4.000.000,-</td>
                                            <td class="center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>Advan i6</td>
                                            <td>Advan</td>
                                            <td>20</td>
                                            <td class="center"> Rp.4.000.000,-</td>
                                            <td class="center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>Advan i6</td>
                                            <td>Advan</td>
                                            <td>20</td>
                                            <td class="center"> Rp.4.000.000,-</td>
                                            <td class="center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>Advan i6</td>
                                            <td>Advan</td>
                                            <td>20</td>
                                            <td class="center"> Rp.4.000.000,-</td>
                                            <td class="center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>Advan i6</td>
                                            <td>Advan</td>
                                            <td>20</td>
                                            <td class="center"> Rp.4.000.000,-</td>
                                            <td class="center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>Advan i6</td>
                                            <td>Advan</td>
                                            <td>20</td>
                                            <td class="center"> Rp.4.000.000,-</td>
                                            <td class="center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>Advan i6</td>
                                            <td>Advan</td>
                                            <td>20</td>
                                            <td class="center"> Rp.4.000.000,-</td>
                                            <td class="center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>Advan i6</td>
                                            <td>Advan</td>
                                            <td>20</td>
                                            <td class="center"> Rp.4.000.000,-</td>
                                            <td class="center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success"><i class="fa fa-pencil"></i></button>
                                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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

                var responsiveHelper = undefined;
                var breakpointDefinition = {
                    tablet: 1024,
                    phone: 480
                };

                var initTableWithSearch = function() {
                    var table = $('#tableWithSearch');

                    var settings = {
                        "sDom": "<t><'row'<p i>>",
                        "destroy": true,
                        "scrollCollapse": true,
                        "oLanguage": {
                            "sLengthMenu": "_MENU_ ",
                            "sInfo": "Showing <b>_START_ to _END_</b> of _TOTAL_ entries"
                        },
                        "iDisplayLength": 5
                    };

                    table.dataTable(settings);

                    $('#search-table').keyup(function() {
                        table.fnFilter($(this).val());
                    });
                }

                var initTableWithDynamicRows = function() {
                    var table = $('#tableWithDynamicRows');


                    var settings = {
                        "sDom": "<t><'row'<p i>>",
                        "destroy": true,
                        "scrollCollapse": true,
                        "oLanguage": {
                            "sLengthMenu": "_MENU_ ",
                            "sInfo": "Showing <b>_START_ to _END_</b> of _TOTAL_ entries"
                        },
                        "iDisplayLength": 5
                    };


                    table.dataTable(settings);

                    $('#show-modal').click(function() {
                        $('#addNewAppModal').modal('show');
                    });

                    $('#add-app').click(function() {
                        table.dataTable().fnAddData([
                            $("#appName").val(),
                            $("#appDescription").val(),
                            $("#appPrice").val(),
                            $("#appNotes").val()
                        ]);
                        $('#addNewAppModal').modal('hide');

                    });
                }

                var initTableWithExportOptions = function() {
                    var table = $('#tableWithExportOptions');


                    var settings = {
                        "sDom": "<'exportOptions'T><'table-responsive't><'row'<p i>>",
                        "destroy": true,
                        "scrollCollapse": true,
                        "oLanguage": {
                            "sLengthMenu": "_MENU_ ",
                            "sInfo": "Showing <b>_START_ to _END_</b> of _TOTAL_ entries"
                        },
                        "iDisplayLength": 5,
                        "oTableTools": {
                            "sSwfPath": "assets/plugins/jquery-datatable/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
                            "aButtons": [{
                                "sExtends": "csv",
                                "sButtonText": "<i class='pg-grid'></i>",
                            }, {
                                "sExtends": "xls",
                                "sButtonText": "<i class='fa fa-file-excel-o'></i>",
                            }, {
                                "sExtends": "pdf",
                                "sButtonText": "<i class='fa fa-file-pdf-o'></i>",
                            }, {
                                "sExtends": "copy",
                                "sButtonText": "<i class='fa fa-copy'></i>",
                            }]
                        },
                        fnDrawCallback: function(oSettings) {
                            $('.export-options-container').append($('.exportOptions'));

                            $('#ToolTables_tableWithExportOptions_0').tooltip({
                                title: 'Export as CSV',
                                container: 'body'
                            });

                            $('#ToolTables_tableWithExportOptions_1').tooltip({
                                title: 'Export as Excel',
                                container: 'body'
                            });

                            $('#ToolTables_tableWithExportOptions_2').tooltip({
                                title: 'Export as PDF',
                                container: 'body'
                            });

                            $('#ToolTables_tableWithExportOptions_3').tooltip({
                                title: 'Copy data',
                                container: 'body'
                            });
                        }
                    };


                    table.dataTable(settings);

                }

                initTableWithSearch();
                initTableWithDynamicRows();
                initTableWithExportOptions();

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
    </body>
</html>