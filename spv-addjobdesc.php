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

                <?php
					include 'config.php';
					$id = $_GET['id'];
					$view = mysqli_query($conn, "SELECT * FROM tb_job_description WHERE id_internship = $id");
                    // $description_jobdesc = (count($_POST['description_jobdesc']) > 0) ? implode('-', $_POST['description_jobdesc']) : ""; 
					 //print_r($view->num_rows);
					if($view->num_rows > 0):
					foreach($view as $data) :
				?>
                    <!--Tampilan View Data-->
                    <!-- Task Type Parameter -->
                    
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Task Type Parameter</h4>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- <form id="job_description" method="POST" action="proses_dummy_test.php?PageAction=update_jobdesc" onsubmit="return confirm('You will make profile changes. If you are sure that all the fields are correct, then continue?');"> -->
                            
                            <div class="row">
                                    <div class="col-sm-12">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <p>1. put a checklist in the checklist column on the appropriate type
                                                    of work.</p>
                                        </div>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px">No</th>
                                                    <th>Type of work</th>
                                                    <th>
                                                        <center>Checklist</center>
                                                    </th><br>
                                                </tr>
                                            </thead>
                                            <form action="proses_dummy_test.php?PageAction=add_jobdesc" method="post">
                                                <input type="hidden" value="<?php echo $_GET['id']?>" name="id">
                                                <input type="hidden" id="token" name="token" value="<?php echo $token; ?>">
							                    <input type="hidden" id="id_internship" name="id_internship" value="<?php echo $id_internship; ?>">
                                                <input type="hidden" id="id_jobdesc" name="id_jobdesc" value="<?php echo $id_jobdesc ?>">
                                            <tbody>
                                                <tr>
                                                    <td>1.</td>
                                                    <td>Database</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="description_jobdesc[]" value="Database"
                                                            <?php 
                                                                if(in_array('Database',json_decode($data['description_jobdesc']))){
                                                                    echo 'checked';
                                                                }
                                                            ?>>
                                                            <label class="custom-control-label" for="customCheck1">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2.</td>
                                                    <td>Data Analysis</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck2" name="description_jobdesc[]" value="Data Analysis"
                                                            <?php 
                                                                if(in_array('Data Analysis',json_decode($data['description_jobdesc']))){
                                                                    echo 'checked';
                                                                }
                                                            ?>>
                                                            <label class="custom-control-label" for="customCheck2">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3.</td>
                                                    <td>Information Systems</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck3" name="description_jobdesc[]" value="Information Systems"
                                                            <?php 
                                                                if(in_array('Information Systems',json_decode($data['description_jobdesc']))){
                                                                    echo 'checked';
                                                                }
                                                            ?>>
                                                            <label class="custom-control-label" for="customCheck3">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4.</td>
                                                    <td>Desktop Apps</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck4" name="description_jobdesc[]" value="Desktop Apps"
                                                            <?php 
                                                                if(in_array('Desktop Apps',json_decode($data['description_jobdesc']))){
                                                                    echo 'checked';
                                                                }
                                                            ?>>
                                                            <label class="custom-control-label" for="customCheck4">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5.</td>
                                                    <td>Apps and Web Design</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck5" name="description_jobdesc[]" value="Apps and Web Design"
                                                            <?php 
                                                                if(in_array('Apps and Web Design',json_decode($data['description_jobdesc']))){
                                                                    echo 'checked';
                                                                }
                                                            ?>>
                                                            <label class="custom-control-label" for="customCheck5">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>6.</td>
                                                    <td>Mobile Application</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck6" name="description_jobdesc[]" value="Mobile Application"
                                                            <?php 
                                                                if(in_array('Mobile Application',json_decode($data['description_jobdesc']))){
                                                                    echo 'checked';
                                                                }
                                                            ?>>
                                                            <label class="custom-control-label" for="customCheck6">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>7.</td>
                                                    <td>Apps Design</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck7" name="description_jobdesc[]" value="Apps Design"
                                                            <?php 
                                                                if(in_array('Apps Design',json_decode($data['description_jobdesc']))){
                                                                    echo 'checked';
                                                                }
                                                            ?>>
                                                            <label class="custom-control-label" for="customCheck7">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>8.</td>
                                                    <td>Use of Framework</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck8" name="description_jobdesc[]" value="Use of Framework"
                                                            <?php 
                                                                if(in_array('Use of Framework',json_decode($data['description_jobdesc']))){
                                                                    echo 'checked';
                                                                }
                                                            ?>>
                                                            <label class="custom-control-label" for="customCheck8">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>9.</td>
                                                    <td>Network</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck9" name="description_jobdesc[]" value="Network"
                                                            <?php 
                                                                if(in_array('Network',json_decode($data['description_jobdesc']))){
                                                                    echo 'checked';
                                                                }
                                                            ?>>
                                                            <label class="custom-control-label" for="customCheck9">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>10.</td>
                                                    <td>Troubleshooting</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck10" name="description_jobdesc[]" value="Troubleshooting"
                                                            <?php 
                                                                if(in_array('Troubleshooting',json_decode($data['description_jobdesc']))){
                                                                    echo 'checked';
                                                                }
                                                            ?>>
                                                            <label class="custom-control-label" for="customCheck10">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11.</td>
                                                    <td>Hardware</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck11" name="description_jobdesc[]" value="Hardware"
                                                            <?php 
                                                                if(in_array('Hardware',json_decode($data['description_jobdesc']))){
                                                                    echo 'checked';
                                                                }
                                                            ?>>
                                                            <label class="custom-control-label" for="customCheck11">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>12.</td>
                                                    <td>Multimedia and Simulation</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck12" name="description_jobdesc[]" value="Multimedia and Simulation"
                                                            <?php 
                                                                if(in_array('Multimedia and Simulation',json_decode($data['description_jobdesc']))){
                                                                    echo 'checked';
                                                                }
                                                            ?>>
                                                            <label class="custom-control-label" for="customCheck12">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>13.</td>
                                                    <td>Animation and Live Film making</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck13" name="description_jobdesc[]" value="Animation and live film making"
                                                            <?php 
                                                                if(in_array('Animation and live film making',json_decode($data['description_jobdesc']))){
                                                                    echo 'checked';
                                                                }
                                                            ?>>
                                                            <label class="custom-control-label" for="customCheck13">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>14.</td>
                                                    <td>Print or digital media layout design</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck14" name="description_jobdesc[]" value="Print or digital media layout design"
                                                            <?php 
                                                                if(in_array('Print or digital media layout design',json_decode($data['description_jobdesc']))){
                                                                    echo 'checked';
                                                                }
                                                            ?>>
                                                            <label class="custom-control-label" for="customCheck14">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>15.</td>
                                                    <td>Game Development</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck15" name="description_jobdesc[]" value="Game Development"
                                                            <?php 
                                                                if(in_array('Game Development',json_decode($data['description_jobdesc']))){
                                                                    echo 'checked';
                                                                }
                                                            ?>>
                                                            <label class="custom-control-label" for="customCheck15">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>16.</td>
                                                    <td>Broadcasting or Production crew</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck16" name="description_jobdesc[]" value="Broadcasting or production crew"
                                                            <?php 
                                                                if(in_array('Broadcasting or production crew',json_decode($data['description_jobdesc']))){
                                                                    echo 'checked';
                                                                }
                                                            ?>>
                                                            <label class="custom-control-label" for="customCheck16">Checked</label>
                                                        </div>
                                                    </td>\

                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="form-group">
                                            <p>2. To other work can be explained as follows : </p>
                                            <textarea class="form-control" rows="3" id="another_jobdesc" name="another_jobdesc" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <p>3. During the internship process, students are expected to contribute in the form of : </p>
                                            <textarea class="form-control" rows="3" id="expected_goal" name="expected_goal" required></textarea>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            <!-- </form> -->
                            </form>

                        </div>
                        <!--End Card Body-->
                    </div>
                    <!--End Evaluation Parameter-->

                    <?php
						endforeach;
						else :
						?>
                
                <!--Tampilan input data-->
                <!-- Task Type Parameter -->
                <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Task Type Parameter</h4>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- <form id="job_description" method="POST" action="proses_dummy_test.php?PageAction=update_jobdesc" onsubmit="return confirm('You will make profile changes. If you are sure that all the fields are correct, then continue?');"> -->
                            
                            <div class="row">
                                    <div class="col-sm-12">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <p>1. put a checklist in the checklist column on the appropriate type
                                                    of work.</p>
                                        </div>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px">No</th>
                                                    <th>Type of work</th>
                                                    <th>
                                                        <center>Checklist</center>
                                                    </th><br>
                                                </tr>
                                            </thead>
                                            <form action="proses_dummy_test.php?PageAction=add_jobdesc" method="post">
                                                <input type="hidden" value="<?php echo $_GET['id']?>" name="id">
                                                <input type="hidden" id="token" name="token" value="<?php echo $token; ?>">
							                    <input type="hidden" id="id_internship" name="id_internship" value="<?php echo $id_internship; ?>">
                                                <input type="hidden" id="id_jobdesc" name="id_jobdesc" value="<?php echo $id_jobdesc ?>">
                                            <tbody>
                                                <tr>
                                                    <td>1.</td>
                                                    <td>Database</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="description_jobdesc[]" value="Database">
                                                            <label class="custom-control-label" for="customCheck1">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2.</td>
                                                    <td>Data Analysis</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck2" name="description_jobdesc[]" value="Data Analysis">
                                                            <label class="custom-control-label" for="customCheck2">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3.</td>
                                                    <td>Information Systems</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck3" name="description_jobdesc[]" value="Information Systems">
                                                            <label class="custom-control-label" for="customCheck3">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4.</td>
                                                    <td>Desktop Apps</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck4" name="description_jobdesc[]" value="Desktop Apps">
                                                            <label class="custom-control-label" for="customCheck4">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5.</td>
                                                    <td>Apps and Web Design</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck5" name="description_jobdesc[]" value="Apps and Web Design">
                                                            <label class="custom-control-label" for="customCheck5">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>6.</td>
                                                    <td>Mobile Application</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck6" name="description_jobdesc[]" value="Mobile Application">
                                                            <label class="custom-control-label" for="customCheck6">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>7.</td>
                                                    <td>Apps Design</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck7" name="description_jobdesc[]" value="Apps Design">
                                                            <label class="custom-control-label" for="customCheck7">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>8.</td>
                                                    <td>Use of Framework</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck8" name="description_jobdesc[]" value="Use of Framework">
                                                            <label class="custom-control-label" for="customCheck8">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>9.</td>
                                                    <td>Network</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck9" name="description_jobdesc[]" value="Network">
                                                            <label class="custom-control-label" for="customCheck9">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>10.</td>
                                                    <td>Troubleshooting</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck10" name="description_jobdesc[]" value="Troubleshooting">
                                                            <label class="custom-control-label" for="customCheck10">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>11.</td>
                                                    <td>Hardware</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck11" name="description_jobdesc[]" value="Hardware">
                                                            <label class="custom-control-label" for="customCheck11">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>12.</td>
                                                    <td>Multimedia and Simulation</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck12" name="description_jobdesc[]" value="Multimedia and Simulation">
                                                            <label class="custom-control-label" for="customCheck12">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>13.</td>
                                                    <td>Animation and Live Film making</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck13" name="description_jobdesc[]" value="Animation and live film making">
                                                            <label class="custom-control-label" for="customCheck13">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>14.</td>
                                                    <td>Print or digital media layout design</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck14" name="description_jobdesc[]" value="Print or digital media layout design">
                                                            <label class="custom-control-label" for="customCheck14">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>15.</td>
                                                    <td>Game Development</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck15" name="description_jobdesc[]" value="Game Development">
                                                            <label class="custom-control-label" for="customCheck15">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>16.</td>
                                                    <td>Broadcasting or Production crew</td>
                                                    <td class="text-center">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck16" name="description_jobdesc[]" value="Broadcasting or production crew">
                                                            <label class="custom-control-label" for="customCheck16">Checked</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="form-group">
                                            <p>2. To other work can be explained as follows : </p>
                                            <textarea class="form-control" required rows="3" id="another_jobdesc" name="another_jobdesc"><?php echo $data['another_jobdesc']; ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <p>3. During the internship process, students are expected to contribute in the form of : </p>
                                            <textarea class="form-control" rows="3" required id="expected_goal" name="expected_goal"><?php echo $data['expected_goal'] ?></textarea>
                                        </div>
                                        <div>
                                            <p><b>**NOTES : This form must be filled out by the student internship supervisor from the industry
                                                    to determine what type of work will be provided to students during the internship</b></p>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
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
                    <!--End Evaluation Parameter-->

                    <?php
						endif;
						?>
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
                        text: "Please check this Job Description to make sure that has been filled in correctly.",
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
                                text: 'The Job Description has been published.',
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
    <!-- <script type="text/javascript">
			jQuery(function($) {
				var $inputs = $('#job_description :input').prop('disabled', true);
				$('#edit_btn').click(function() {
					$inputs.prop('disabled', false);
				});
			})
		</script> -->

</body>

</html>