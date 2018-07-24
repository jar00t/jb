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
			<div class="sidebar-menu">
				<ul class="menu-items">
					<li class="m-t-30 active">
						<a href="<?php echo base_url(); ?>dashboard" class="detailed">
							<span class="title">Dashboard</span>
						</a>
						<span class="icon-thumbnail"><i data-feather="shield"></i></span>
					</li>
					<li class="">
						<a href="javascript:void(0);"><span class="title">Produk</span>
						<span class="arrow"></span></a>
						<span class="icon-thumbnail"><i data-feather="grid"></i></span>
						<ul class="sub-menu">
							<li class="">
								<a href="<?php echo base_url(); ?>product/add">Tambah Produk</a>
								<span class="icon-thumbnail"><i data-feather="plus"></i></span>
							</li>
							<li class="">
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
				<div class="content sm-gutter">
					<div data-pages="parallax">
						<div class="container-fluid p-l-25 p-r-25 sm-p-l-0 sm-p-r-0">
							<div class="inner">
								<ol class="breadcrumb sm-p-b-5">
									<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Home</a></li>
									<li class="breadcrumb-item active">Dashboard</li>
								</ol>
							</div>
						</div>
					</div>
					<div class="container-fluid p-l-25 p-r-25 p-t-0 p-b-25 sm-padding-10">
						<div class="row">
							<div class="col-lg-3 col-sm-6 d-flex flex-column">
								<div class="card no-border widget-loader-bar m-b-10">
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
													<h3 class="no-margin p-b-5">56</h3>
													<span class="small hint-text pull-left">dari 8 Merek</span>
												</div>
											</div>
										</div>
										<div class="row-xs-height">
											<div class="col-xs-height col-bottom">
												<div class="progress progress-small m-b-0">
													<div class="progress-bar progress-bar-primary" style="width:71%"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-sm-6 d-flex flex-column">
								<div class="card no-border widget-loader-bar m-b-10">
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
													<h3 class="no-margin p-b-5">423</h3>
													<span class="small hint-text pull-left">22% lebih banyak dari kemarin</span>
												</div>
											</div>
										</div>
										<div class="row-xs-height">
											<div class="col-xs-height col-bottom">
												<div class="progress progress-small m-b-0">
													<div class="progress-bar progress-bar-danger" style="width:15%"></div>
												</div>
											</div>
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
		</div>

		<script src="<?php echo base_url(); ?>assets/plugins/feather-icons/feather.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/pace/pace.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/modernizr/modernizr.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/tether/tether.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/bootstrap.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/jquery-ios-list/jquery.ioslist.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/jquery-actual/jquery.actual.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/jquery-scrollbar/jquery.scrollbar.js"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/classie/classie.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/plugins/switchery/switchery.js" type="text/javascript"></script>
		<script src="<?php echo base_url(); ?>assets/js/pages.js"></script>
		<script type="text/javascript">
		    $(document).ready(function() {
		        var bars = $('.widget-loader-bar');
		        var circles = $('.widget-loader-circle');
		        var circlesLg = $('.widget-loader-circle-lg');
		        var circlesLgMaster = $('.widget-loader-circle-lg-master');

		        bars.each(function() {
		            var elem = $(this);
		            elem.card({
		                progress: 'bar',
		                onRefresh: function() {
		                    setTimeout(function() {
		                        elem.card({
		                            refresh: false
		                        });
		                    }.bind(this), 2000);
		                }
		            });
		        });

		        circles.each(function() {
		            var elem = $(this);
		            elem.card({
		                progress: 'circle',
		                onRefresh: function() {
		                    setTimeout(function() {
		                        elem.card({
		                            refresh: false
		                        });
		                    }.bind(this), 2000);
		                }
		            });
		        });

		        circlesLg.each(function() {
		            var elem = $(this);
		            elem.card({
		                progress: 'circle-lg',
		                progressColor: 'white',
		                overlayColor: '0,0,0',
		                overlayOpacity: 0.6,
		                onRefresh: function() {
		                    setTimeout(function() {
		                        elem.card({
		                            refresh: false
		                        });
		                    }.bind(this), 2000);
		                }
		            });
		        });

		        circlesLgMaster.each(function() {
		            var elem = $(this);
		            elem.card({
		                progress: 'circle-lg',
		                progressColor: 'master',
		                overlayOpacity: 0.6,
		                onRefresh: function() {
		                    setTimeout(function() {
		                        elem.card({
		                            refresh: false
		                        });
		                    }.bind(this), 2000);
		                }
		            });
		        });
		        
		     });
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