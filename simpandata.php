<?php
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$kode_pos=$_POST['kode_pos'];
$provinsi=$_POST['provinsi'];
$kabupaten_kota=$_POST['kabupaten_kota'];
$kecamatan=$_POST['kecamatan'];
$kelurahan=$_POST['kelurahan'];
$no_handphone=$_POST['no_handphone'];

include('koneksi.php');

$simpan="INSERT INTO biodatapembeli (`nama`,`alamat`,`kode_pos`,`provinsi`,`kabupaten/kota`,`kecamatan`,`kelurahan`,`no_handphone`) VALUES ('".$nama."','".$alamat."','".$kode_pos."','".$provinsi."','".$kabupaten_kota."','".$kecamatan."','".$kelurahan."','".$no_handphone."')";
mysqli_query($koneksi,$simpan);

?>
<script type="text/javascript">
	alert("Data kamu berhasil disimpan:)");
	window.open("tabelpembelian.php","_self");
</script>


