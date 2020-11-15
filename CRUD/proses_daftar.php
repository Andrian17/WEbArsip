<?php 
	include 'koneksi.php';


	if (isset($_POST['daftar'])) {
		
		$Nama = $_POST['Nama'];
		$NIM = $_POST['NIM'];
		$Alamat = $_POST['Alamat'];

		$sq = "INSERT INTO mahasiswa (Nama, NIM, Alamat) VALUES ('$Nama', '$NIM', '$Alamat')";
		$query = mysqli_query($db, $sq);

		if ($query) {
			header('location: index.php?status=sukses');
		} else {
			header('location: index.php?status=gagal');
		}
	}
	else {
		die("Unauthorized Access!!!");
	}
 ?>