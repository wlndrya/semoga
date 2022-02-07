<?php
include 'config';
include 'fpdf/fpdf.php';

//Grab Variables
// $student_name = $_POST['name'];
// $nim = $_POST['nim'];
// $company = $_POST['name'];

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
//    $this->Image('assets/img/profile2.png',0,0,4);
}
};

//Create PDF
$pdf = new PDF("P","cm","A4");
$pdf->SetMargins(0.5,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
$pdf->Cell(20,0,"JOB DESCRIPTION STUDENT INTERNSHIP 2022",0,20,'C');
$pdf->Line(1,2.5,20,2.5);
$pdf->SetLineWidth(0.1);
$pdf->Line(1,2.5,20,2.5);
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->ln(1);
  

//Student Identity
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,0,"A. INTERNSHIP STUDENT IDENTITY",0,20,'J');
$pdf->Ln(1); //Line Break
$pdf->Cell(15	,1,'NAME	:',1,0.1);
$pdf->Cell(15	,1,'NIM	:',1,0.1);
$pdf->Cell(15	,1,'STUDY PROGRAM	:',1,0.1);
$pdf->Cell(15	,1,'COMPANY	:',1,0);
// $pdf->Cell(130	,1,'COMPANY	:',1,0);
// $pdf->Cell(59	,1,'',1,1);//end of Line

$query=mysqli_query($conn,"select * from tb_internship INNER JOIN tb_student_internship ON tb_internship.nim = tb_student_internship.nim");
while($data=mysqli_fetch_array($query)){
	$pdf->Cell(10,1,$data['name'],1,0);
	$pdf->Cell(10,1,$data['nim'],1, 0);
	// $pdf->Cell(4.5, 0.8, $data['name'], 1, 0, 'C');
}

//Task Type Parameters
$pdf->Ln(2);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,0,"B. TASK TYPE PARAMETERS",0,20,'J');

// $pdf->Cell(59, 5,'',1,1);//End of Line
// $pdf->Cell(7, 0.8, 'NIS', 1, 0, 'C');
// $pdf->Cell(9, 0.8, 'Nama Mahasiswa', 1, 0, 'C');
// $pdf->Cell(4.5, 0.8, 'Jenis Kelamin', 1, 0, 'C');
// $pdf->Cell(4.5, 0.8, 'Telepon', 1, 0, 'C');
// $pdf->Cell(2, 0.8, 'Alamat', 1, 1, 'C');

// $no=1;
// $query=mysqli_query($conn,"select * from siswa");
// while($data=mysqli_fetch_array($query)){
// 	$pdf->Cell(1, 0.8, $no, 1, 0, 'C');
// 	$pdf->Cell(7, 0.8, $data['nis'], 1, 0,'C');
// 	$pdf->Cell(9, 0.8, $data['nama'], 1, 0,'C');
// 	$pdf->Cell(4.5, 0.8, $data['jk'], 1, 0, 'C');
// 	$pdf->Cell(4.5, 0.8, $data['telepon'], 1, 0, 'C');
// 	$pdf->Cell(2, 0.8, $data['alamat'], 1, 1,'C');
// 	$no++;}

// $pdf->SetFont('Arial','',9);
// $query=mysqli_query($conn,"select * from tb_internship INNER JOIN tb_student_internship ON tb_internship.nim = tb_student_internship.nim");
// while($data=mysqli_fetch_array($query)){
// 	$pdf->Cell(9, 0.8, $data['name'], 1, 0,'C');
// 	$pdf->Cell(4.5, 0.8, $data['nim'], 1, 0, 'C');
	// $pdf .= '<strong>Name</strong>' . $nim . '<br />';
	// $pdf .= '<strong>Name</strong>' . $company . '<br />';
// }
$pdf->Output("JobDescription.pdf","I");
?>