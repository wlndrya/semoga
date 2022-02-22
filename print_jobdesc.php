<?php

use Mpdf\Tag\Tr;

require_once __DIR__ . '/vendor/autoload.php';
require 'config.php';

ob_start();

$id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>JOB DESCRIPTION</title>
    </head>
    <body>
	<link rel="stylesheet" href="assets/css/style.css">
        <div style="margin-left: 20px">
		<table>
		<tr>
			<td><center><img src="assets/img/polibatamlogo.png" width="85px"><center></td>
			<td>
				<center>
					<font size="6"><b>JOB DESCRIPTION STUDENT INTERNSHIP 2022</b></font><br>
					<font size="5">POLITEKNIK NEGERI BATAM</font><br>
					<font size="1"><i>Batam Centre, Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29461</i></font>
				</center>
			</td>
		</tr>
	</table>
		</div>
		<hr width="0px" style = "border-bottom: 10px">
		<p class="heading">A. Student Internship Identity</p>
		<!--Student Internship Identity-->
		<table class="identity-text">
			<?php
			include 'config.php';
			$view = mysqli_query($conn, "SELECT * FROM tb_job_description LEFT JOIN tb_internship ON tb_job_description.id_internship = tb_internship.id_internship LEFT JOIN tb_student_internship ON tb_internship.nim = tb_student_internship.nim LEFT JOIN tb_company ON tb_internship.id_company = tb_company.id_company WHERE tb_job_description.id_internship = $id;");
			while ($data = mysqli_fetch_array($view)){
				echo "
				<tr>
				<td>Name</td>
				<td>: " . $data['name'] . "</td>
				</tr>
				<tr>
				<td>NIM</td>
				<td>: " . $data['nim'] . "</td>
				</tr>
				<tr>
				<td>Study Program</td>
				<td>: " . $data['study_program'] . "</td>
				</tr>
				<tr>
				<td>Company Name</td>
				<td>: " . $data['company_name'] . "</td>
				</tr>
				"
			?>
		</table>

		<p class="heading">B. Task Type Parameter</p>

		<!--Task Type Parameter-->
		<?php
		echo "
		<div style='background-color: white; border: 1px solid #17202A; height: 20%; margin: 10px 0px; padding: 5px; text-align: left; width: auto;'>
		<div style='padding:20px'>
		<p class='sub-heading'>1. Type of Work :</p><br><p class='sub-content'>" . str_replace(array( '[', ']','"' ), '', $data['description_jobdesc'])  ."</p></div>
		</div>
		<div style='background-color: white; border: 1px solid #17202A; height: 20%; margin: 10px 0px; text-align: left; width: auto;'>
		<div style='padding: 20px'>
		<p class='sub-heading'>2. To other work can be explained as follows :</p><br><p class='sub-content'>" . $data['another_jobdesc'] ."</p>
		</div>
		</div>
		<div style='background-color: white; border: 1px solid #17202A; height: 20%; margin: 10px 0px; text-align: left; width: auto;'>
		<div style='padding: 20px'>
		<p class='sub-heading'>3. During the internship, students are expected to contribute in the form of :</p><br>
		<p class='sub-content'>" . $data['expected_goal'] ."</p></div>
		</div>
		"
		?>

		<!--Menutup Perulangan While-->
			<?php
			}
			?>
	</body>
</html>

<?php
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4','margin_top' => 10, 'margin_bottom' => 10, 'margin_left' => 20, 'margin_right' => 20]);
$html = ob_get_contents();
ob_end_clean();
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output("Job-Description.pdf" ,'I');
?>