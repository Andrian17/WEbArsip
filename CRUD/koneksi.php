<?php
$db = mysqli_connect("localhost", "root", "", "crud");
	
	if (!$db) {
		die("Ada kesalahan koneksi dengan database!".mysqli_connect_error());
	}


	function regisakun($data){
		global $db;

		$username = strtolower(stripslashes($data["username"]));
		$password = mysqli_real_escape_string($db, $data["password"]);
		$password2 = mysqli_real_escape_string($db, $data["password2"]);

	//cek username sama
		$hasil = mysqli_query($db, "SELECT username FROM users WHERE username = '$username'");

		if (mysqli_fetch_assoc($hasil)) {
			echo "<script>
						alert('username sudah ada');
				</script>";
			return false;
		}

	//cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
					alert('Konfirmasi Password Salah');
			</script>";
		return false;
	}

	//Enkripsi Password
	
	$password = password_hash($password, PASSWORD_DEFAULT);

	//tambah userbaru
	mysqli_query($db, "INSERT INTO users VALUES ('0', '$username', '$password')");

	return mysqli_affected_rows($db);
	}
?>