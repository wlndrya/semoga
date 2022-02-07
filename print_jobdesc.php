<?php
include 'config';
include 'fpdf/fpdf.php';
$pdf = new FPDF("P","cm","A4");
$pdf->SetMargins(0.5,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.5,0.7,"JOB DESCRIPTION STUDENT INTERNSHIP 2022",0,10,'C');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);
$pdf->Line(1,3.2,28.5,3.2);
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->ln(1);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(7, 0.8, 'NIS', 1, 0, 'C');
$pdf->Cell(9, 0.8, 'Nama Mahasiswa', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Jenis Kelamin', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Telepon', 1, 0, 'C');
$pdf->Cell(2, 0.8, 'Alamat', 1, 1, 'C');
$pdf->SetFont('Arial','',9);
$no=1;
$query=mysqli_query($koneksi,"select * from siswa");
while($lihat=mysqli_fetch_array($query)){
	$pdf->Cell(1, 0.8, $no, 1, 0, 'C');
	$pdf->Cell(7, 0.8, $lihat['nis'], 1, 0,'C');
	$pdf->Cell(9, 0.8, $lihat['nama'], 1, 0,'C');
	$pdf->Cell(4.5, 0.8, $lihat['jk'], 1, 0, 'C');
	$pdf->Cell(4.5, 0.8, $lihat['telepon'], 1, 0, 'C');
	$pdf->Cell(2, 0.8, $lihat['alamat'], 1, 1,'C');
	$no++;}
$pdf->Output("JobDescription.pdf","I");
?>