<?php
//Mengkoneksikan dengan Database
include 'config.php';

session_start();
$nik = $_SESSION['user_nik'];
$role = $_SESSION['role'];
$id_user_company = $_SESSION['id_user_company'];
$username = $_SESSION['username'];
$nama = $_SESSION['nama'];
$token = $_SESSION['token'];

?>

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
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands", "simple-line-icons"
                ],
                urls: ['assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
        // Get the container element
        var btnContainer = document.getElementById("myDIV");

        // Get all buttons with class="btn" inside the container
        var btns = btnContainer.getElementsByClassName("link-to");

        // Loop through the buttons and add the active class to the current/clicked button
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
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
                    <a href="hrd-index.html" class="logo d-flex align-items-center">
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
                                        <input type="text" placeholder="Search ..." class="form-control" required>
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
            <div class="nav-bottom" id="myDIV">
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

                    <div class="row row-card-no-pd">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <h4 class="card-title"><b>ADD & LIST SUPERVISOR</b></h4>
                                        <button class="btn btn-secondary btn-round ml-auto" data-toggle="modal" data-target="#modaladdspv">
                                            <i class="fa fa-plus"></i>
                                            Add Supervisor
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <!-- Form Modal Add Supervisor -->
                                    <div class="modal fade" id="modaladdspv" tabindex="-1" role="dialog" aria-labelledby="modaladdspv" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered cascading-modal modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modaladdspv">ADD SUPERVISOR</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <!--modal add supervisor-->
                                                <form method="POST" action="proses_dummy_test.php?PageAction=add">
                                                <input type="hidden" id="token" name="token" value="<?php echo $token; ?>">
                                                <input type="hidden" id="id_user_company" name="id_user_company" value="<?php echo $id_user_company; ?>">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="is_user_company">User ID</label>
                                                            <input type="text" class="form-control" id="id_user_company" name="id_user_company" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="id_company">Company ID</label>
                                                            <input type="text" class="form-control" id="id_company" name="id_company" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="user_fullname">Full Name</label>
                                                            <input type="text" class="form-control" id="user_fullname" name="user_fullname" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="user_phone">Phone</label>
                                                            <input type="text" class="form-control" id="user_phone" name="user_phone" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="user_email">Email Address</label>
                                                            <input type="email" class="form-control" id="user_email" name="user_email" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="username">Username</label>
                                                            <input type="text" class="form-control" id="username" name="username" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="password">Password</label>
                                                            <input type="password" class="form-control" readonly id="passwd" name="passwd" placeholder="password sudah default 12345">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="user_type">User Type</label>
                                                            <select class="form-control" name="user_type">
                                                                <option value="supervisor">SUPERVISOR</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                    <div class="modal-footer border-top-0 d-flex justify-content-center">
                                                    <button type="submit" class="btn btn-secondary btn-sm" name="btn-add" id="btn-add">ADD</button>
                                                </div>
                                                    </div>
                                                </form>
                                                
                                                <!--end modal add supervisor-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Form Modal Add Supervisor -->

                                    <!-- Modal Edit Data Supervisor -->
                                    <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="modal-edit" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered cascading-modal modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modal-edit">
                                                        EDIT SUPERVISOR DATA</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <form>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="user_fullname">Full Name</label>
                                                            <input type="text" class="form-control" id="user_fullname" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="user_phone">Phone</label>
                                                            <input type="text" class="form-control" id="user_phone" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="user_email">Email Address</label>
                                                            <input type="email" class="form-control" id="user_email" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="username">Username</label>
                                                            <input type="text" class="form-control" id="username" placeholder="">
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="modal-footer border-top-0 d-flex justify-content-center">
                                                    <button type="button" class="btn btn-secondary btn-sm">UPDATE</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Modal -->

                                    <!-- Main table-->
                                    <div class="table-responsive">
                                        <table id="add-row" class="display table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <center>Username</center>
                                                    </th>
                                                    <th>Full Name</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>
                                                        <center>Total Intern</center>
                                                    </th>
                                                    <th>
                                                        <center>Action</center>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <td>kezia001</td>
                                                <td>Kezia Angelina Sinaga</td>
                                                <td>081267053139</td>
                                                <td>kezia.sinaga61@gmail.com</td>
                                                <td></td>
                                                <td>
                                                    <div class="form-button-action">
                                                        <button type="button" data-toggle="modal" title="Edit" data-target="#modal-edit" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                                                            <i class="fa fa-edit fa-lg"></i>
                                                        </button>
                                                        <button type="button" title="Delete" class="btn btn-link btn-danger" data-original-title="Delete" id="alert_demo_7">
                                                            <i class="fa fa-times fa-lg"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                                </tr>
                                                <tr>
                                                    <td>cyntya001</td>
                                                    <td>Cyntya Maharani Nurul Istiqomah</td>
                                                    <td>087826543980</td>
                                                    <td>cyntyamaharani@gmail.com</td>
                                                    <td></td>
                                                    <td>
                                                        <div class="form-button-action">
                                                            <button type="button" data-toggle="modal" title="Edit" data-target="#modal-edit" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                                                                <i class="fa fa-edit fa-lg"></i>
                                                            </button>
                                                            <button type="button" title="Delete" class="btn btn-link btn-danger" data-original-title="Delete" id="alert_demo_8">
                                                                <i class="fa fa-times fa-lg"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>yulia001</td>
                                                    <td>Yulia Wulandari</td>
                                                    <td>085156430801</td>
                                                    <td>yuliawulandari271@gmail.com</td>
                                                    <td></td>
                                                    <td>
                                                        <div class="form-button-action">
                                                            <button type="button" data-toggle="modal" title="Edit" data-target="#modal-edit" class="btn btn-link btn-primary btn-lg" data-original-title="Edit">
                                                                <i class="fa fa-edit fa-lg"></i>
                                                            </button>
                                                            <button type="button" title="Delete" class="btn btn-link btn-danger" data-original-title="Delete" id="alert_demo_9">
                                                                <i class="fa fa-times fa-lg"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--End Main table-->
                                </div>
                            </div>
                        </div>
                    </div>


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

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>

    <script>
        // Add Row
        $('#add-row').DataTable({
            "pageLength": 5,
        });

        var action =
            '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

        $('#addRowButton').click(function() {
            $('#add-row').dataTable().fnAddData([
                $("#addName").val(),
                $("#addPosition").val(),
                $("#addOffice").val(),
                action
            ]);
            $('#addRowModal').modal('hide');

        });

        //SweetALert
        var SweetAlert2Demo = function() {

            var initDemos = function() {


                $('#alert_demo_3_3').click(function(e) {
                    swal("Added Data Successfully!", {
                        icon: "success",
                        buttons: {
                            confirm: {
                                className: 'btn btn-success'
                            }
                        },
                    });
                });

                $('#alert_demo_7').click(function(e) {
                    swal({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        buttons: {
                            confirm: {
                                text: 'Yes, delete it!',
                                className: 'btn btn-success'
                            },
                            cancel: {
                                visible: true,
                                className: 'btn btn-danger'
                            }
                        }
                    }).then((Delete) => {
                        if (Delete) {
                            swal({
                                title: 'Deleted!',
                                text: 'Your file has been deleted.',
                                type: 'success',
                                buttons: {
                                    confirm: {
                                        className: 'btn btn-success'
                                    }
                                }
                            });
                        } else {
                            swal.close();
                        }
                    });
                });

                $('#alert_demo_8').click(function(e) {
                    swal({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        buttons: {
                            confirm: {
                                text: 'Yes, delete it!',
                                className: 'btn btn-success'
                            },
                            cancel: {
                                visible: true,
                                className: 'btn btn-danger'
                            }
                        }
                    }).then((Delete) => {
                        if (Delete) {
                            swal({
                                title: 'Deleted!',
                                text: 'Your file has been deleted.',
                                type: 'success',
                                buttons: {
                                    confirm: {
                                        className: 'btn btn-success'
                                    }
                                }
                            });
                        } else {
                            swal.close();
                        }
                    });
                });

                $('#alert_demo_9').click(function(e) {
                    swal({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        buttons: {
                            confirm: {
                                text: 'Yes, delete it!',
                                className: 'btn btn-success'
                            },
                            cancel: {
                                visible: true,
                                className: 'btn btn-danger'
                            }
                        }
                    }).then((Delete) => {
                        if (Delete) {
                            swal({
                                title: 'Deleted!',
                                text: 'Your file has been deleted.',
                                type: 'success',
                                buttons: {
                                    confirm: {
                                        className: 'btn btn-success'
                                    }
                                }
                            });
                        } else {
                            swal.close();
                        }
                    });
                });
            };

            return {
                //== Init
                init: function() {
                    initDemos();
                },
            };
        }();

        //== Class Initialization
        jQuery(document).ready(function() {
            SweetAlert2Demo.init();
        });
    </script>

</body>

</html>