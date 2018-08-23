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
                            <li class="breadcrumb-item"><a href="<?php echo base_url('jebews/dashboard'); ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo base_url('jebews/profile'); ?>">Profil</a></li>
                            <li class="breadcrumb-item active">Pengaturan</li>
                        </ol>
                    </div>
                    <div class="container-fluid container-fixed-lg">
                        <form id="profile-settings" class="form-horizontal" role="form" method="POST" action="" autocomplete="off">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Biodata</div>
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group row">
                                                <label for="user-fullname" class="col-md-3 control-label">Username</label>
                                                <div class="col-md-9">
                                                    <input id="user-name" class="form-control" type="text" placeholder="Username" name="user-name" value="<?php echo $user->USERNAME; ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="user-fullname" class="col-md-3 control-label">Nama Lengkap</label>
                                                <div class="col-md-9">
                                                    <input id="user-fullname" class="form-control" type="text" placeholder="Nama Lengkap" name="user-fullname" value="<?php echo $user->NAME; ?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-3 control-label">Jenis Kelamin</label>
                                                <div class="col-md-9">
                                                    <div class="radio radio-success">
                                                        <?php echo form_radio('user-gender', 'L', ($user->GENDER === 'L'), 'id=user-gender-male'); ?>
                                                        <label for="user-gender-male">Laki - Laki</label>
                                                        <?php echo form_radio('user-gender', 'P', ($user->GENDER === 'P'), 'id=user-gender-female'); ?>
                                                        <label for="user-gender-female">Perempuan</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Ganti Password</div>
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group row">
                                                <label for="user-oldpass" class="col-md-3 control-label">Password Lama</label>
                                                <div class="col-md-9">
                                                    <input id="user-oldpass" class="form-control" type="password" placeholder="Password Lama" name="user-oldpass">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="user-newpass" class="col-md-3 control-label">Password Baru</label>
                                                <div class="col-md-9">
                                                    <input id="user-newpass" class="form-control" type="password" placeholder="Password Baru" name="user-newpass">
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <button class="btn btn-success" type="submit">Simpan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/jquery.validate.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/pages.js"></script>
        <script type="text/javascript">
            (function($) {

                'use strict';

                $(document).ready(function() {
                    $(".list-view-wrapper").scrollbar();
                    $('#profile-settings').validate()
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