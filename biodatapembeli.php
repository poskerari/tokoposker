<?php
include('header.php');
?>
<title>DATAMU</title>
<form method="post" action="simpandata.php">
	<table border="1" align="center">
		<tr>
			<td colspan="3" align="center">Masukkan Data Diri Anda</td>
		</tr>
		<tr>
			<td align="center">Nama</td>
		</tr>
		<tr>
			<td><textarea id="nama" name="nama"></textarea></td>
		</tr>
		<tr>
			<td align="center">Alamat</td>
		</tr>
		<tr>
			<td><textarea name="alamat" id="alamat"></textarea></td>
		</tr>
		<tr>
			<td align="center">Kode Pos</td>
		</tr>
		<tr>
			<td><input type="text" id="kode_pos" name="kode_pos"></td>
		</tr>
		<tr>
			<td align="center">Provinsi</td>
		</tr>
		<tr>
			<td><input type="text" id="provinsi" name="provinsi"></td>
		</tr>
		<tr>
			<td align="center">kabupaten/Kota</td>
		</tr>
		<tr>
			<td><input type="text" id="kabupaten_kota" name="kabupaten_kota"></td>
		</tr>
		<tr>
			<td align="center">Kecamatan</td>
		</tr>
		<tr>
			<td><input type="text" id="kecamatan" name="kecamatan"></td>
		</tr>
		<tr>
			<td align="center">Kelurahan</td>
		</tr>
		<tr>
			<td><input type="text" id="kelurahan" name="kelurahan"></td>
		</tr>
		<tr>
			<td align="center">No.handphone</td>
		</tr>
		<tr>
			<td><input type="text" id="no_handphone" name="no_handphone"></td>
		</tr>
		<tr>
			<td colspan="3" align="center"><input type="submit" value="Kirim"></td>
		</tr>
	</table>
</form>
<?php
include('footer.php');
?>   