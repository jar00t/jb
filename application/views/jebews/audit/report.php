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
                </div>
            </div>
            <div class="page-content-wrapper">
                <div class="content">
                    <div data-pages="parallax">
                        <div class="container-fluid p-l-25 p-r-25 sm-p-l-0 sm-p-r-0">
                            <div class="inner">
                                <ol class="breadcrumb sm-p-b-5">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>jebews/dashboard">Home</a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>jebews/audit">Audit</a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>jebews/audit/inventory">Inventaris</a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>jebews/audit/inventory/<?php echo $report->LOCATION; ?>"><?php echo ($location->NAME); ?></a></li>
                                    <li class="breadcrumb-item active">Report <?php echo $report->NAME; ?></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid container-fixed-lg">
                        <div class="card card-default m-t-20">
                            <div class="card-block">
                                <div class="invoice padding-50 sm-padding-10">
                                <div>
                                    <div class="pull-left">
                                        <img class="invoice-logo"
                                            src="<?php echo base_url(); ?>assets/img/jayabaru.png"
                                            data-src="<?php echo base_url(); ?>assets/img/jayabaru.png"
                                            data-src-retina="<?php echo base_url(); ?>assets/img/jayabaru2x.png" alt="JAYA BARU" width="235" height="47">
                                        <address class="m-t-10">
                                            CV.JAYA BARU SELULER
                                            <br>(0264) 200252.
                                            <br>
                                        </address>
                                    </div>
                                    <div class="pull-right sm-m-t-20">
                                        <h2 class="font-montserrat all-caps hint-text">Report</h2>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <br>
                                <br>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-lg-9 col-sm-height sm-no-padding">
                                            <p class="small no-margin">Telah di Audit oleh <b><?php echo $auditor; ?></b>:</p>
                                            <h5 class="semi-bold m-t-0"><?php echo $location->NAME; ?></h5>
                                            <address>
                                                <strong><?php echo $location->TYPE; ?></strong>
                                                <br>
                                                <?php echo $location->ADDRESS; ?>
                                            </address>
                                        </div>
                                        <div class="col-lg-3 sm-no-padding sm-p-b-20 d-flex align-items-end justify-content-between">
                                            <div>
                                                <div class="font-montserrat bold all-caps">Tipe Audit :</div>
                                                <div class="font-montserrat bold all-caps">Tanggal Audit :</div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="text-right">
                                                <div class="">INVENTARIS</div>
                                                <div class=""><?php echo date('d/m/Y', strtotime($report->DATE)); ?></div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive table-invoice">
                                    <?php
                                        $items = explode('|', $report->ITEMS);
                                        $qbefore = explode('|', $report->QBEFORE);
                                        $qafter = explode('|', $report->QAFTER);
                                        $notes = explode('|', $report->NOTES);
                                        foreach ($items as $key => $item) {
                                            $contents = explode(':', $item);
                                    ?>
                                    <table class="table m-t-50">
                                        <thead>
                                            <tr>
                                                <th class=""><?php echo $contents[0]; ?></th>
                                                <th class="text-center">Jumlah</th>
                                                <th class="text-center">Kurang</th>
                                                <th class="text-right">Sisa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $content_items = explode(',', $contents[1]);
                                                $qbef = explode(',', $qbefore[$key]);
                                                $qaft = explode(',', $qafter[$key]);
                                                $note = explode(',', $notes[$key]);
                                                foreach ($content_items as $key => $content_item) {
                                            ?>
                                            <tr>
                                                <td class="">
                                                    <p class="text-black"><?php echo strtoupper($content_item); ?></p>
                                                    <p class="small hint-text">
                                                        <b>Catatan:</b> <?php echo strtoupper($note[$key]); ?>
                                                    </p>
                                                </td>
                                                <td class="text-center"><?php echo $qbef[$key]; ?></td>
                                                <td class="text-center"><?php echo $qbef[$key] - $qaft[$key]; ?></td>
                                                <td class="text-right"><?php echo $qaft[$key]; ?></td>
                                            </tr>
                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                    <?php
                                        }
                                    ?>
                                </div>
                                <div>
                                    <br>
                                    <hr>
                                    <div>
                                        <img
                                            src="<?php echo base_url(); ?>assets/img/jayabaru.png"
                                            data-src="<?php echo base_url(); ?>assets/img/jayabaru.png"
                                            data-src-retina="<?php echo base_url(); ?>assets/img/jayabaru2x.png" alt="JAYA BARU" width="78" height="auto">
                                        <span class="m-l-70 text-black sm-pull-right">(0264) 200252</span>
                                    </div>
                                </div>
                            </div>
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
        <script src="<?php echo base_url(); ?>assets/js/pages.js"></script>
        <script type="text/javascript">
            (function($) {

                'use strict';

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