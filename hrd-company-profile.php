<?php
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

		<div class="main-header" data-background-color="bluedark">
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
						<img src="assets/img/logoMI.png" height="50 " alt="navbar brand" class="navbar-brand">
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
								<span class="menu-title text-desc">Profile</span>
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
								<span class="menu-title text-desc">HRD Menu</span>
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
								<span class="menu-title text-desc">Student Internship</span>
							</a>
						</li>
						<li class="nav-item submenu">
							<a class="nav-link" href="index.php?page=hrd-document">
								<i class="link-icon icon-folder-alt"></i>
								<span class="menu-title text-desc">Internship Files</span>
							</a>
						</li>
						<li class="nav-item submenu">
							<a class="nav-link" href="index.php?page=hrd-tutorial">
								<i class="link-icon icon-screen-desktop"></i>
								<span class="menu-title text-desc">Tutorial</span>
							</a>
						</li>
						<li class="nav-item submenu">
							<a class="nav-link" href="index.php?page=hrd-information&id_user_company=<?php echo $user_id; ?>">
								<i class="link-icon icon-question"></i>
								<span class="menu-title text-desc">Information</span>
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

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title"><b>Company Profile</b></div>
									<div class="card-category"></a></div>
								</div>
								<form id="company_profile" method="POST" action="proses_dummy_test.php?PageAction=update_company" onsubmit="return confirm('You will make profile changes. If you are sure that all the fields are correct, then continue?');">
									<input type="hidden" id="token" name="token" value="<?php echo $token; ?>">
									<input type="hidden" id="id_user_company" name="id_user_company" value="<?php echo $_SESSION['id_user_company']; ?>">
									<input type="hidden" id="id_company" name="id_company" value="<?php echo $_SESSION['id_company']; ?>">
									<input type="hidden" id="access_type" name="access_type" value="<?php echo $_SESSION['access_type']; ?>">

									<div class="card-body">
										<?php
										include 'config.php';
										//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
										$view = mysqli_query($conn, "SELECT * FROM tb_company WHERE id_company = $id_company");
										$data = mysqli_fetch_array($view);
										?>
										
										<div class="form-group form-show-validation row">
											<label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Company Name <span class="required-label">*</span></label>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<input type="text" class="form-control" id="company_name" name="company_name" value="<?php echo $data['company_name'] ?>" disabled>
											</div>
										</div>
										<div class="form-group form-show-validation row">
											<label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Company Type <span class="required-label">*</span></label>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<select class="form-control" id="type" name="type" value="0">
													<option value="agency" <?php if ($data['type'] == "agency") echo 'selected="selected"'; ?>>Agency</option>
													<option value="design" <?php if ($data['type'] == "design") echo 'selected="selected"'; ?>>Design</option>
													<option value="education" <?php if ($data['type'] == "education") echo 'selected="selected"'; ?>>Education</option>
													<option value="engineering" <?php if ($data['type'] == "engineering") echo 'selected="selected"'; ?>>Engineering</option>
													<option value="finance" <?php if ($data['type'] == "finance") echo 'selected="selected"'; ?>>Finance</option>
													<option value="government" <?php if ($data['type'] == "government") echo 'selected="selected"'; ?>>Government</option>
													<option value="health" <?php if ($data['type'] == "health") echo 'selected="selected"'; ?>>Health</option>
													<option value="it" <?php if ($data['type'] == "it") echo 'selected="selected"'; ?>>IT & Telco</option>
													<option value="logistics" <?php if ($data['type'] == "logistics") echo 'selected="selected"'; ?>>Logistics</option>
													<option value="marketing" <?php if ($data['type'] == "marketing") echo 'selected="selected"'; ?>>Marketing</option>
													<option value="media" <?php if ($data['type'] == "media") echo 'selected="selected"'; ?>>Media</option>
													<option value="others" <?php if ($data['type'] == "others") echo 'selected="selected"'; ?>>Others</option>
												</select>
											</div>
										</div>
										<div class="form-group form-show-validation row">
											<label for="phone" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Phone Number <span class="required-label">*</span></label>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<input type="text" class="form-control" id="phone" name="phone" value="<?php echo $data['phone'] ?>" disabled>
											</div>
										</div>
										<div class="form-group form-show-validation row">
											<label for="email" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Email Address
												<span class="required-label">*</span></label>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<input type="email" class="form-control" id="email" name="email" value="<?php echo $data['email'] ?>" disabled>
												<small id="emailHelp" class="form-text text-muted"></small>
											</div>
										</div>
										<div class="form-group form-show-validation row">
											<label for="header" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Header <span class="required-label">*</span></label>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<input type="text" class="form-control" id="header" name="header" value="<?php echo $data['header'] ?>" disabled>
											</div>
										</div>
										<div class="form-group form-show-validation row">
											<label for="address" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Address <span class="required-label">*</span></label>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<input type="text" class="form-control" id="address" name="address" value="<?php echo $data['address'] ?>" disabled>
											</div>
										</div>
										<div class="form-group form-show-validation row">
											<label for="province" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Province <span class="required-label">*</span></label>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<input type="text" class="form-control" id="province" name="province" value="<?php echo $data['province'] ?>" disabled>
											</div>
										</div>
										<div class="form-group form-show-validation row">
											<label for="city" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">City <span class="required-label">*</span></label>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<input type="text" class="form-control" id="city" name="city" value="<?php echo $data['city'] ?>" disabled>
											</div>
										</div>
										<div class="form-group form-show-validation row">
											<label for="status" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Status
												<span class="required-label">*</span></label>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<div class="input-group">
													<input type="text" class="form-control is-valid" placeholder="" aria-label="status" aria-describedby="" readonly id="status" name="status" value="<?php echo $data['status'] ?>" disabled>
												</div>
											</div>
										</div>
										<div class="separator-solid"></div>
										<div class="form-group form-show-validation row">
											<label for="website" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Company Website <span class="required-label">*</span></label>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<input type="text" class="form-control" id="website" name="website" value="<?php echo $data['website'] ?>" disabled>
											</div>
										</div>
										<div class="form-group form-show-validation row">
											<label for="facebook" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Facebook <span class="required-label"></span></label>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<input type="text" class="form-control" id="facebook" name="facebook" value="<?php echo $data['facebook'] ?>" disabled>
											</div>
										</div>
										<div class="form-group form-show-validation row">
											<label for="twitter" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Twitter <span class="required-label"></span></label>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<input type="text" class="form-control" id="twitter" name="twitter" value="<?php echo $data['twitter'] ?>" disabled>
											</div>
										</div>
										<div class="form-group form-show-validation row">
											<label for="instagram" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Instagram <span class="required-label"></span></label>
											<div class="col-lg-4 col-md-9 col-sm-8">
												<input type="text" class="form-control" id="instagram" name="instagram" value="<?php echo $data['instagram'] ?>" disabled>
											</div>
										</div>
									</div><!-- card body -->
									<div class="card-action">
										<div class="row">
											<div class="col-md-12">
												<a class="btn btn-danger text-white" id="edit_btn" type="submit">Edit</a>
												<input class="btn btn-success" id="btn-save" type="submit" value="Save">
											</div>
										</div>
									</div>
								</form>
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

			//Summer Note
			$('#summernote').summernote({
				placeholder: 'Describe Company Profile . . .',
				fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Times New Roman'],
				tabsize: 2,
				height: 300
			});

			//SweetALert
			var SweetAlert2Demo = function() {
				var initDemos = function() {


					$('#alert_demo_7').click(function(e) {
						swal({
							title: 'Publish this Company Profile?',
							text: "This action will publish this post to other user.",
							type: 'warning',
							buttons: {
								confirm: {
									text: 'Yes, post it!',
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
									title: 'Posted!',
									text: 'Your post has been published.',
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

		<script type="text/javascript">
			jQuery(function($) {
				var $inputs = $('#company_profile :input').prop('disabled', true);
				$('#edit_btn').click(function() {
					$inputs.prop('disabled', false);
				});
			})
		</script>

		<?php
		include 'includes/footer.php';
		?>