<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>LOGIN</title>
	<style type="text/css">
		body {
			font-family: handwriting;
			background-color: lightblue;
			background-image: url(img/bab.jpg);
			background-repeat: no-repeat;

		}
	</style>
</head>

<body>
	<div style="margin-top: 20px;margin-bottom: 20px;">
		<center>
			<div style="background: #000;width: 340px;height: 100px;">
				<br>
				<h3 style="color: #fff;margin-top: 10px">POSKER STORE</h3>
			</div>
		</center>
	</div>
	<form method="post" action="ceklogin.php">
		<table border="1" align="center">
			<tr>
				<td colspan="3" align="center">FORM LOGIN</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" id="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" id="password"></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" value="Login"></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" value="Register"></td>
			</tr>
		</table>

	</form>
</body>

</html>