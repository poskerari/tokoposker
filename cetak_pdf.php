<?php
require('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',11);

$pdf->Cell(199,10,'Laporan Pembelian Berdasarkan '.$judul,1,0,'C');
$pdf->Ln();

$pdf->Cell(25,10,'nama',1);
$pdf->Cell(32,10,'alamat',1);
$pdf->Cell(17,10,'kode pos',1);
$pdf->Cell(23,10,'provinsi',1);
$pdf->Cell(27,10,'kabupaten/kota',1);
$pdf->Cell(24,10,'kecamatan',1);
$pdf->Cell(24,10,'kelurahan',1);
$pdf->Cell(27,10,'no handphone',1);

$pdf->Ln();

include("koneksi.php");
$sql="SELECT * FROM `biodatapembeli`".$where;
$hasil_query=mysqli_query($koneksi,$sql);
while($data=mysqli_fetch_array($hasil_query)){
	$pdf->Cell(25,10, $data['nama'],1);
	$pdf->Cell(32,10, $data['alamat'],1);
	$pdf->Cell(17,10, $data['kode_pos'],1);
	$pdf->Cell(23,10, $data['provinsi'],1);
	$pdf->Cell(27,10, $data['kabupaten/kota'],1);
	$pdf->Cell(24,10, $data['kecamatan'],1);
	$pdf->Cell(24,10, $data['kelurahan'],1);
	$pdf->Cell(27,10, $data['no_handphone'],1);

	$pdf->Ln();

}	
$pdf->Output();
?>