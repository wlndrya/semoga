<?php
include 'config.php';
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
session_start();
if ($_SESSION['login_status'] != 'login') {
    echo "
	<script>
		alert('YOU ARE NOT LOGIN!');
		window.location.replace('index.php?page=login');
	</script>
              ";
}
$user = $_SESSION['user_fullname'];
$id_company = $_SESSION['id_company'];
$role = $_SESSION['user_type'];
$user_id = $_SESSION['id_user_company'];
$username = $_SESSION['username'];
$name = $_SESSION['user_fullname'];
$token = $_SESSION['token'];

// $checked = $_GET['checked']; 

// session_unset();
// session_destroy();
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

        function timeNow() {
            var currentdate = new Date();

            var datetime =
                currentdate.getHours() + ":" +
                currentdate.getMinutes() + ":" +
                currentdate.getSeconds();

            console.log(datetime);
            return document.getElementById("time-now").value = datetime;
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

        <div class="main-header" data-background-color="purple">
            <div class="nav-top">
                <div class="container d-flex flex-row">
                    <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                            <i class="icon-menu"></i>
                        </span>
                    </button>
                    <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                    <!-- Logo SEMOGA -->
                    <a href="index.php?page=spv-home" class="logo d-flex align-items-center">
                        <img src="assets/img/profile1.png" height="60 " alt="navbar brand" class="navbar-brand">
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
                                    <h5><b>Hi, <?php echo $user; ?></b></h5>
                                </div>
                                <li class="nav-item dropdown hidden-caret">
                                    <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                                        <div class="quick-actions-scroll scrollbar-outer">
                                        </div>
                                    </div>
                                </li>
                                <!-- end gatau fungsinya untuk apa -->
                                <li class="nav-item dropdown hidden-caret">
                                    <a class="nav-link dropdown-toggle" href="index.php?page=logout" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-sign-out-alt" title="Logout"></i>
                                    </a>
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
                    <ul class="nav page-navigation page-navigation-secondary bg-white">
                        <li class="nav-item submenu">
                            <a class="nav-link" href="#">
                                <i class="link-icon icon-book-open"></i>
                                <span class="menu-title">Profile</span>
                            </a>
                            <div class="navbar-dropdown animated fadeIn">
                                <ul>
                                    <li>
                                        <a href="index.php?page=spv-profile">My Profile</a>
                                    </li>
                                    <li>
                                        <a href="index.php?page=spv-company-profile">Company Profile</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item submenu">
                            <a class="nav-link" href="index.php?page=spv-studentlist">
                                <i class="link-icon icon-layers"></i>
                                <span class="menu-title">Student Internship</span>
                            </a>
                        </li>
                        <li class="nav-item submenu">
                            <a class="nav-link" href="index.php?page=spv-document">
                                <i class="link-icon icon-folder-alt"></i>
                                <span class="menu-title">Internship Files</span>
                            </a>
                        </li>
                        <li class="nav-item submenu">
                            <a class="nav-link" href="index.php?page=spv-tutorial">
                                <i class="link-icon icon-screen-desktop"></i>
                                <span class="menu-title">Tutorial</span>
                            </a>
                        </li>
                        <li class="nav-item submenu">
                            <a class="nav-link" href="index.php?page=spv-information">
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

                        <!--INSERT DATA-->

                        <!-- Task Type Parameter -->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">JOB DESCRIPTION</h4>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- text input -->
                                        <form action="proses_dummy_test.php?PageAction=add_jobdesc" method="post">
                                        <?php
                                           include 'config.php';
                                            error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                                           $prodi_name = $_GET['study_program'];
                                             $id_jobdesc = $_GET['id_jobdesc'];
                                            $query = mysqli_query($conn, "SELECT * FROM tb_detail_jobdesc LEFT JOIN tb_jobdesc ON tb_detail_jobdesc.id_jobdesc = tb_jobdesc.id_jobdesc WHERE tb_detail_jobdesc.id_jobdesc = $id_jobdesc");
                                            //print_r($prodi_name);
                                            $data = mysqli_fetch_assoc($query);
                                        ?>
                                        <div class="form-group">
                                        <p><b>PART 1 : Enter The Term Date Of The Job Description</b></p>
											<label for="date">Start Date</label>
											<input type="date" id="date_start" name="date_start" class="form-control" placeholder="" required>
                                        </div>
                                        <div class="form-group">
											<label for="date">End Date</label>
											<input type="date" id="date_end" name="date_end" class="form-control" placeholder="" required>
                                        </div><br><br>
                                        <div class="form-group">
                                        <p><b>PART 2 : Put a Checklist In The Checkbox On The Appropriate Type Of Work</b></p>
                                        </div>
                                        <table class="table table-bordered" style="margin-top: -20px;">
                                            <thead>
                                                <tr>
                                                    <th>Type of work</th>
                                                    <th>Description</th>
                                                    <th>
                                                        <center>Checklist</center>
                                                    </th><br>
                                                </tr>
                                            </thead>
                                            
                                                <tbody>
                                                    <?php
                                                    include 'config.php';
                                                    error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                                                    $prodi_name = $_GET['study_program'];
                                                    $id_jobdesc = $_GET['id_jobdesc'];
                                                    $query = mysqli_query($conn, "SELECT * FROM tb_detail_jobdesc LEFT JOIN tb_jobdesc ON tb_detail_jobdesc.id_jobdesc = tb_jobdesc.id_jobdesc WHERE tb_detail_jobdesc.id_jobdesc = $id_jobdesc");
                                                    //print_r($prodi_name);
                                                    while ($data = mysqli_fetch_assoc($query)) :
                                                    ?>
                                                        <input type="hidden" value="<?php echo $_GET['id'] ?>" name="id">
                                                        <input type="hidden" value="<?php echo $_GET['nim'] ?>" name="nim">
                                                        <input type="hidden" id="token" name="token" value="<?php echo $token; ?>">
                                                        <input type="hidden" id="id_jobdesc_intern" name="id_jobdesc_intern" value="<?php echo $id_jobdesc_intern; ?>">
                                                        <input type="hidden" id="id_jobdesc" name="id_jobdesc" value="<?php echo $data['id_jobdesc']; ?>">
                                                        <input type="hidden" id="id_ceklis" name="id_ceklis" value="<?php echo $data['id_ceklis']; ?>">
                                                        <input type="hidden" id="id_detail" name="id_detail" value="<?php echo $data['id_detail']; ?>">
                                                        <input type="hidden" name="time" readonly value="" class="form-control" id="time-now">

                                                        <tr>
                                                            <td><?= $data['job_type'] ?></td>
                                                            <td><?= $data['job_description'] ?></td>
                                                            <td class='text-center'>
                                                                <div class='custom-control custom-checkbox'>
                                                                    <input type='checkbox' id='customCheck1' name='ceklis[]' value='<?= $data['id_detail']?>'>
                                                                    <label>Checked</label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php endwhile; ?>
                                                </tbody>
                                        </table><br><br>

                                        <?php
                                        $query = mysqli_query($conn, "SELECT * FROM tb_jobdesc WHERE id_jobdesc=$id_jobdesc;");
                                        $data = mysqli_fetch_assoc($query);
                                        // print_r($data);
                                        ?>
                                        <div class="form-group">
                                        <p><b>PART 3 : Fill the Answer Column</b></p>
                                            <p>2. <?php echo $data['question_1'] ?></p>
                                            <textarea class="form-control" required rows="3" id="answer_1" name="answer_1"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <p>3. <?php echo $data['question_2'] ?></p>
                                            <textarea class="form-control" rows="3" required id="answer_2" name="answer_2"></textarea>
                                        </div>
                                        <div><br>
                                            <p><b>**NOTES : This form must be filled out by the student internship supervisor from the industry to determine what type of work will be provided to students during the internship</b></p>
                                        </div>
                                    </div>
                                    <!--col-sm-12 -->
                                </div>
                                <!--row-->

                                <!--Button Submit-->
                                <div class="modal-footer d-flex justify-content-center">
                                    <!-- <a class="btn btn-danger text-white" id="edit_btn" type="submit">Edit</a> -->
                                    <button type="submit" class="btn btn-modify text-white"> Submit</button>
                                </div>
                                <!--End Button Submit-->

                                <!-- </form> -->
                                </form>
                            </div>
                            <!--End Card Body-->
                        </div>
                        <!--Card-->
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
                2021, made with <i class="fa fa-heart heart text-danger"></i> by <a href="">PSTeam</a>
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
    </script>

<script>
function myFunction() {
  var x = document.getElementById("customCheck1").required;
  document.getElementById("demo").innerHTML = x;
}
</script>

</body>

</html>