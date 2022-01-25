<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Sistem Informasi Pengelolaan Magang</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="assets/img/icon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/atlantis2.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css">
</head>

<body>
    <div class="wrapper horizontal-layout-2">

        <div class="main-header" data-background-color="light-blue2">
            <div class="nav-top">
                <div class="container d-flex flex-row">
                    <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <i class="icon-menu"></i>
                        </span>
                    </button>
                    <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                    <!-- Logo SEMOGA -->
                    <a href="index.php?page=hrd-home" class="logo d-flex align-items-center">
                        <img src="assets/img/semogav211.png" height="60 " alt="navbar brand" class="navbar-brand">
                    </a>
                    <!-- End Logo SEMOGA -->

                    <!-- Navbar Header -->
                    <nav class="navbar navbar-header navbar-expand-lg p-0">

                        <div class="container-fluid p-0">
                            <div class="collapse" id="search-nav">
                                <form class="navbar-left navbar-form nav-search ml-md-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <button type="submit" class="btn btn-search pr-1">
                                                <i class="fa fa-search search-icon"></i>
                                            </button>
                                        </div>
                                        <input type="text" placeholder="Search ..." class="form-control">
                                    </div>
                                </form>
                            </div>
                            <!-- gatau fungsinya untuk apa -->
                            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                                <li class="nav-item toggle-nav-search hidden-caret">
                                    <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </li>
                                <div class="title-name mt-2 text-white">
                                    <h5><b>YULIA WULANDARI</b></h5>
                                </div>
                                <li class="nav-item dropdown hidden-caret">
                                    <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                                        <div class="quick-actions-scroll scrollbar-outer">
                                        </div>
                                    </div>
                                </li>
                                <!-- end gatau fungsinya untuk apa -->
                                <!-- Profil -->
                                <li class="nav-item dropdown hidden-caret">
                                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                        <div class="avatar-sm">
                                            <img src="assets/img/Ulan.jpg" alt="..." class="avatar-img rounded-circle">
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                                        <div class="dropdown-user-scroll scrollbar-outer">
                                            <li>
                                                <div class="user-box">
                                                    <div class="u-text">
                                                        <a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                                        <a href="profile.html" class="btn btn-xs btn-danger btn-sm">Logout</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                            </li>
                                        </div>
                                    </ul>
                                </li>
                                <!-- End Profil -->
                            </ul>
                        </div>
                    </nav>
                    <!-- End Navbar -->
                </div>
            </div>

            <!-- Menu -->
            <div class="nav-bottom">
                <div class="container">
                    <ul class="nav page-navigation page-navigation-info bg-white">
                        <li class="nav-item submenu">
                            <a class="nav-link" href="#">
                                <i class="link-icon icon-book-open"></i>
                                <span class="menu-title">Profile</span>
                            </a>
                            <div class="navbar-dropdown animated fadeIn">
                                <ul>
                                    <li>
                                        <a href="index.php?page=hrd-profile">My Profile</a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=hrd-company-profile">Company Profile</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item submenu">
                            <a class="nav-link" href="#">
                                <i class="link-icon icon-grid"></i>
                                <span class="menu-title">HRD Menu</span>
                            </a>
                            <div class="navbar-dropdown animated fadeIn">
                                <ul>
                                    <li class="link-to">
                                        <a href="index.php?page=hrd-addsupervisor">Add Supervisor</a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=hrd-feedback">Feedback</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item submenu">
                            <a class="nav-link" href="#">
                                <i class="link-icon icon-layers"></i>
                                <span class="menu-title">Internship</span>
                            </a>
                            <div class="navbar-dropdown animated fadeIn">
                                <ul>
                                    <li>
                                        <a href="index.php?page=hrd-registration">Form Registration</a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=hrd-studentlist">List Internship</a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=hrd-jobdesc">Job Description</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item submenu">
                            <a class="nav-link" href="#">
                                <i class="link-icon icon-folder-alt"></i>
                                <span class="menu-title">Internship Files</span>
                            </a>
                            <div class="navbar-dropdown animated fadeIn">
                                <ul>
                                    <li>
                                        <a href="index.php?page=hrd-logbook">Logbook</a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=hrd-studentattendance">Attendance</a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=hrd-finalreport">Final Report</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item submenu">
                            <a class="nav-link" href="index.php?page=hrd-tutorial">
                                <i class="link-icon icon-screen-desktop"></i>
                                <span class="menu-title">Tutorial</span>
                            </a>
                        </li>
                        <li class="nav-item submenu">
                            <a class="nav-link" href="index.php?page=hrd-information">
                                <i class="link-icon icon-question"></i>
                                <span class="menu-title">Information</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Menu -->
        </div>

        <!-- Main Content -->
        <div class="main-panel">
            <div class="container">
                <div class="page-inner">

                    <!-- Overall Comments -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Week : First</h3>
                            <h5>Date : </h5>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <p><?php
                                            include 'config.php';
											error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
											$view = mysqli_query($conn, "SELECT * FROM tb_logbook WHERE id_logbook = '1'");
											$data = mysqli_fetch_array($view);
                                            echo $data['description'];
                                            ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!--Row-->
                            </form>
                        </div>
                    </div>
                    <!--End Overall Comments -->

                    <!-- Overall Comments -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">2nd Week</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>1.Overall comments for the intern :</label>
                                            <textarea class="form-control" rows="3" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>2. Overall comments for Politeknik Negeri Batam :</label>
                                            <textarea class="form-control" rows="3" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>3. Does the student’s internship performance meet the requirement<br>
                                                for being new employee in your company/institution?</label>
                                            <textarea class="form-control" rows="3" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>4. Does your company intend to recruit the intern immediately<br>
                                                he/she finished their internship?</label>
                                            <textarea class="form-control" rows="3" placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                    <!--End Overall Comments -->

                    <!-- Overall Comments -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">3rd Week</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- textarea -->
                                        <div class="form-group">
                                            <label>1.Overall comments for the intern :</label>
                                            <textarea class="form-control" rows="3" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>2. Overall comments for Politeknik Negeri Batam :</label>
                                            <textarea class="form-control" rows="3" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>3. Does the student’s internship performance meet the requirement<br>
                                                for being new employee in your company/institution?</label>
                                            <textarea class="form-control" rows="3" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>4. Does your company intend to recruit the intern immediately<br>
                                                he/she finished their internship?</label>
                                            <textarea class="form-control" rows="3" placeholder=""></textarea>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                    <!--End Overall Comments -->

                </div>
                <!--page inner-->
            </div>
            <!--container-->
        </div>
        <!--main-panel-->
        <!-- End Main Content -->

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="copyright ml-auto">
                    2021, made with <i class="fa fa-heart heart text-danger"></i> by <a href="http://www.themekita.com">PSTeam</a>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
    </div>

    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Moment JS -->
    <script src="assets/js/plugin/moment/moment.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- Bootstrap Toggle -->
    <script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
    <script src="assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

    <!-- Google Maps Plugin -->
    <script src="assets/js/plugin/gmaps/gmaps.js"></script>

    <!-- Dropzone -->
    <script src="assets/js/plugin/dropzone/dropzone.min.js"></script>

    <!-- Fullcalendar -->
    <script src="assets/js/plugin/fullcalendar/fullcalendar.min.js"></script>

    <!-- DateTimePicker -->
    <script src="assets/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>

    <!-- Bootstrap Tagsinput -->
    <script src="assets/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>

    <!-- Bootstrap Wizard -->
    <script src="assets/js/plugin/bootstrap-wizard/bootstrapwizard.js"></script>

    <!-- jQuery Validation -->
    <script src="assets/js/plugin/jquery.validate/jquery.validate.min.js"></script>

    <!-- Summernote -->
    <script src="assets/js/plugin/summernote/summernote-bs4.min.js"></script>

    <!-- Select2 -->
    <script src="assets/js/plugin/select2/select2.full.min.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Atlantis JS -->
    <script src="assets/js/atlantis2.min.js"></script>

    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>

    <script>

    </script>

</body>

</html>