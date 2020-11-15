<?php 
require 'koneksi.php';

	if (isset($_POST["login"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];

		$hasil = mysqli_query($db, "SELECT * FROM users WHERE username = '$username'");

	
		if (mysqli_num_rows($hasil) === 1) {
			
			
			$row = mysqli_fetch_assoc($hasil);
			if (password_verify($password, $row["password"])) {
				header("location: list.php");
				exit;
			}
		}

		$error = true;
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<h1>Silahkan Login Untuk Melihat Data Pendaftar</h1>

	<?php if (isset($error)) : ?>
		<h5 style="color: red; font-style: italic;"> Username dan Password Anda Salah</h5>
		
	<?php endif; ?>
	

	<form action="" method="POST">
		<ul>
			<li>
				<label for="username">username :</label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">Password :</label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<button type="submit" name="login">Login</button>
				<a href="regis_akun.php">Daftar Akun</a>
			</li>
		</ul>
	</form>

</body>
</html>