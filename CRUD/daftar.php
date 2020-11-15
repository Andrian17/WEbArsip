<!DOCTYPE html>
<html>
<head>
	<title>
		Form Daftar
	</title>
</head>
<body>

	<header>
		<h2>Form Pendaftaran</h2>
	</header>

	<form action="proses_daftar.php" method="POST">
		<fieldset>
			<p>
				<label for="Nama">Nama :</label>
				<input type="text" name="Nama" placeholder="Nama">
			</p>
			<p>
				<label for="NIM">NIM :</label>
				<input type="text" name="NIM" placeholder="NIM">
			</p>
			<p>
				<label for="Alamat">Alamat :</label>
				<textarea name="Alamat" placeholder="Alamat"></textarea>
			</p>
			<p>
				<input type="submit" value="daftar" name="daftar">
			</p>
			
		</fieldset>
	</form>

</body>
</html>