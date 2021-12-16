<!doctype html>
<html class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title><?php echo e(config('app.name')); ?></title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
    <meta name="author" content="JSOFT.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/bootstrap/css/bootstrap.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/font-awesome/css/all.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/magnific-popup/magnific-popup.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/bootstrap-datepicker/css/datepicker3.css')); ?>" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet"
        href="<?php echo e(asset('assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/morris/morris.css')); ?>" />
    <!-- Datatable CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/select2/select2.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/jquery-datatables-bs3/assets/css/datatables.css')); ?>" />
    <!-- Pnotify CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/pnotify/pnotify.custom.css')); ?>" />
    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/stylesheets/theme.css')); ?>" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/stylesheets/skins/default.css')); ?>" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/stylesheets/theme-custom.css')); ?>">

    <!-- Head Libs -->
    <script src="<?php echo e(asset('assets/vendor/modernizr/modernizr.js')); ?>"></script>

</head>

<body>
    <section class="body">

        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a href="../" class="logo">
                    <img src="assets/images/logo.png" height="35" alt="JSOFT Admin" />
                </a>
                <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html"
                    data-fire-event="sidebar-left-opened">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <!-- start: search & user box -->
            <div class="header-right">

                <ul class="notifications">

                    <li>
                        <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                            <i class="fa fa-bell"></i>
                            <span class="badge">3</span>
                        </a>

                        <div class="dropdown-menu notification-menu">
                            <div class="notification-title">
                                <span class="pull-right label label-default">3</span>
                                Alerts
                            </div>

                            <div class="content">
                                <ul>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <div class="image">
                                                <i class="fa fa-thumbs-down bg-danger"></i>
                                            </div>
                                            <span class="title">Server is Down!</span>
                                            <span class="message">Just now</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <div class="image">
                                                <i class="fa fa-lock bg-warning"></i>
                                            </div>
                                            <span class="title">User Locked</span>
                                            <span class="message">15 minutes ago</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="clearfix">
                                            <div class="image">
                                                <i class="fa fa-signal bg-success"></i>
                                            </div>
                                            <span class="title">Connection Restaured</span>
                                            <span class="message">10/10/2014</span>
                                        </a>
                                    </li>
                                </ul>

                                <hr />

                                <div class="text-right">
                                    <a href="#" class="view-more">View All</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <span class="separator"></span>

                <div id="userbox" class="userbox">
                    <a href="#" data-toggle="dropdown">
                        <figure class="profile-picture">
                            <img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle"
                                data-lock-picture="assets/images/!logged-user.jpg" />
                        </figure>
                        <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
                            <span class="name">John Doe Junior</span>
                            <span class="role">administrator</span>
                        </div>

                        <i class="fa custom-caret"></i>
                    </a>

                    <div class="dropdown-menu">
                        <ul class="list-unstyled">
                            <li class="divider"></li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i
                                        class="fa fa-user"></i> My Profile</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i
                                        class="fa fa-lock"></i> Lock Screen</a>
                            </li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="pages-signin.html"><i
                                        class="fa fa-power-off"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end: search & user box -->
        </header>
        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <?php echo $__env->make('includes.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- end: sidebar -->

            <section role="main" class="content-body">
                <header class="page-header">
                    <h2>Dashboard</h2>

                    <div class="right-wrapper pull-right">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="index.html">
                                    <i class="fa fa-home"></i>
                                </a>
                            </li>
                            <li><span>Dashboard</span></li>
                        </ol>

                        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                    </div>
                </header>

                <!-- start: page -->
                <?php echo $__env->yieldContent('conteudo'); ?>
                <!-- end: page -->

            </section>
        </div>

        <aside id="sidebar-right" class="sidebar-right">
            <div class="nano">
                <div class="nano-content">
                    <a href="#" class="mobile-close visible-xs">
                        Collapse <i class="fa fa-chevron-right"></i>
                    </a>

                    <div class="sidebar-right-wrapper">

                        <div class="sidebar-widget widget-calendar">
                            <h6>Upcoming Tasks</h6>
                            <div data-plugin-datepicker data-plugin-skin="dark"></div>

                            <ul>
                                <li>
                                    <time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
                                    <span>Company Meeting</span>
                                </li>
                            </ul>
                        </div>

                        <div class="sidebar-widget widget-friends">
                            <h6>Friends</h6>
                            <ul>
                                <li class="status-online">
                                    <figure class="profile-picture">
                                        <img src="assets/images/!sample-user.jpg" alt="Joseph Doe"
                                            class="img-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                                <li class="status-online">
                                    <figure class="profile-picture">
                                        <img src="assets/images/!sample-user.jpg" alt="Joseph Doe"
                                            class="img-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                                <li class="status-offline">
                                    <figure class="profile-picture">
                                        <img src="assets/images/!sample-user.jpg" alt="Joseph Doe"
                                            class="img-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                                <li class="status-offline">
                                    <figure class="profile-picture">
                                        <img src="assets/images/!sample-user.jpg" alt="Joseph Doe"
                                            class="img-circle">
                                    </figure>
                                    <div class="profile-info">
                                        <span class="name">Joseph Doe Junior</span>
                                        <span class="title">Hey, how are you?</span>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </aside>
    </section>
    <script>
        var base_url = "<?php echo e(asset('')); ?>";
    </script>
    <!-- Vendor -->
    <script src="<?php echo e(asset('assets/vendor/jquery/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/bootstrap/js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/nanoscroller/nanoscroller.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/magnific-popup/magnific-popup.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/jquery-placeholder/jquery.placeholder.js')); ?>"></script>

    <!-- Specific Page Vendor -->
    <script src="<?php echo e(asset('assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/jquery-appear/jquery.appear.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/jquery-easypiechart/jquery.easypiechart.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/flot/jquery.flot.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/flot-tooltip/jquery.flot.tooltip.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/flot/jquery.flot.pie.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/flot/jquery.flot.categories.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/flot/jquery.flot.resize.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/jquery-sparkline/jquery.sparkline.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/raphael/raphael.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/morris/morris.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/gauge/gauge.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/snap-svg/snap.svg.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/liquid-meter/liquid.meter.js')); ?>"></script>
    <!-- Datable JS -->
    <script src="<?php echo e(asset('assets/vendor/select2/select2.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/jquery-datatables/media/js/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js')); ?>">
    </script>
    <script src="<?php echo e(asset('assets/vendor/jquery-datatables-bs3/assets/js/datatables.js')); ?>"></script>
    <!-- Pnotify JS -->
    <script src="<?php echo e(asset('assets/vendor/pnotify/pnotify.custom.js')); ?>"></script>
    <!-- Theme Base, Components and Settings -->
    <script src="<?php echo e(asset('assets/javascripts/theme.js')); ?>"></script>

    <!-- Theme Custom -->
    <script src="<?php echo e(asset('assets/javascripts/theme.custom.js')); ?>"></script>

    <!-- Theme Initialization Files -->
    <script src="<?php echo e(asset('assets/javascripts/theme.init.js')); ?>"></script>
    <!-- Axios -->
    <script src="<?php echo e(asset('assets/vendor/axios/dist/axios.min.js')); ?>"></script>


    <!-- Examples -->
    <script src="<?php echo e(asset('assets/javascripts/dashboard/examples.dashboard.js')); ?>"></script>
    <!-- Datatable Examples -->
    <script src="<?php echo e(asset('assets/javascripts/tables/examples.datatables.default.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/javascripts/tables/examples.datatables.row.with.details.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/javascripts/tables/examples.datatables.tabletools.js')); ?>"></script>
    <!-- App Script -->
    <script src="<?php echo e(asset('js/app/poupanca.js')); ?>"></script>
    <script src="<?php echo e(asset('js/app/rendimento.js')); ?>"></script>
    <script src="<?php echo e(asset('js/app/despesa.js')); ?>"></script>
    <?php echo $__env->make('includes.alertas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('includes.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\laragon\www\patrimonio\resources\views/layouts/app.blade.php ENDPATH**/ ?>