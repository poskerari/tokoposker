<?php
header("content-type: application/vnd-ms-excel");
header("content-Disposition: attachment; filename=DataRegistrasi.xls");
?>
<table border="1" width="100%">
	<tr>
		<td colspan="8" align="center"><h1>Laporan Pembelian Berdasarkan <?php echo $judul; ?></h1></td>
	</tr>
	<tr align="center">	
		<td>nama</td>
		<td>alamat</td>
		<td>kode pos</td>
		<td>provinsi</td>
		<td>kabupaten/kota</td>
		<td>kecamatan</td>
		<td>kelurahan</td>
		<td>no handphone</td>
	</tr>
	<?php
		include("koneksi.php");
		$sql="SELECT * FROM `biodatapembeli`".$where;
		$hasil_query=mysqli_query($koneksi,$sql);
		while($data=mysqli_fetch_array($hasil_query)){
	?>		
		<tr>	
			<td align="center"><?php echo $data ['nama']; ?></td>
			<td align="center"><?php echo $data ['alamat']; ?></td>
			<td align="center"><?php echo $data ['kode_pos']; ?></td>
			<td align="center"><?php echo $data ['provinsi']; ?></td>
			<td align="center"><?php echo $data ['kabupaten/kota']; ?></td>
			<td align="center"><?php echo $data ['kecamatan']; ?></td>
			<td align="center"><?php echo $data ['kelurahan']; ?></td>
			<td align="center"><?php echo $data ['no_handphone']; ?></td>
		</tr>
	<?php
		}
	?>		
</table>