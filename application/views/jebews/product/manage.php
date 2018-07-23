<!DOCTYPE html>
<html>
    <head>
        <?php echo $head; ?>
        <link href="<?php echo base_url(); ?>assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="<?php echo base_url(); ?>assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="<?php echo base_url(); ?>assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="<?php echo base_url(); ?>assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="<?php echo base_url(); ?>assets/css/pages-icons.css" rel="stylesheet" type="text/css" />
        <link class="main-stylesheet" href="<?php echo base_url(); ?>assets/css/themes/light.css" rel="stylesheet" type="text/css" />
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

        <script src="<?php echo base_url(); ?>assets/plugins/feather-icons/feather.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/pace/pace.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/modernizr.custom.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/tether/js/tether.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-actual/jquery.actual.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/classie/classie.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/datatables.responsive.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/datatables-responsive/js/lodash.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/pages.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/datatables.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/scripts.js" type="text/javascript"></script>
    </body>
</html>