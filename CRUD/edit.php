<?php 
	include 'koneksi.php';

	if (!isset($_GET['id'])) {
		header('location: list.php');
	}

	$id = $_GET['id'];

	$sq = "SELECT * FROM mahasiswa WHERE id=$id";
	$query = mysqli_query($db, $sq);
	$mahasiswa = mysqli_fetch_assoc($query);

	if (mysqli_num_rows($query) < 1) {
		die("Tidak ditemukan");
	}

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Form Edit</title>
 </head>
 <body>
 	<form action="proses_edit.php" method="POST">
 		<fieldset>
 			<input type="hidden" name="id" value="<?php echo $mahasiswa['id'] ?>"/>

 			<p>
 				<label for="Nama">Nama :</label>
 				<input type="text" name="Nama" placeholder="Nama" value="<?php echo $mahasiswa['Nama'] ?>"/>
 			</p>

 			<p>
 				<label for="NIM">NIM :</label>
 				<input type="text" name="NIM" placeholder="NIM" value="<?php echo $mahasiswa['NIM'] ?>"/>
 			</p>

 			<p>
 				<label for="Alamat">Alamat :</label>
 				<input type="text" name="Alamat" placeholder="Alamat" value="<?php echo $mahasiswa['Alamat'] ?>"/>

 			</p>

 			<p>
 				
 				<button type="submit" name="simpan">Simpan</button>
 			</p>

 		</fieldset>
 	</form>
 </body>
 </html>