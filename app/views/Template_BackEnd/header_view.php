<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo SITE_BACK_ASSETS_BOOTSTRAPCSS; ?>/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
            <!-- Ionicons -->
            <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
                <!-- Theme style -->
                <link rel="stylesheet" href="<?php echo SITE_BACK_ASSETS_DISTCSS; ?>/AdminLTE.min.css">
                    <!-- AdminLTE Skins. Choose a skin from the css/skins
                         folder instead of downloading all of them to reduce the load. -->
                    <link rel="stylesheet" href="<?php echo SITE_BACK_ASSETS_DISTCSS; ?>/skins/_all-skins.min.css">
                        <!-- iCheck -->
                        <link rel="stylesheet" href="<?php echo SITE_BACK_ASSETS_PLUGINS; ?>/iCheck/flat/blue.css">
                            <!-- Morris chart -->
                            <link rel="stylesheet" href="<?php echo SITE_BACK_ASSETS_PLUGINS; ?>/morris/morris.css">
                                <!-- jvectormap -->
                                <link rel="stylesheet" href="<?php echo SITE_BACK_ASSETS_PLUGINS; ?>/jvectormap/jquery-jvectormap-1.2.2.css">
                                    <!-- Date Picker -->
                                    <link rel="stylesheet" href="<?php echo SITE_BACK_ASSETS_PLUGINS; ?>/datepicker/datepicker3.css">
                                        <!-- Daterange picker -->
                                        <link rel="stylesheet" href="<?php echo SITE_BACK_ASSETS_PLUGINS; ?>/daterangepicker/daterangepicker-bs3.css">
                                            <!-- bootstrap wysihtml5 - text editor -->
                                            <link rel="stylesheet" href="<?php echo SITE_BACK_ASSETS_PLUGINS; ?>/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
                                                <link rel="stylesheet" href="<?php echo SITE_BACK_ASSETS_CSS; ?>/alertify.css">
                                                    <!-- jQuery 2.1.4 -->
                                                    <script src="<?php echo SITE_BACK_ASSETS_PLUGINS; ?>/jQuery/jQuery-2.1.4.min.js"></script>
                                                    <!-- jQuery UI 1.11.4 -->
                                                    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
                                                    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
                                                    <script>
                                                        $.widget.bridge('uibutton', $.ui.button);
                                                    </script>
                                                    <!-- Bootstrap 3.3.5 -->
                                                    <script src="<?php echo SITE_BACK_ASSETS_BOOTSTRAPJS; ?>/bootstrap.min.js"></script>
                                                    <script src="<?php echo SITE_BACK_ASSETS_JS; ?>/alertify.js"></script>
                                                    <!-- Morris.js charts -->
                                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
                                                    <script src="<?php echo SITE_BACK_ASSETS_PLUGINS; ?>/morris/morris.min.js"></script>
                                                    <!-- Sparkline -->
                                                    <script src="<?php echo SITE_BACK_ASSETS_PLUGINS; ?>/sparkline/jquery.sparkline.min.js"></script>
                                                    <!-- jvectormap -->
                                                    <script src="<?php echo SITE_BACK_ASSETS_PLUGINS; ?>/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
                                                    <script src="<?php echo SITE_BACK_ASSETS_PLUGINS; ?>/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
                                                    <!-- jQuery Knob Chart -->
                                                    <script src="<?php echo SITE_BACK_ASSETS_PLUGINS; ?>/knob/jquery.knob.js"></script>
                                                    <!-- daterangepicker -->
                                                    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
                                                    <script src="<?php echo SITE_BACK_ASSETS_PLUGINS; ?>/daterangepicker/daterangepicker.js"></script>
                                                    <!-- datepicker -->
                                                    <script src="<?php echo SITE_BACK_ASSETS_PLUGINS; ?>/datepicker/bootstrap-datepicker.js"></script>
                                                    <!-- Bootstrap WYSIHTML5 -->
                                                    <script src="<?php echo SITE_BACK_ASSETS_PLUGINS; ?>/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
                                                    <!-- Slimscroll -->
                                                    <script src="<?php echo SITE_BACK_ASSETS_PLUGINS; ?>/slimScroll/jquery.slimscroll.min.js"></script>
                                                    <!-- FastClick -->
                                                    <script src="<?php echo SITE_BACK_ASSETS_PLUGINS; ?>/fastclick/fastclick.min.js"></script>
                                                    <!-- AdminLTE App -->
                                                    <script src="<?php echo SITE_BACK_ASSETS_DISTJS; ?>/app.min.js"></script>
                                                    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
                                                    <script src="<?php echo SITE_BACK_ASSETS_DISTJS; ?>/pages/dashboard.js"></script>
                                                    <!-- AdminLTE for demo purposes -->
                                                    <script src="<?php echo SITE_BACK_ASSETS_DISTJS; ?>/demo.js"></script>
                                                    <!-- Bootstrap 3.3.5 -->

                                                    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                                                    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                                                    <!--[if lt IE 9]>
                                                        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                                                        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                                                    <![endif]-->

                                                    <script>
                                                        var SITE_URL = "http://localhost/BadoFramework";
                                                        function reset() {
                                                            alertify.set({
                                                                labels: {
                                                                    ok: "Tamam",
                                                                    cancel: "Kapat"
                                                                },
                                                                delay: 3000,
                                                                buttonReverse: false,
                                                                buttonFocus: "ok"
                                                            });
                                                        }
                                                    </script>
                                                    </head>
                                                    <body class="hold-transition skin-blue sidebar-mini">
                                                    <div class="wrapper">
                                                        <header class="main-header">
                                                            <!-- Logo -->
                                                            <a href="<?php echo SITE_URLA; ?>" class="logo">
                                                                <!-- mini logo for sidebar mini 50x50 pixels -->
                                                                <span class="logo-mini"><b>A</b>LT</span>
                                                                <!-- logo for regular state and mobile devices -->
                                                                <span class="logo-lg"><b>Admin</b>LTE</span>
                                                            </a>
                                                            <!-- Header Navbar: style can be found in header.less -->
                                                            <nav class="navbar navbar-static-top" role="navigation">
                                                                <!-- Sidebar toggle button-->
                                                                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                                                                    <span class="sr-only">Toggle navigation</span>
                                                                </a>
                                                                <div class="navbar-custom-menu">
                                                                    <ul class="nav navbar-nav">
                                                                        <!-- User Account: style can be found in dropdown.less -->
                                                                        <li class="dropdown user user-menu">
                                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                                <img src="<?php echo SITE_PROFILRESIM; ?>/<?php echo Session::get("presim"); ?>" class="user-image" alt="User Image">
                                                                                    <span class="hidden-xs"><?php echo Session::get("kadi"); ?></span>
                                                                            </a>

                                                                            <ul class="dropdown-menu">
                                                                                <!-- User image -->
                                                                                <li class="user-header">
                                                                                    <img src="<?php echo SITE_PROFILRESIM; ?>/<?php echo Session::get("presim"); ?>" class="img-circle" alt="User Image">
                                                                                        <p>
                                                                                            <?php echo Session::get("kadi"); ?> - Web Developer
                                                                                        </p>
                                                                                </li>
                                                                                <!-- Menu Footer-->
                                                                                <li class="user-footer">
                                                                                    <div class="pull-left">
                                                                                        <a href="<?php echo SITE_URLA; ?>/Profil" class="btn btn-default btn-flat">Profil</a>
                                                                                    </div>
                                                                                    <div class="pull-right">
                                                                                        <a href="<?php echo SITE_URL; ?>/login/logout" class="btn btn-default btn-flat">Çıkış Yap</a>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="" align="right" >
                                                                    <a href="<?php echo SITE_URL; ?>"><button type="button" style="margin-top: 8px" class="btn btn-warning">Siteye Git</button></a>
                                                                </div>
                                                            </nav>
                                                        </header>