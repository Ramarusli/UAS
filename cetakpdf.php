<?php
require('../fpdf.php');
$pdf = new FPDF('l','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,7,'Data Donasi',0,1,'L');


$pdf->Cell(10,7,'',0,1); //space

$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,8,'ID',1,0,'C');
$pdf->Cell(50,8,'Jenis Alokasi',1,0,'C');
$pdf->Cell(70,8,'Jumlah Dana',1,0,'C');
$pdf->Cell(52,8,'Nama Lengkap',1,0,'C');
$pdf->Cell(35,8,'No Hp',1,0,'C');
$pdf->Cell(50,8,'Email',1,1,'C');

$pdf->SetFont('Arial','',10);

include '../koneksi.php';
$select = mysqli_query($koneksi, "select * from donasi");
while ($row = mysqli_fetch_array($select)){
    $pdf->Cell(10,8,$row['id'],1,0,'C');
    $pdf->Cell(50,8,$row['jenis_alokasi'],1,0,'C');
    $pdf->Cell(70,8,$row['jml_dana'],1,0,'C');
    $pdf->Cell(52,8,$row['nama'],1,0,'C');
    $pdf->Cell(35,8,$row['no_hp'],1,0,'C');
    $pdf->Cell(50,8,$row['email'],1,1,'C');
}

$pdf->Output();
?>
