<?php
include 'config.php';
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

session_start();
$username = $_SESSION['username'];
$user_id = $_SESSION['id_user_company'];
$name = $_SESSION['user_fullname'];
$role = $_SESSION['user_type'];
$id_company = $_SESSION['id_company'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Sistem Pengelolaan Magang Polibatam</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="assets/img/icon.ico" type="image/x-icon" />

	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<!-- datatable -->
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
					"simple-line-icons"
				],
				urls: ['assets/css/fonts.min.css']
			},
			active: function () {
				sessionStorage.fonts = true;
			}
		});
		$(document).ready(function () {
			$('#tabel-data').DataTable();
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
<div class="wrapper horizontal-layout-2">

	<div class="main-header" data-background-color="light-blue2">
		<div class="nav-top">
			<div class="container d-flex flex-row">
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
					data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<!-- Logo Header -->
				<a href="index.html" class="logo d-flex align-items-center">
					<img src="assets/img/semogav1.png" height="70" alt="navbar brand" class="navbar-brand">
				</a>
				<!-- End Logo Header -->

				<!-- Navbar Header -->
				<nav class="navbar navbar-header navbar-expand-lg p-0">

					<div class="container-fluid p-0">
						<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
							<div class="title-name mt-2">
								<h5><b>YULIA WULANDARI</b></h5>
							</div>
							<li class="nav-item dropdown hidden-caret">
								<div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
									<div class="quick-actions-scroll scrollbar-outer">
									</div>
								</div>
							</li>
							<li class="nav-item dropdown hidden-caret">
								<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
									aria-expanded="false">
									<div class="avatar-sm">
										<img src="assets/img/Ulan.jpg" alt="..." class="avatar-img rounded-circle">
									</div>
								</a>
								<ul class="dropdown-menu dropdown-user animated fadeIn">
									<div class="dropdown-user-scroll scrollbar-outer">
										<li>
											<div class="user-box">
												<div class="u-text">
													<a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View
														Profile</a>
													<a href="profile.html" class="btn btn-xs btn-danger btn-sm">Log
														out</a>
												</div>
											</div>
										</li>
										<li>
										</li>
									</div>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
				<!-- End Navbar -->
			</div>
		</div>
		<div class="nav-bottom">
			<div class="container">
				<h3 class="title-menu d-flex d-lg-none">
					Menu
					<div class="close-menu"> <i class="flaticon-cross"></i></div>
				</h3>
				<ul class="nav page-navigation page-navigation-info bg-white">

					<li class="nav-item submenu">
						<a class="nav-link" href="index.html">
							<i class="link-icon icon-home"></i>
							<span class="menu-title">Home</span>
						</a>
					</li>
					<li class="nav-item submenu">
						<a class="nav-link" href="tutorials.html">
							<i class="link-icon icon-screen-desktop"></i>
							<span class="menu-title">Tutorial</span>
						</a>
					</li>
					<li class="nav-item submenu">
						<a class="nav-link" href="information.html">
							<i class="link-icon icon-book-open"></i>
							<span class="menu-title">Information</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="main-panel">
		<div class="container">
			<div class="page-inner">

				<!-- MAIN CONTENT -->
				<div class="row row-card-no-pd">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<h4 class="card-title">Supervisor Data</h4>
									<button class="btn btn-secondary btn-round ml-auto" data-toggle="modal"
										data-target="#modaladdspv">
										<i class="fa fa-plus"></i>
										Add Supervisor
									</button>
								</div>
							</div>
							<div class="card-body">

								<!-- Form Modal Add Supervisor -->
								<div class="modal fade" id="modaladdspv" tabindex="-1" role="dialog"
									aria-labelledby="modaladdspv" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered cascading-modal modal-lg"
										role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="modaladdspv">ADD SUPERVISOR</h5>
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>

											<form method="POST" action="proses_dummy_test.php?PageAction=add_supervisor">
                                                    <input type="hidden" id="token" name="token" value="<?php echo $token; ?>">
                                                    <input type="hidden" id="id_user_company" name="id_user_company" value="<?php echo $user_id; ?>">
                                                    <input type="hidden" id="id_company" name="id_company" value="<?php echo $id_company; ?>">
												<div class="modal-body">
													<div class="form-group">
														<label for="username">Username</label>
														<input type="text" class="form-control" id="username"
															placeholder="" required>
													</div>
													<div class="form-group">
														<label for="user_fullname">Full Name</label>
														<input type="text" class="form-control" id="user_fullname"
															placeholder="">
													</div>
													<div class="form-group">
														<label for="user_phone">Phone</label>
														<input type="text" class="form-control" id="user_phone"
															placeholder="">
													</div>
													<div class="form-group">
														<label for="user_email">Email Address</label>
														<input type="email" class="form-control" id="user_email"
															placeholder="">
													</div>
                                                    <div class="form-group">
														<label for="username">Username</label>
														<input type="email" class="form-control" id="username"
															placeholder="">
													</div>
													<div class="form-group">
														<label for="password">Password</label>
														<input type="password" class="form-control" readonly id="password"
															placeholder="DEFAULT PASSWORD IS 12345">
													</div>
												</div>
												<div class="modal-footer border-top-0 d-flex justify-content-center">
													<button type="submit" class="btn btn-secondary btn-sm" id="btn-add" name="btn-add" >ADD</button>
												</div>
											</form>
										</div>
									</div>
								</div>
								<!-- End Form Modal Add Supervisor -->

								<div class="table-responsive">
									<table id="add-row" class="display table table-striped table-hover">
										<thead>
											<tr>
												<th>ID User</th>
												<th>Full Name</th>
												<th>Phone</th>
												<th>Email Address</th>
												<th style="width: 20%">
													<center>Action</center>
												</th>
											</tr>
										</thead>
										<tbody>
											<?php
                                            include 'config.php';
                                            error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

                                            $view = mysqli_query($conn, "SELECT * FROM tb_user_company WHERE id_company = $id_company");
                                            $no = 1;
                                            while ($data = mysqli_fetch_array($view)) {
                                                echo "<tr>
                                                    <td>" . $data['username'] . "</td>
                                                    <td>" . $data['user_fullname'] . "</td>
                                                    <td>" . $data['user_phone'] . "</td>
                                                    <td>" . $data['user_email'] . "</td>
                                                    <td>" . $data['totalintern'] . "</td>
                                                    <td>
                                                    <a data-toggle = 'modal' type = 'button' title = 'Edit' class = 'btn btn-link btn-primary' data-original-title = 'Edit' data-target = '#myModal" . $data['id_user_company'] . "'><i class='fa fa-edit fa-lg'></i></a>
                                                    <a data-toggle = 'modal' data-target = '#modaldelete$no' title = 'Delete' class = 'btn btn-link btn-danger' data-original-title = 'Delete'><i class='fa fa-times fa-lg'></i></a>
                                                   </td>
                                                  </tr>"
                                            ?>
                                             <!-- Modal edit Data Supervisor -->
                                             <div class="modal fade" id="myModal<?php echo $data['id_user_company'] ?>" role="dialog">
                                                        <div class="modal-dialog modal-dialog-centered cascading-modal modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="myModal">
                                                                        EDIT SUPERVISOR DATA</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>

                                                                <form method="POST" action="proses_dummy_test.php?PageAction=update_supervisor">

                                                                    <input type="hidden" id="token" name="token" value="<?php echo $token; ?>">
                                                                    <input type="hidden" id="id_user_company" name="id_user_company" value="<?php echo $id_user_company; ?>">
                                                                    <input type="hidden" id="id_company" name="id_company" value="<?php echo $id_company; ?>">

                                                                    <div class="modal-body">
                                                                        <div class="form-group">
                                                                            <label for="user_fullname">Full Name</label>
                                                                            <input type="text" class="form-control" id="user_fullname" name="user_fullname" placeholder="" value="<?php echo $data['user_fullname']; ?>" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="user_phone">Phone</label>
                                                                            <input type="text" class="form-control" id="user_phone" name="user_phone" placeholder="" value="<?php echo $data['user_phone']; ?>" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="user_email">Email Address</label>
                                                                            <input type="email" class="form-control" id="user_email" name="user_email" placeholder="" value="<?php echo $data['user_email']; ?>" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="username">Username</label>
                                                                            <input type="text" class="form-control" id="username" name="username" placeholder="" value="<?php echo $data['username']; ?>" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="user_type">User Type</label>
                                                                            <select class="form-control" name="user_type" value="<?php echo $data['user_type']; ?>">
                                                                                <option value="supervisor">SUPERVISOR</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer border-top-0 d-flex justify-content-center">
                                                                        <button type="submit" class="btn btn-secondary btn-sm" name="btn-edit" id="btn-edit">UPDATE</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End -->

                                                    <!--Modal Delete-->
                                                    <div class="modal fade" id="modaldelete<?php echo $no ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure to delete this supervisor?
                                                                </div>
                                                                <form action="proses_dummy_test.php?PageAction=delete_supervisor" method="post">
                                                                    <input type="hidden" name="id_user_company" value="<?php echo $data['id_user_company'] ?>">
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php //penutup perulangan while
                                                    $no++;
                                                }
                                                ?>
                                                <!--End Modal Delete-->
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
	</div>


	<footer class="footer fixed-bottom">
		<div class="container">
			<div class="copyright ml-auto">
				2021, Develop with <i class="fa fa-heart heart text-danger"></i> by <a
					href="http://www.themekita.com">PSTeam</a>
			</div>
		</div>
	</footer>


	<!--   Core JS Files   -->

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

		$('#addRowButton').click(function () {
			$('#add-row').dataTable().fnAddData([
				$("#addName").val(),
				$("#addPosition").val(),
				$("#addOffice").val(),
				action
			]);
			$('#addRowModal').modal('hide');

		});
	</script>

	</body>

</html>