<!doctype html>
<html lang="en" dir="ltr">

    <head>
        
        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
        <meta name="author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">
        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/images/brand/favicon.ico" />

        <!-- TITLE -->
        <title>WA Broadcast</title>

        <!-- BOOTSTRAP CSS -->
        <link id="style" href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

        <!-- STYLE CSS -->
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/dark-style.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/transparent-style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/skin-modes.css" rel="stylesheet" />

        <!--- FONT-ICONS CSS -->
        <link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet" />

        <!-- COLOR SKIN CSS -->
        <link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/colors/color1.css" />

        <!-- INTERNAL SWITCHER CSS -->
        <link href="<?php echo base_url(); ?>assets/switcher/css/switcher.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/switcher/demo.css" rel="stylesheet" />
        
    </head>

    <body class="app sidebar-mini ltr login-img">

        <!-- BACKGROUND-IMAGE -->
        <div class="">

            <!-- GLOABAL LOADER -->
            <div id="global-loader">
                <img src="<?php echo base_url(); ?>assets/images/loader.svg" class="loader-img" alt="Loader">
            </div>
            <!-- /GLOABAL LOADER -->

            <!-- PAGE -->
            <div class="page">
                <div class="">
                    <!-- Theme-Layout -->

                    <!-- CONTAINER OPEN -->
                    <div class="col col-login mx-auto mt-7">
                        <div class="text-center">
                            <h2 class="dark-mode">WA Broadcast</h2>
                        </div>
                    </div>

                    <div class="container-login100">
                        <div class="wrap-login100 p-6">
                            <span class="login100-form-title pb-5">
                                Login
                            </span>
                            <div class="panel panel-primary">
                                <div class="tab-menu-heading">
                                    <div class="tabs-menu1">
                                        <!-- Tabs -->
                                        <ul class="nav panel-tabs">
                                            <li class="mx-0"><a href="login.html#tab5" class="active" data-bs-toggle="tab">Email</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="panel-body tabs-menu-body p-0 pt-5">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <form action="<?php echo base_url(); ?>auth/signin" method="post">
                                                <div class="form-group">
                                                    <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                                        <a class="input-group-text bg-white text-muted">
                                                            <i class="fa fa-user text-muted" aria-hidden="true"></i>
                                                        </a>
                                                        <input class="input100 border-start-0 form-control ms-0" name="username" placeholder="Username / Email" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                        <a class="input-group-text bg-white text-muted">
                                                            <i class="zmdi zmdi-eye text-muted" aria-hidden="true" ></i>
                                                        </a>
                                                        <input class="input100 border-start-0 form-control ms-0" type="password" name="password" placeholder="Password" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck">
                                                        <label class="form-check-label" for="invalidCheck">Remember me</label>
                                                    </div>
                                                </div>
                                            <button class="login100-form-btn btn btn-primary" type="submit">Login</button>
                                            <div class="form-group">
                                                <div class="container-login100-form-btn">
                                                    
                                                </div>
                                                <div class="text-end pt-4">
                                                    <p class="mb-0"><a href="/resetpassword" class="text-primary ms-1">Forgot Password?</a></p>
                                                </div>
                                            </div>
                                            </form>       
                                            <div class="text-center pt-3">
                                                <p class="text-dark mb-0">Not a member?<a href="/register" class="text-primary mx-1">Sign Up</a></p>
                                            </div>
                                            <label class="login-social-icon"><span>Login with Social</span></label>
                                            <div class="d-flex justify-content-center">
                                                <a>
                                                    <div class="social-login me-4 text-center">
                                                        <i class="fa fa-google"></i>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <div class="social-login me-4 text-center">
                                                        <i class="fa fa-facebook"></i>
                                                    </div>
                                                </a>
                                                <a href="javascript:void(0)">
                                                    <div class="social-login text-center">
                                                        <i class="fa fa-twitter"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- CONTAINER CLOSED -->
                </div>
            </div>
            <!-- End PAGE -->

        </div>
        <!-- BACKGROUND-IMAGE CLOSED -->

        
        <!-- JQUERY JS -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

        <!-- BOOTSTRAP JS -->
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!-- PERFECT SCROLLBAR JS-->
        <script src="<?php echo base_url(); ?>assets/plugins/p-scroll/perfect-scrollbar.js"></script>

        <!-- THEME COLORS JS  -->
        <script src="<?php echo base_url(); ?>assets/js/themeColors.js"></script>

        <!-- CUSTOM JS -->
        <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

        <!-- SHOW PASSWORD JS -->
        <script src="<?php echo base_url(); ?>assets/js/show-password.min.js"></script>

        <!-- GENERATE OTP JS -->
        <script src="<?php echo base_url(); ?>assets/js/generate-otp.js"></script>

    </body>

</html>