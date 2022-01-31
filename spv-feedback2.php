<?php
include 'config.php';

session_start();
$user = $_SESSION['user_fullname'];
$id_company = $_SESSION['id_company'];
$role = $_SESSION['user_type'];
$user_id = $_SESSION['id_user_company'];
$username = $_SESSION['username'];
$name = $_SESSION['user_fullname'];
$token = $_SESSION['token'];

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
									<a class="nav-link dropdown-toggle" href="index.php?page=login" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-sign-out-alt" title="Logout"></i>
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
							<a class="nav-link" href="index.php?page=spv-logbook">
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

				<form method="POST" action="proses_dummy_test.php?PageAction=add_feedback">
					<!-- Overall Comments -->
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Overall Comments</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<form>
								<input type="hidden" id="token" name="token" value="<?php echo $token; ?>">
								<input type="hidden" id="id_company" name="id_company" value="<?php echo $id_company; ?>">
								<input type="hidden" id="id_internship" name="id_internship" value="<?php echo $id_internship; ?>">
								<input type="hidden" id="nim" name="nim" value="<?php echo $nim; ?>">
								<div class="row">
									<div class="col-sm-6">
										<!-- textarea -->
										<div class="form-group">
											<label>1.Overall comments for the intern :</label>
											<textarea class="form-control" rows="3" name="intern_comment" id="intern_comment"></textarea>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>2. Overall comments for Politeknik Negeri Batam :</label>
											<textarea class="form-control" rows="3" name="campus_comment" id="campus_comment"></textarea>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>3. Does the student’s internship performance meet the requirement<br>
												for being new employee in your company/institution?</label>
											<textarea class="form-control" rows="3" name="performance" id="performance"></textarea>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>4. Does your company intend to recruit the intern immediately<br>
												he/she finished their internship?</label>
											<textarea class="form-control" rows="3" name="recruit_intern" id="recruit_intern"></textarea>
										</div>
									</div>
								</div><!-- Row -->
						</form>
					</div>
					</div>
					<!--End Overall Comments -->

					<!-- Evaluation Parameter -->
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">Evaluation Parameter</h4>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<form>
								<div class="row">
									<div class="col-sm-12">
										<!-- text input -->
										<div class="form-group">
											<label>1. Final grade for student based on overall internship process (range 1 –
												100): </label>
											<input type="text" class="form-control" name="final_grade" id="final_grade">
										</div>
										<div class="form-group">
											<label><b>2. Please Put tick checklist in the appropriate column in the following table
													based on the rubric provided in the subsequent table</b></label>
										</div>
										<table class="table table-bordered">
											<thead>
												<tr>
													<th style="width: 10px">No</th>
													<th>Parameters</th>
													<th style="width: 40px">Excellent<br>
														<center>4</center>
													</th>
													<th style="width: 40px">Good<br>
														<center>3</center>
													</th>
													<th style="width: 40px">Fair<br>
														<center>2</center>
													</th>
													<th style="width: 40px">Poor<br>
														<center>1</center>
													</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1.</td>
													<td>Ethics</td>
													<td class="text-center">
														<input class="form-check-input ml-1" name="4" type="radio">
													</td>
													<td class="text-center">
														<input class="form-check-input ml-1" name="3" type="radio">
													</td>
													<td class="text-center">
														<input class="form-check-input ml-1" name="2" type="radio">
													</td>
													<td class="text-center">
														<input class="form-check-input ml-1" name="1" type="radio">
													</td>
												</tr>
												<tr>
													<td>2.</td>
													<td>Core Competency Skills</td>
													<td class="text-center">
														<input class="form-check-input ml-1" name="4" type="radio">
													</td>
													<td class="text-center">
														<input class="form-check-input ml-1" name="3" type="radio">
													</td>
													<td class="text-center">
														<input class="form-check-input ml-1" name="2" type="radio">
													</td>
													<td class="text-center">
														<input class="form-check-input ml-1" name="1" type="radio">
													</td>
												</tr>
												<tr>
													<td>3.</td>
													<td>Foreign Language Proficiency</td>
													<td class="text-center">
														<input class="form-check-input ml-1" name="4" type="radio">
													</td>
													<td class="text-center">
														<input class="form-check-input ml-1" name="3" type="radio">
													</td>
													<td class="text-center">
														<input class="form-check-input ml-1" name="2" type="radio">
													</td>
													<td class="text-center">
														<input class="form-check-input ml-1" name="1" type="radio">
													</td>
												</tr>
												<tr>
													<td>4.</td>
													<td>Information Technology Literacy</td>
													<td class="text-center">
														<input class="form-check-input ml-1" name="4" type="radio">
													</td>
													<td class="text-center">
														<input class="form-check-input ml-1" name="3" type="radio">
													</td>
													<td class="text-center">
														<input class="form-check-input ml-1" name="2" type="radio">
													</td>
													<td class="text-center">
														<input class="form-check-input ml-1" name="1" type="radio">
													</td>
												</tr>
												<tr>
													<td>5.</td>
													<td>Communication Skill</td>
													<td class="text-center">
														<input class="form-check-input ml-1" name="4" type="radio">
													</td>
													<td class="text-center">
														<input class="form-check-input ml-1" name="3" type="radio">
													</td>
													<td class="text-center">
														<input class="form-check-input ml-1" name="2" type="radio">
													</td>
													<td class="text-center">
														<input class="form-check-input ml-1" name="1" type="radio">
													</td>
												</tr>
												<tr>
													<td>6.</td>
													<td>Teamwork</td>
													<td class="text-center">
														<input class="form-check-input ml-1" name="4" type="radio">
													</td>
													<td class="text-center">
														<input class="form-check-input ml-1" name="3" type="radio">
													</td>
													<td class="text-center">
														<input class="form-check-input ml-1" name="2" type="radio">
													</td>
													<td class="text-center">
														<input class="form-check-input ml-1" name="1" type="radio">
													</td>
												</tr>
												<tr>
													<td>7.</td>
													<td>Personal Development</td>
													<td class="text-center">
														<input class="form-check-input ml-1" name="4" type="radio">
													</td>
													<td class="text-center">
														<input class="form-check-input ml-1" name="3" type="radio">
													</td>
													<td class="text-center">
														<input class="form-check-input ml-1" name="2" type="radio">
													</td>
													<td class="text-center">
														<input class="form-check-input ml-1" name="1" type="radio">
													</td>
												</tr>
											</tbody>
										</table>
										<div class="form-group">
											<label><b><u>Rubric</u></b></label>
										</div>
										<table class="table table-bordered">
											<thead>
												<tr>
													<th>Parameters</th>
													<th>
														<center>Excellent</center>
														<center>76-100</center>
													</th>
													<th>
														<center>Good</center>
														<center>51-75</center>
													</th>
													<th>
														<center>Fair</center>
														<center>26-50</center>
													</th>
													<th>
														<center>Poor</center>
														<center>0-25</center>
													</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><b>Ethics</b></td>
													<td>
														<p>Attitude and behavior can be set as role model for others, personality that meets professional ethics</p>
													</td>
													<td>
														<p>Attitude and behavior meet the standard ethics and able to peform good personality</p>
													</td>
													<td>
														<p>Attitude and behavior are acceptable, and do not have negative impact for the organization</p>
													</td>
													<td>
														<p>Demontrates bad attitude and behavior, and has negative impact on the organization</p>
													</td>
												</tr>
												<tr>
													<td><b>Core Competency Skills</b></td>
													<td>
														<p>Able to demonstrate exceptional core competencies and provide value added for the organization</p>
													</td>
													<td>
														<p>Able to demonstrate core competencies well, however has not contributed to provide value added for the organization</p>
													</td>
													<td>
														<p>Able to demonstrate sufficient core competencies, but still need significant improvement</p>
													</td>
													<td>
														<p>Failed to demonstrate core competencies as required in the field</p>
													</td>
												</tr>
												<tr>
													<td><b>Foreign Language Proficiency</b></td>
													<td>
														<p>Able to communicate both orally and in writing using one of foreign languages fluently in accordance with best practices</p>
													</td>
													<td>
														<p>Able to communicate both orally and in writing using one of foreign languages moderately</p>
													</td>
													<td>
														<p>Able to communicate both orally and in writing using one of foreign language mixed with a local language</p>
													</td>
													<td>
														<p>Unable to communicate both orally and in writing using one of foreign language</p>
													</td>
												</tr>
												<tr>
													<td><b>Information Technology Literacy</b></td>
													<td>
														<p>Able to recognize, access, evaluate, synthesize, and use information technology application to improve job performance</p>
													</td>
													<td>
														<p>Quickly adapt with the information technology in the organization</p>
													</td>
													<td>
														<p>Do not find him/herself in trouble with the information technology in the organization</p>
													</td>
													<td>
														<p>Unable to use information technology in the organization</p>
													</td>
												</tr>
												<tr>
													<td><b>Communication Skill</b></td>
													<td>
														<p>Able to effectively deliver ideas to others both orally and in writing, actively listen in conversation, give and receive critical feedback and speak in public.</p>
													</td>
													<td>
														<p>Able to understand and deliver ideas to others both orally and in writing</p>
													</td>
													<td>
														<p>There is no misunderstanding when delivering and receiving ideas to/from coworker</p>
													</td>
													<td>
														<p>Unable to understand others and fail to deliver ideas</p>
													</td>
												</tr>
												<tr>
													<td><b>Teamwork</b></td>
													<td>
														<p>Able to lead a teamwork, achieve the goals, receive support from the team member, and resolve conflict</p>
													</td>
													<td>
														<p>Able to provide evidence in collaborating with other team member, accomplish assigned works, and contribute to the team</p>
													</td>
													<td>
														<p>Able to provide evidence in collaborating with other team members, accomplish assigned work</p>
													</td>
													<td>
														<p>Gives negative effects to the team</p>
													</td>
												</tr>
												<tr>
													<td><b>Personal Development</b></td>
													<td>
														<p>Willing to learn new things, take an initiative to improve themselves</p>
													</td>
													<td>
														<p>Willing to learn new things with a slight supervision</p>
													</td>
													<td>
														<p>Does not show resistance to learn new things, however needs to be encouraged</p>
													</td>
													<td>
														<p>Does not show signs of willingness and initiative to learn new things</p>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- /.card-body -->
									
							</form>
						</div>
					</div>

<!--Button Submit-->
<div class="modal-footer d-flex justify-content-center">
<button type="submit" class="btn btn-modify text-white" name="btn-submit" id="btn-submit">SUBMIT</button>
</div>
<!--End Button Submit-->
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
						title: 'Are you sure?',
						text: "Please check this Feedback to make sure that has been filled in correctly.",
						type: 'warning',
						buttons: {
							confirm: {
								text: 'Yes, Im Sure!',
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
								title: 'Successfull!',
								text: 'The Feedback has been published.',
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