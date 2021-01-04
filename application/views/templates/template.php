<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url();?>/assets/images/apple-icon.png">
    <link rel="icon" type="image/png" href="<?= base_url();?>/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        SUKEMA (E-Letter Management System)
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="<?= base_url('assets/vendors/fontawesome/css/all.css')?>">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?= base_url('assets/vendors/bootstrap/css/bootstrap.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendors/bootstrap/datatables/dataTables.bootstrap4.min.css')?>">
    <!-- CSS Files -->
    <link href="<?= base_url('assets/css/material-dashboard.css?v=2.1.2')?>" rel="stylesheet" />
    <!-- Icon LineAwesome CSS-->
    <link rel="stylesheet" href="<?= base_url('assets/vendors/lineawesome/css/line-awesome.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendors/summernote/summernote.min.css')?>">
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white"
            data-image="<?= base_url('/assets/img/sidebar-1.jpg')?>">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo"><a href="#" class="simple-text logo-normal">
                    SUKEMA<br>
                    <small>(E-Letter Management System)</small>
                </a></div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <?php
                    $page = $this->uri->segment(2);
                    ?>
                    <li class="nav-item <?= ($page == 'dashboard') ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= base_url('sukema/dashboard') ?>">
                            <i class="material-icons ">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item <?= ($page == 'profil') ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= base_url('sukema/profil') ?>">
                            <i class="material-icons">home_work</i>
                            <p>Profile Sekolah</p>
                        </a>
                    </li>
                    <li class="nav-item <?= ($page == 'signature') ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= base_url('sukema/signature') ?>">
                            <i class="fas la-signature"></i>
                            <p>Tandatangan Digital</p>
                        </a>
                    </li>
                    <li class="nav-item <?= ($page == 'suratmasuk') ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= base_url('sukema/suratmasuk') ?>">
                            <i class="fas la-file-import"></i>
                            <p>Surat Masuk</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">
                            <i class="fas la-file-export"></i>
                            <p>Surat Keluar</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?= base_url('login/logout') ?>">
                            <i class="fas la-sign-out-alt"></i>
                            <p>Logout</p>
                        </a>
                    </li>

                </ul>
                <hr>
                <!-- Start Footer -->
                <div class="footer">
                    <div class="container-fluid">
                        <div class="float-center">
                            <a href="http://www.everyzalz.blogspot.com" target="_blank">
                                <h5>SUKEMA V.1.1</h5>
                            </a>
                        </div>
                        <div class="copyright float-center">
                            &copy;
                            <script>
                            document.write(new Date().getFullYear())
                            </script> | Allrights Reserved <i class="material-icons">android</i> Build by
                            <a href="http://www.everyzalz.blogspot.com" target="_blank">zlz</a>
                        </div>
                    </div>
                </div>
                <!-- End Footer -->
            </div>
        </div>

        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-bg-linear-primary navbar-absolute fixed-top">
                <div class="container-fluid">
                    <!-- <div class="navbar-wrapper">
                        <a class="navbar-brand" href="javascript:;">Dashboard</a>
                    </div> -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <form class="navbar-form">
                            <!-- <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                    <i class="material-icons">search</i>
                                    <div class="ripple-container"></div>
                                </button>
                            </div> -->
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('sukema/dashboard')?>">
                                    <i class="material-icons">dashboard</i>
                                    <p class="d-lg-none d-md-block">
                                        Dashboard
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification"></span>
                                    <p class="d-lg-none d-md-block">
                                        Notification
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Selamat datang di Aplikasi SUKEMA!, Memudahkan
                                        anda untuk mengatur surat masuk dan keluar</a>
                                    <!-- <a class="dropdown-item" href="#">You have 5 new tasks</a>
                                    <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                                    <a class="dropdown-item" href="#">Another Notification</a>
                                    <a class="dropdown-item" href="#">Another One</a> -->
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">person</i>
                                    <p class="d-lg-none d-md-block">
                                        SUKEMA
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    <a class="dropdown-item" href="<?= base_url('sukema/profil')?>">Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?= base_url('login/logout')?>">Log out</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->


            <!-- Content -->
            <div class="content">
                <?= $contents; ?>
            </div>
            <!-- End Content -->


        </div>

    </div>
    <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
                <i class="fa fa-cog fa-1x"> </i>
            </a>
            <ul class="dropdown-menu">
                <li class="header-title"> Sidebar Filters</li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger active-color">
                        <div class="badge-colors ml-auto mr-auto">
                            <span class="badge filter badge-purple" data-color="purple"></span>
                            <span class="badge filter badge-azure" data-color="azure"></span>
                            <span class="badge filter badge-green" data-color="green"></span>
                            <span class="badge filter badge-warning" data-color="orange"></span>
                            <span class="badge filter badge-danger" data-color="danger"></span>
                            <span class="badge filter badge-rose active" data-color="rose"></span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="header-title">Images</li>
                <li class="active">
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="<?=base_url('/assets/images/sidebar-1.jpg')?>" alt="">
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="<?= base_url('/assets/images/sidebar-2.jpg')?>" alt="">
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="<?= base_url('/assets/images/sidebar-3.jpg')?>" alt="">
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="<?= base_url('/assets/images/sidebar-4.jpg')?>" alt="">
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="<?= base_url('/assets/js/core/jquery.min.js') ?>"></script>
    <script src="<?= base_url('/assets/js/core/popper.min.js') ?>"></script>
    <script src="<?= base_url('/assets/js/core/bootstrap-material-design.min.js') ?>"></script>
    <script src="<?= base_url('/assets/js/plugins/perfect-scrollbar.jquery.min.js') ?>"></script>
    <!-- Plugin for the momentJs  -->
    <script src="<?= base_url('/assets/js/plugins/moment.min.js') ?>"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="<?= base_url('/assets/js/plugins/sweetalert2.js') ?>"></script>
    <!-- Forms Validations Plugin -->
    <script src="<?= base_url('/assets/js/plugins/jquery.validate.min.js') ?>"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="<?= base_url('/assets/js/plugins/jquery.bootstrap-wizard.js') ?>"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="<?= base_url('/assets/js/plugins/bootstrap-selectpicker.js') ?>"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="<?= base_url('/assets/js/plugins/bootstrap-datetimepicker.min.js') ?>"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="<?= base_url('/assets/js/plugins/jquery.dataTables.min.js') ?>"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="<?= base_url('/assets/js/plugins/bootstrap-tagsinput.js') ?>"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="<?= base_url('/assets/js/plugins/jasny-bootstrap.min.js') ?>"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="<?= base_url('/assets/js/plugins/fullcalendar.min.js') ?>"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="<?= base_url('/assets/js/plugins/jquery-jvectormap.js') ?>"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="<?= base_url('/assets/js/plugins/nouislider.min.js') ?>"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="<?= base_url('/assets/js/plugins/arrive.min.js') ?>"></script>
    <!-- Chartist JS -->
    <script src="<?= base_url('/assets/js/plugins/chartist.min.js') ?>"></script>
    <!--  Notifications Plugin    -->
    <script src="<?= base_url('/assets/js/plugins/bootstrap-notify.js') ?>"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url('/assets/js/material-dashboard.js?v=2.1.2') ?>" type="text/javascript"></script>
    <!-- <script src="<?= base_url()?>assets/vendors/bootstrap/datatables/jquery.dataTables.min.js"></script> -->
    <!-- <script src="<?= base_url()?>assets/vendors/bootstrap/datatables/dataTables.bootstrap4.min.js"></script> -->
    <!-- Summernote JS-->
    <script src="<?= base_url();?>assets/vendors/summernote/summernote.min.js"></script>
    <!-- SWAL2 -->
    <script src="<?= base_url();?>assets/swal/sweetalert2.all.min.js"></script>
    <!-- cust -->
    <script src="<?= base_url()?>assets/js/sukema.js"></script>
    <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });

    $('.tabel-surat').DataTable({
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ]
    });
    
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    $(document).ready(function() {
        $().ready(function() {
            $sidebar = $('.sidebar');

            $sidebar_img_container = $sidebar.find('.sidebar-background');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

            if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                    $('.fixed-plugin .dropdown').addClass('open');
                }

            }

            $('.fixed-plugin a').click(function(event) {
                // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });

            $('.fixed-plugin .active-color span').click(function() {
                $full_page_background = $('.full-page-background');

                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-color', new_color);
                }

                if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data-color', new_color);
                }
            });

            $('.fixed-plugin .background-color .badge').click(function() {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('background-color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-background-color', new_color);
                }
            });

            $('.fixed-plugin .img-holder').click(function() {
                $full_page_background = $('.full-page-background');

                $(this).parent('li').siblings().removeClass('active');
                $(this).parent('li').addClass('active');


                var new_image = $(this).find("img").attr('src');

                if ($sidebar_img_container.length != 0 && $(
                        '.switch-sidebar-image input:checked').length != 0) {
                    $sidebar_img_container.fadeOut('fast', function() {
                        $sidebar_img_container.css('background-image', 'url("' +
                            new_image + '")');
                        $sidebar_img_container.fadeIn('fast');
                    });
                }

                if ($full_page_background.length != 0 && $(
                        '.switch-sidebar-image input:checked').length != 0) {
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find(
                        'img').data('src');

                    $full_page_background.fadeOut('fast', function() {
                        $full_page_background.css('background-image', 'url("' +
                            new_image_full_page + '")');
                        $full_page_background.fadeIn('fast');
                    });
                }

                if ($('.switch-sidebar-image input:checked').length == 0) {
                    var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr(
                        'src');
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find(
                        'img').data('src');

                    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                    $full_page_background.css('background-image', 'url("' +
                        new_image_full_page + '")');
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                }
            });

            $('.switch-sidebar-image input').change(function() {
                $full_page_background = $('.full-page-background');

                $input = $(this);

                if ($input.is(':checked')) {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar_img_container.fadeIn('fast');
                        $sidebar.attr('data-image', '#');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page_background.fadeIn('fast');
                        $full_page.attr('data-image', '#');
                    }

                    background_image = true;
                } else {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar.removeAttr('data-image');
                        $sidebar_img_container.fadeOut('fast');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page.removeAttr('data-image', '#');
                        $full_page_background.fadeOut('fast');
                    }

                    background_image = false;
                }
            });

            $('.switch-sidebar-mini input').change(function() {
                $body = $('body');

                $input = $(this);

                if (md.misc.sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    md.misc.sidebar_mini_active = false;

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                } else {

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                    setTimeout(function() {
                        $('body').addClass('sidebar-mini');

                        md.misc.sidebar_mini_active = true;
                    }, 300);
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function() {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function() {
                    clearInterval(simulateWindowResize);
                }, 1000);

            });
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();

    });

    /* Edit Modal */

    $(document).ready(function() {
        // Untuk sunting
        $('#edit-modal').on('show.bs.modal', function(event) {
            var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
            var modal = $(this)

            // Isi nilai pada field
            modal.find('#edit_id').attr("value", div.data('id'));
            modal.find('#editnip').attr("value", div.data('nip'));
            modal.find('#editnamaguru').attr("value", div.data('nama'));
            modal.find('#editmapelampu').attr("value", div.data('mapel'));
            modal.find('#editfotoguru').attr("value", div.data('foto'));
        });
    });
    </script>
</body>

</html>