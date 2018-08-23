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
		<link href="<?php echo base_url(); ?>assets/css/pages-widgets.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="<?php echo base_url(); ?>assets/css/pages-icons.css" rel="stylesheet" type="text/css">
		<link class="main-stylesheet" href="<?php echo base_url(); ?>assets/css/pages-light.css" rel="stylesheet" type="text/css" />
	</head>
	<body class="fixed-header dashboard menu-pin">
		<nav class="page-sidebar" data-pages="sidebar">
			<div class="sidebar-header">
				<img class="brand"
					src="<?php echo base_url(); ?>assets/img/logo.png"
					data-src="<?php echo base_url(); ?>assets/img/logo.png" 
					data-src-retina="<?php echo base_url(); ?>assets/img/logo_2x.png" alt="logo" width="78" height="22">
			</div>
			<?php echo $menu; ?>
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
					<a href="<?php echo base_url('jebews/product/add'); ?>" class="btn btn-cons btn-danger text-white m-l-20 hidden-md-down"><i class="fa fa-plus"></i> Tambah Produk</a>
				</div>
			</div>
			<div class="page-content-wrapper">
				<div class="content sm-gutter">
					<div data-pages="parallax">
						<div class="container-fluid p-l-25 p-r-25 sm-p-l-0 sm-p-r-0">
							<div class="inner">
								<ol class="breadcrumb sm-p-b-5">
									<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>jebews/dashboard">Home</a></li>
									<li class="breadcrumb-item active">Dashboard</li>
								</ol>
							</div>
						</div>
					</div>
					<div class="container-fluid p-l-25 p-r-25 p-t-0 p-b-25 sm-padding-10">
						<div class="row">
							<div class="col-lg-3 col-sm-6 d-flex flex-column">
								<div class="card no-border m-b-10">
									<div class="container-xs-height full-height">
										<div class="row-xs-height">
											<div class="col-xs-height col-top">
												<div class="card-header  top-left top-right">
													<div class="card-title">
														<span class="font-montserrat fs-11 all-caps">Produk Tersedia <i class="fa fa-chevron-right"></i></span>
													</div>
												</div>
											</div>
										</div>
										<div class="row-xs-height">
											<div class="col-xs-height col-top">
												<div class="p-l-20 p-t-50 p-b-40 p-r-20">
													<h3 class="no-margin p-b-5"><?php echo $product_available; ?></h3>
													<span class="small hint-text pull-left">dari <?php echo $product_total; ?> Produk</span>
												</div>
											</div>
										</div>
										<div class="row-xs-height">
											<div class="col-xs-height col-bottom">
												<div class="progress progress-small m-b-0">
													<div class="progress-bar progress-bar-primary" style="width:<?php echo $product_percentage; ?>%"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6 d-flex flex-column">
								<div class="card no-border m-b-10">
									<div class="container-xs-height full-height">
										<div class="row-xs-height">
											<div class="col-xs-height col-top">
												<div class="card-header  top-left top-right">
													<div class="card-title">
														<span class="font-montserrat fs-11 all-caps">Visitor Hari Ini <i class="fa fa-chevron-right"></i></span>
													</div>
												</div>
											</div>
										</div>
										<div class="row-xs-height">
											<div class="col-xs-height col-top">
												<div class="p-l-20 p-t-50 p-b-40 p-r-20">
													<h3 class="no-margin p-b-5"><?php echo $visitor_today; ?></h3>
													<span class="small hint-text pull-left"><?php echo round($visitor_percentage, 2); ?>% <?php echo $visitor_howmuach; ?> kemarin</span>
												</div>
											</div>
										</div>
										<div class="row-xs-height">
											<div class="col-xs-height col-bottom">
												<div class="progress progress-small m-b-0">
													<div class="progress-bar progress-bar-danger" style="width:<?php echo $visitor_percentage; ?>%"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 m-b-10 d-flex">
                				<div class="widget-11-2 card no-border card-condensed no-margin widget-loader-circle align-self-stretch d-flex flex-column">
                  					<div class="padding-25">
                    					<div class="pull-left">
                      						<h2 class="text-success no-margin">REPORT</h2>
                      						<p class="no-margin"><?php echo ($reports_noread == 0)? 'Tidak ada' : $reports_noread; ?> Laporan baru</p>
                    					</div>
                    					<h3 class="pull-right semi-bold"><?php echo $reports_total; ?></h3>
                    					<div class="clearfix"></div>
                  					</div>
                  					<div class="auto-overflow widget-11-2-table">
	                    				<table class="table table-condensed table-hover">
	                      					<tbody>
	                      					<?php
												foreach ($reports as $report) {
													$readers = explode(',', $report->READER);
													if (in_array($this->session->userdata['jb-user']['username'], $readers)) {
														$report_name = $report->NAME;
													} else {
														$report_name = '<b>' . $report->NAME . '</b>';
													}
											?>
												<tr>
	                          						<td class="font-montserrat all-caps fs-12 w-50"><a href="<?php echo base_url('jebews/audit/' . strtolower($report->TYPE) . '/report/' . $report->URL . '_' . $report->ID); ?>" target="_blank" onclick="$(this).html('<?php echo $report->NAME; ?>');"><?php echo $report_name; ?></a></td>
	                          						<td class="text-right b-r b-dashed b-grey w-25">
	                            						<span class="hint-text small"><?php echo date('d/m/Y', strtotime($report->DATE)); ?></span>
	                          						</td>
	                        					</tr>
											<?php
												}
											?>
	                      					</tbody>
	                    				</table>
	                  				</div>
	                  				<div class="padding-25 mt-auto">
	                    				<p class="small no-margin">
	                      					<a href="<?php echo base_url('jebews/audit/reports'); ?>"><i class="fa fs-16 fa-arrow-circle-o-down text-success m-r-10"></i></a>
	                      					<span class="hint-text ">Lihat semua laporan</span>
	                    				</p>
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