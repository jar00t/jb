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
        <link href="<?php echo base_url(); ?>assets/css/pages-icons.css" rel="stylesheet" type="text/css">
        <link class="main-stylesheet" href="<?php echo base_url(); ?>assets/css/themes/light.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript">
            window.onload = function() {
              if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
                document.head.innerHTML += '<link href="<?php echo base_url(); ?>asstes/css/windows.chrome.fix.css" rel="stylesheet" type="text/css" />'
            }
        </script>
	</head>
    <body class="fixed-header menu-pin">
        <div class="login-wrapper ">
            <div class="bg-pic">
                <img class="lazy"
                	src="<?php echo base_url(); ?>assets/img/login-wallpaper.jpg" 
                	data-src="<?php echo base_url(); ?>assets/img/login-wallpaper.jpg" 
                	data-src-retina="<?php echo base_url(); ?>login-wallpaper.jpg" alt="wallpaper">
            </div>
            <div class="login-container bg-white">
                <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
                    <img 
                    	src="<?php echo base_url(); ?>assets/img/logo.png" 
                    	ata-src="<?php echo base_url(); ?>assets/img/logo.png" 
                    	data-src-retina="<?php echo base_url(); ?>assets/img/logo_2x.png" alt="logo" width="78" height="22">

                    <p class="p-t-35">Login menggunakan userid yang aktif.</p>
                    
                    <form id="form-login" class="p-t-15" role="form" action="">
                        <div class="form-group form-group-default">
                            <label>Login</label>
                            <div class="controls">
                                <input class="form-control" type="text" name="username" placeholder="Username" required>
                            </div>
                        </div>
                        <div class="form-group form-group-default">
                            <label>Password</label>
                            <div class="controls">
                                <input class="form-control" type="password" name="password" placeholder="Password" required>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-cons m-t-10" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    
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
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/pages.min.js"></script>
        <script>
            $(function() {
              $('#form-login').validate()
            })
        </script>
    </body>
</html>