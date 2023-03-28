<?php
include('header.php');
?>

<title>Tabel</title>
<a href="biodatapembeli.php">Tabel Pembelian</a>
<table border="1" width="100%">
	<tr align="center">
		<td>nama</td>
		<td>alamat</td>
		<td>kode_pos</td>
		<td>provinsi</td>
		<td>kabupaten/kota</td>
		<td>kecamatan</td>
		<td>kelurahan</td>	
		<td>no_handphone</td>
		<td>Action</td>
	</tr>
	<?php
		include "koneksi.php";
		$sql="SELECT * FROM `biodatapembeli`";
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
			<td align="center"><a href="edit.php?nama=<?php echo $data ['nama']; ?>">Edit </a> | <a href="hapuspembeli.php?nama=<?php echo $data['nama']; ?>" onclick="return confirm('Apakah data ini ingin dihapus?')"> Hapus</a>Hapus</td>
		</tr>
	<?php
		}
	?>
</table>	


<?php
include('footer.php');
?>