<?php 
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Pendaftaran Mahasiswa
	</title>
</head>
<body>
	<header>
		<h2>Pendaftar</h2>
	</header>

	<nav>
		<a href = "daftar.php"> Tambah </a>
	</nav>

	<br>

	<table border = "1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Alamat</th>
			<th>Action</th>
		</tr>

		<?php
			$sq = "SELECT * FROM mahasiswa";
			$query = mysqli_query($db,$sq);
			$no = 1;

			while ($mahasiswa = mysqli_fetch_array($query)) 
				{
		?>
		
		<tr>
			<td><?php echo $no++;?></td>
			<td><?php echo $mahasiswa['Nama'];?></td>
			<td><?php echo $mahasiswa['NIM'];?></td>
			<td><?php echo $mahasiswa['Alamat'];?></td>

			<td>
				<a href="edit.php?id=<?php echo $mahasiswa['id']?>">Edit</a>
				<a href="hapus.php?id=<?php echo $mahasiswa['id']?>">Hapus</a>
			</td>
		</tr>

		<?php } ?>
	
	</table>
	<p>Total: <?php echo mysqli_num_rows($query);?></p>

</body>
</html>