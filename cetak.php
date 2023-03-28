<?php
$nama=$_POST['nama'];
$filter=$_POST['filter'];
$alamat=$_POST['alamat'];
$cetak=$_POST['cetak'];

if($filter=="nama"){
	$where="WHERE nama LIKE '%".$nama."%'";
	$judul="Nama";
}elseif ($filter=="alamat"){
	$where="WHERE alamat LIKE '%".$alamat."%'";
	$judul="Alamat";
}
if($cetak=="CETAK EXCEL"){
	include("cetak_excel.php");
}else{
	include("cetak_pdf.php");

}	
?>
