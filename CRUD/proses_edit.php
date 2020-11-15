<?php 
	include 'koneksi.php';

	if (isset($_POST['simpan'])){

		$id = $_POST['id'];
		$Nama = $_POST['Nama'];
		$NIM = $_POST['NIM'];
		$Alamat = $_POST['Alamat'];

		$sq = "UPDATE mahasiswa SET Nama='$Nama', NIM='$NIM', Alamat='$Alamat' WHERE id='$id'";
		$query = mysqli_query($db, $sq);

		if ($query) {
			header('location: list.php');
		} else {
			die("Gagal menyimpan perubahan");
		}

	} else {
		die("Unauthorized Access");
	}

 ?>