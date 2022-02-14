<?php
//Koneksi Database
include 'config.php';

session_start();
if($_SESSION['login_status'] != 'login'){
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
					<a href="index.php?page=hrd-home" class="logo d-flex align-items-center">
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
									<h5><b>Hi, <?php echo $user;?></b></h5>
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
										<a href="index.php?page=hrd-registration">Internship Registration</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item submenu">
							<a class="nav-link" href="index.php?page=hrd-studentlist">
								<i class="link-icon icon-layers"></i>
								<span class="menu-title">Student Internship</span>
							</a>
						</li>
						<li class="nav-item submenu">
							<a class="nav-link" href="index.php?page=hrd-logbook">
								<i class="link-icon icon-folder-alt"></i>
								<span class="menu-title">Internship Files</span>
							</a>
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
										<h4 class="card-title"><b>STUDENT INTERNSHIP</b></h4>
										<!-- <button class="btn btn-secondary btn-round ml-auto" data-toggle="modal"
                                            data-target="#modaladd">
                                            <i class="fa fa-plus"></i>
                                            Add Intern
                                        </button> -->
									</div>
								</div>
								<div class="card-body">

									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover">
											<thead>
												<tr>
													<th>Student Name</th>
													<th><center>Start Date</center></th>
													<th><center>End Date</center></th>
													<th><center>Supervisor</center></th>
													<th><center>Job Description</center></th>
													<th><center>Final Report</center></th>
													<th><center>Feedback</center></th>
												</tr>
											</thead>
											<tbody>
												<?php
												include 'config.php';
												error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
												$view = mysqli_query($conn, "SELECT * from (tb_internship LEFT JOIN tb_student_internship ON tb_internship.nim = tb_student_internship.nim) LEFT JOIN tb_user_company ON tb_user_company.id_user_company = tb_internship.id_user_company WHERE status='YES' AND tb_user_company.id_company = '$_SESSION[id_company]' ");
												$no = 1;
												while ($data = mysqli_fetch_array($view)) {
													echo "<tr>
													<td>" . $data['name'] . "</td>
													<td>" . $data['start_date'] . "</td>
													<td>" . $data['end_date'] . "</td>
													<td>" . $data['user_fullname'] . "</td>
													<td><center>
													<a href = 'index.php?page=print_jobdesc&id=". $data['id_internship'] ."' type='button' class='btn btn-sm btn-modify text-white'><i class='fas fa-eye'></i> View</a>
													</center></td>
													<td><center>
													<a href = '#' type='button' data-toggle='modal' data-target='#mymodal" . $data['nim'] . "' class='btn btn-sm btn-modify text-white'><i class='fas fa-eye'></i> View</a>
													</center></td>
													<td><center>
													<a href = 'index.php?page=hrd-feedback2' type='button' data-toggle='' data-target='' class='btn btn-link btn-secondary'><i class='fa fa-edit'></i></a>
													</center></td>
													</tr>"
												?>
													<div id="mymodal<?php echo $data['nim'] ?>" class="modal fade" role="dialog">
													<div class="modal-dialog modal-lg">
														<!-- Modal content-->
														<div class="modal-content">
															<div class="modal-header">
																<h4 class="modal-title">Final Report</h4>
																<button type="button" class="close" data-dismiss="modal">&times;</button>
															</div>
															<div class="modal-body" style="height: 600px">
																<object type="application/pdf" data="berkas/<?php echo $data['final_report'] ?>" width="100%" height="100%" frameborder="0" allowtransparency="true">
																</object>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
															</div>
														</div>
													</div>
												</div>
													<!--Modal Add Supervisor Name-->
													<!-- <td><center>
													<a href = '#' data-toggle = 'modal' type = 'button' title = 'Add Supervisor' class = 'btn btn-link btn-secondary' data-original-title = 'Add Supervisor' data-target = '#modal-edit" . $data['id_internship'] . "'><i class='fa fa-edit fa-md'></i></a>
													</center></td>
													<div class="modal fade" id="modal-edit<?php echo $data['id_internship'] ?>" tabindex="-1" role="dialog" aria-labelledby="modaladdspv" aria-hidden="true">
														<div class="modal-dialog modal-dialog-centered cascading-modal modal-lg" role="document">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title" id="modaladdspv">Add Supervisor for Student Internship</h5>
																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																		<span aria-hidden="true">&times;</span>
																	</button>
																</div>

																<form method="POST" action="proses_dummy_test.php?PageAction=update_spv">

																	<input type="hidden" id="token" name="token" value="<?php echo $token; ?>">
                                                                    <input type="hidden" id="id_internship" name="id_internship" value="<?php echo $data['id_internship']; ?>">
                                                                    <input type="hidden" id="id_company" name="id_company" value="<?php echo $data['id_company']; ?>">
																	<input type="hidden" id="id_user_company" name="id_user_company" value="<?php echo $data['id_user_company']; ?>">

																	<div class="modal-body">
																		<div class="form-group">
																			<label for="name">Student Name</label>
																			<input type="text" class="form-control" id="name" name="name" value="<?php echo $data['name'] ?>" disabled>
																		</div>
																		<div class="form-group">
																			<label for="studyprogram">Start Date</label>
																			<input type="date" class="form-control" id="start_date" name="start_date" value="<?php echo $data['start_date'] ?>" disabled>
																		</div>
																		<div class="form-group">
																			<label for="studyprogram">End Date</label>
																			<input type="date" class="form-control" id="end_date" name="end_date" value="<?php echo $data['end_date'] ?>" disabled>
																		</div>
																		<div class="form-group">
																			<label>Supervisor</label>
																			<select class="form-control" id="id_user_company" name="id_user_company" value="0">
																				<option></option>
																				<?php
																				$sql = mysqli_query($conn, "SELECT * FROM tb_user_company WHERE id_company = $id_company AND user_type = 'supervisor'");
																				if (mysqli_num_rows($sql) != 0) {
																					while ($row = mysqli_fetch_assoc($sql)) {
																						echo '<option value=' . $row["id_user_company"] . '>' . $row['user_fullname'] . ' </option>';
																					}
																				}
																				?>
																			</select>
																		</div>
																	</div>
																	<div class="modal-footer border-top-0 d-flex justify-content-center">
																		<button type="submit" class="btn btn-secondary btn-sm" name="btn-add" id="btn-add">UPDATE</button>
																	</div>
																</form>
															</div>
														</div>
													</div> -->
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

					<!-- Modal Area -->

					<!-- End Modal Area -->

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

				$('#alert_demo_7').click(function(e) {
					swal({
						title: 'Delete this intern?',
						text: "",
						type: 'warning',
						buttons: {
							confirm: {
								text: 'Yes!',
								className: 'btn btn-success'
							},
							cancel: {
								visible: true,
								className: 'btn btn-danger'
							}
						}
					})
				});

				$('#alert_demo_8').click(function(e) {
					swal({
						title: 'Delete this intern?',
						text: "",
						type: 'warning',
						buttons: {
							confirm: {
								text: 'Yes!',
								className: 'btn btn-success'
							},
							cancel: {
								visible: true,
								className: 'btn btn-danger'
							}
						}
					})
				});

				$('#alert_demo_9').click(function(e) {
					swal({
						title: 'Delete this intern?',
						text: "",
						type: 'warning',
						buttons: {
							confirm: {
								text: 'Yes!',
								className: 'btn btn-success'
							},
							cancel: {
								visible: true,
								className: 'btn btn-danger'
							}
						}
					})
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