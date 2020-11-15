<?php
include 'koneksi.php';

if (isset($_POST["daftar"])) {

	if (regisakun($_POST) > 0) {
		echo "<script>
				alert('Akun Baru Ditambahkan');
			</script>";
	} else {
		echo mysqli_error($db);
	}
	
	header('location: index.php?status=sukses');

}

?>