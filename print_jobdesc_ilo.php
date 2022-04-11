<?php
use Mpdf\Tag\Tr;

require_once __DIR__ . '/vendor/autoload.php';
require 'config.php';

ob_start();
	$id = $_GET['id'];
	$id_jobdesc_intern = $_GET['id_jobdesc_intern'];
	include 'config.php';
		$view = mysqli_query($conn, "SELECT * FROM (tb_detail_jobdesc LEFT JOIN tb_jobdesc ON tb_detail_jobdesc.id_jobdesc = tb_jobdesc.id_jobdesc) 
		LEFT JOIN tb_ceklis_jobdesc_intern ON tb_ceklis_jobdesc_intern.id_detail = tb_detail_jobdesc.id_detail 
		LEFT JOIN tb_jobdesc_intern ON tb_jobdesc_intern.id_jobdesc = tb_jobdesc.id_jobdesc 
		LEFT JOIN tb_student_internship ON tb_student_internship.nim = tb_jobdesc_intern.nim 
		LEFT JOIN tb_internship ON tb_internship.id_internship = tb_jobdesc_intern.id_internship 
		LEFT JOIN tb_company ON tb_company.id_company = tb_internship.id_company WHERE tb_jobdesc_intern.id_jobdesc_intern=$id_jobdesc_intern");
		if($view->num_rows > 0) :
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
				<td>
					<center><img src="assets/img/polibatamlogo.png" width="85px">
						<center>
				</td>
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
		<hr width="0px" style="border-bottom: 10px">
		<p class="heading">A. Student Internship Identity</p>
		<!--Student Internship Identity-->
		<table class="identity-text">
			<?php
			$data = mysqli_fetch_assoc($view);
				
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
				";
			
			?>
		</table>
		<!--Task Type Parameter-->
		<!--
		// 		echo "
		// <div style='background-color: white; border: 1px solid #17202A; height: 20%; margin: 10px 0px; padding: 5px; text-align: left; width: auto;'>
		// <div style='padding:20px'>
		// <p class='sub-heading'>1. Type of Work :</p><br><p class='sub-content'>" . $data['job_type']  . "</p></div>
		// </div>
		// <div style='background-color: white; border: 1px solid #17202A; height: 20%; margin: 10px 0px; text-align: left; width: auto;'>
		// <div style='padding: 20px'>
		// <p class='sub-heading'>2. " . $data['question_1'] . "</p><br><p class='sub-content'>" . $data['answer_1'] . "</p>
		// </div>
		// </div>
		// <div style='background-color: white; border: 1px solid #17202A; height: 20%; margin: 10px 0px; text-align: left; width: auto;'>
		// <div style='padding: 20px'>
		// <p class='sub-heading'>3. " . $data['question_1'] . "</p><br>
		// <p class='sub-content'>" . $data['answer_2'] . "</p></div>
		// </div>
		// "
		-->
		
		<div style='background-color: white; border: 1px solid #17202A; height: 20%; margin: 10px 0px; padding: 5px; text-align: left; width: auto;'>
		<div style='padding:20px'>
			<p class='sub-heading'>1. Type of Work :</p><br>
				<p class='sub-content'>
					<?php 
					$id_jobdesc_intern = $_GET['id_jobdesc_intern'];
					$query = mysqli_query($conn, "SELECT * FROM (tb_detail_jobdesc LEFT JOIN tb_jobdesc ON tb_detail_jobdesc.id_jobdesc = tb_jobdesc.id_jobdesc) 
					LEFT JOIN tb_ceklis_jobdesc_intern ON tb_ceklis_jobdesc_intern.id_detail = tb_detail_jobdesc.id_detail 
					LEFT JOIN tb_jobdesc_intern ON tb_jobdesc_intern.id_jobdesc = tb_jobdesc.id_jobdesc 
					LEFT JOIN tb_student_internship ON tb_student_internship.nim = tb_jobdesc_intern.nim 
					LEFT JOIN tb_internship ON tb_internship.id_internship = tb_jobdesc_intern.id_internship 
					LEFT JOIN tb_company ON tb_company.id_company = tb_internship.id_company 
					WHERE tb_jobdesc_intern.id_jobdesc_intern = $id_jobdesc_intern  GROUP BY tb_ceklis_jobdesc_intern.id_detail HAVING COUNT(tb_ceklis_jobdesc_intern.id_detail) > 1");


					while($datas = mysqli_fetch_assoc($query)){

						$arrs = preg_replace("([A-Z])"," $0",$datas['job_type']);
						$arr = explode(",",trim($arrs));

						foreach($arr as $text){
							// $mytext[] = array_merge($text);
							$dataz = $text.', ';

						};
						// $text = $dataz;
						print_r($dataz);
						//echo gettype($text);
                        // print_r($datas['job_type']);
					}

					
					?>
				</p>
		</div>
		</div>
		<div style='background-color: white; border: 1px solid #17202A; height: 20%; margin: 10px 0px; text-align: left; width: auto;'>
		<div style='padding: 20px'>
		<p class='sub-heading'>2. <?= $data['question_1']?></p><br><p class='sub-content'><?= $data['answer_1']?></p>
		</div>
		</div>
		<div style='background-color: white; border: 1px solid #17202A; height: 20%; margin: 10px 0px; text-align: left; width: auto;'>
		<div style='padding: 20px'>
		<p class='sub-heading'>3. <?= $data['question_2']?></p><br>
		<p class='sub-content'><?= $data['answer_2']?></p></div>
		</div>

		<!--Menutup Perulangan While-->

	<?php
		$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4', 'margin_top' => 10, 'margin_bottom' => 10, 'margin_left' => 20, 'margin_right' => 20]);
		$html = ob_get_contents();
		ob_end_clean();
		$mpdf->WriteHTML(utf8_encode($html));
		$mpdf->Output("Job-Description.pdf", 'I');
	?>

</body>
</html>
<?php
	else:
		echo "
		<script type='text/javascript'>
		 setTimeout(function () { 
		  swal({
			title: '',
			text: 'Job description has not been assigned!',
			buttons: true
		  }); 
		 },10); 
		 window.setTimeout(function(){ 
		  window.location.replace('index.php?page=hrd-studentlist');
		 } ,4000); 
		</script>
		";
	endif;

?>

<!-- Sweet Alert -->
<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>
