

<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Akun</title>
	<style type="text/css">
		label{
			display: block;
		}
	</style>
</head>
<body>

	<h3>Silahkan Daftarkan Akun Anda</h3>
	<form action="proses_regis.php" method="POST">
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
				<label for="password2">Konfirmasi :</label>
				<input type="password" name="password2" id="password2">
			</li>
			<li>
				<button type="submit" name="daftar">Daftar</button>
			</li>
		</ul>
		
	</form>

</body>
</html>