<title> LOGOUT </title>
<?php
session_start();
session_destroy();
?>

	<script type="text/javascript">
		alert("sampai jumpa lagi!!!!Anda berhasil keluar,Jangan Lupa kembali lagi ya!! ");
		window.open("from_login2.php","_self");
	</script>