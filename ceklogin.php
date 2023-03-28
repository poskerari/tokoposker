<title>LOGIN</title>
<?php
session_start();

$user = $_POST['username'];
$password = $_POST['password'];
$key = "!@#$%^&*()";
$pass = $key . $password . $key;
$passencrypt = md5($pass);

//echo "password = ".$password."<br>";
//echo "After key = ".$pass."<br>";
//echo "Encrypt/Hash = ".$passencrypt; 

include("koneksi.php");
$sql = "SELECT * FROM `login` WHERE `username`='" . $user . "' AND `password`='" . $passencrypt . "'";
$hasil_query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($hasil_query);

$nama = $data['nama'];
$email = $data['email'];

//echo "nama anda adalah : ".$nama."<br>";
//echo "email anda adlah : ".$email;

if (empty($nama)) {
?>
	<script type="text/javascript">
		alert("Yahhh,Username dan Password Anda Salah!:'(");
		window.open("from_login2.php", "_self");
	</script>

<?php
} else {
	$_SESSION['nama'] = $nama;
	$_SESSION['email'] = $email;
?>
	<script type="text/javascript">
		alert("Yeay,,BERHASIL MASUK!!!");
		window.open("menuutama2.php", "_self");
	</script>

<?php
}
?>