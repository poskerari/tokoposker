<?php
include ('header.php');
?>

<title>Laporan Pembelian</title>
<form method="post" action="cetak.php">
<table border="1" align="center"> 
	<tr>
		<td colspan="3" align="center">Laporan Pembelian</td>
	</tr>
	<tr>
		<td align="center"><input type="radio" name="filter" checked="checked" value="nama">Berdasarkan Nama:</td>
	</tr>
	<tr>
		<td><input type="text" name="nama" id="nama"></td>
	</tr>
	<tr>
		<td align="center"><input type="radio" name="filter" value="alamat">Berdasarkan Alamat</td>
		</td>
	</tr>
	<tr>	
		<td><input type="text" name="alamat" id="alamat"></td>
	</tr>
	<tr>
		<td colspan="3" align="center"><input type="submit" value="CETAK EXCEL" name="cetak" id="cetak"></td>
	</tr>
	<tr>
		<td colspan="3" align="center"><input type="submit" value="CETAK PDF" name="cetak" id="cetak"></td>
	</tr>

</table>
</form>
<?php
include ('footer.php');
?>