<?php
//Koneksi Database
include 'config.php';

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
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <script type="text/javascript">
        // const checkbox = document.querySelectorAll('input[type="checkbox"]');
        // const button = document.getElementById('acc-btn');
        // checkbox.forEach((cb) => {
        //     cb.addEventListener('change',checkButtonStatus);
        // })

        // function checkButtonStatus(){
        //     const checkedCount = [...checkbox].filter((cb)=>cb.checked);
        //     button.disabled = checkedCount.length !== checkbox.length
        // }

        checkButtonStatus();

        function selects() {
            var ele = document.getElementsByName('approval_spv[]');
            // console.log('ele',ele);
            for (var i = 0; i < ele.length; i++) {
                if (ele[i].type == 'checkbox' && ele[i].checked == false) {
                    // if(ele.[i].checked=false){
                    //     console.log('false');
                    // }
                    console.log(ele[i].checked);
                    ele[i].checked = true;
                } else if (ele[i].type == 'checkbox' && ele[i].checked == true) {
                    // if(ele.[i].checked=false){
                    //     console.log('false');
                    // }
                    console.log(ele[i].checked);
                    ele[i].checked = false;
                } else {
                    return null;
                }

            }
        }

        // var ebpDocumentCheckboxid = document.getElementById("select");
        // var btn = document.getElementById("acc-btn");

        // const onCheckboxChanged = ()=>{
        // btn.disabled = (ebpDocumentCheckboxid.checked);
        // }

        // ebpDocumentCheckboxid.onchange = onCheckboxChanged;

        // function deselects(){  
        //     var ele=document.getElementsByName('approval_spv[]');  
        //     // console.log('ele',ele);
        //     for(var i=0; i<ele.length; i++){  
        //         if(ele[i].type=='checkbox'){  
        //             console.log(ele[i].checked);
        //                 ele[i].checked=false; 
        //         }
        //     }
        // }        
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
                                <!-- Profil -->
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

                    <form id="detail-logbook" action="proses_dummy_test.php?PageAction=add_approve" method="post">
                        <input type="hidden" id="token" name="token" value="<?php echo $token; ?>">
                        <input type="hidden" value="<?php echo $_GET['id'] ?>" name="id">
                        <input type="hidden" id="id_logbook" name="id_logbook" value="<?php echo $data['id_logbook']; ?>">
                        <input type="hidden" id="id_internship" name="id_internship" value="<?php echo $id_internship; ?>">
                        <input type="hidden" id="nim" name="nim" value="<?php echo $data['nim']; ?>">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-head-row">
                                            <h4 class="card-title intern-title">Detail Logbook</h4>
                                            <!-- <input type="button" disabled="true" id="acc-btn" value="save"></input> -->
                                            <input type="submit" class="btn btn-modify btn-round ml-auto text-white" value="
                                            Accept" id="acc-btn">
                                            </input>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <form>
                                                <table id="basic-datatables" class="display table table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Week</th>
                                                            <th>
                                                                <center>Start Date</center>
                                                            </th>
                                                            <th>
                                                                <center>End Date</center>
                                                            </th>
                                                            <th>
                                                                <center>Detail of Activities</center>
                                                            </th>
                                                            <th style="width: 10px;">
                                                                <center>Documentation</center>
                                                            </th>
                                                            <th style="width: 10px;">
                                                                <span>
                                                                    <center>Approval<br>
                                                                        <!-- <input type="checkbox" id="select-all"/> -->
                                                                        <input type="checkbox" onclick="selects()" name="approval_spv" value="YES">
                                                                    </center>
                                                                    <!-- <button onclick="deselects()" name="approval_spv">UnCheck All</center> -->
                                                                </span>
                                                            </th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <?php
                                                        include 'config.php';
                                                        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                                                        $id = $_GET['id'];
                                                        $view = mysqli_query($conn, "SELECT * FROM tb_logbook INNER JOIN tb_internship ON tb_logbook.id_internship = tb_internship.id_internship WHERE tb_logbook.id_internship = $id;");
                                                        while ($data = mysqli_fetch_array($view)) {
                                                            // echo $id_company;
                                                        ?>
                                                            <tr>
                                                                <td>
                                                                    <center><?php echo $data['week_num'] ?></center>
                                                                </td>
                                                                <td>
                                                                    <center><?php echo $data['startdate'] ?></center>
                                                                </td>
                                                                <td>
                                                                    <center><?php echo $data['enddate'] ?></center>
                                                                </td>
                                                                <td>
                                                                    <center><?php echo "<span class='btn btn-sm btn-modify text-white' data-target='#logbook_desc" . $data['id_logbook'] . "' data-toggle='modal'><i class='fas fa-eye'></i> View</span>" ?></center>
                                                                </td>
                                                                <td>
                                                                    <center><?php echo "<span class='btn btn-sm btn-modify text-white' data-target='#mymodal" . $data['id_logbook'] . "' data-toggle='modal'><i class='fas fa-eye'></i> View</span>" ?></center>
                                                                </td>
                                                                <td>
                                                                    <center>
                                                                        <?php

                                                                        if ($data['approval_spv'] == "Pending") {
                                                                            echo "<center>
                                                        <input type='checkbox' id='select' name='approval_spv[]' value='" . $data['id_logbook'] . "'></input>
                                                        </td></center>";
                                                                        } else {
                                                                            echo "<span class='btn btn-success py-2 my-auto mx-auto rounded text-center text-white' data-toggle='modal'data-target='' title='' disabled><i class='fa fa-check'></i> APPROVED</span>";
                                                                        }
                                                                        ?>
                                                                    </center>
                                                                </td>
                                                            </tr>

                                                            <!--Modal View Documentation-->
                                                            <div id="mymodal<?php echo $data['id_logbook'] ?>" class="modal fade" role="dialog">
                                                                <div class="modal-dialog modal-lg">
                                                                    <!-- Modal content-->
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">Logbook Documentation</h4>
                                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                        </div>
                                                                        <?php
                                                                        if ($data['documentation']) :
                                                                        ?>
                                                                            <div class="modal-body" style="height: 600px">
                                                                                <object type="application/pdf" data="berkas/<?php echo $data['documentation'] ?>" width="100%" height="100%" frameborder="0" allowtransparency="false">
                                                                                </object>
                                                                            </div>
                                                                        <?php
                                                                        else :
                                                                        ?>
                                                                            <h2 class="p-5 mx-auto">Documentation is not available!</h2>
                                                                        <?php endif; ?>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--End Modal Documentation-->

                                                            <!--Modal Description Logbook-->
                                                            <div class="modal fade" id="logbook_desc<?php echo $data['id_logbook'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalScrollableTitle">Logbook Description</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <?php echo $data['description']; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--End Modal Description Logbook-->

                                                        <?php //penutup perulangan while
                                                            $no++;
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                        <!--div class table-responsive-->
                                    </div>
                                    <!--div class card-body-->
                                </div>
                                <!--div class card-->
                            </div>
                            <!--div class col-md-12-->
                        </div>
                        <!--div class row-->
                    </form>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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

        $(document).ready(function() {
            $('#basic-datatables').DataTable({});
        });
    </script>

    <script>
        (function() {
            $('form > input#select').keyup(function() {
                var empty = false;
                $('form > input').each(function() {
                    if ($(this).val() == '') {
                        empty = true;
                    }
                });

                if (empty) {
                    $('#acc_data').attr('disabled', 'disabled');
                } else {
                    $('#acc_data').removeAttr('disabled');
                }
            });
        })()
    </script>

    <!-- <script type="text/javascript">
    jQuery(function ($) {
    var $inputs = $('#detail-logbook :input').prop('disabled', true);
    $('#acc-btn').click(function () {
        $inputs.prop('disabled', false);
    });
    })
  </script> -->
</body>

</html>