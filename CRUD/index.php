<!DOCTYPE html>
<html>
<head>
	<title>Mahasiswa Universitas Bumigora</title>
</head>
<body>
	<header>
		<h2>Daftar Mahasiswa Universitas Bumigora</h2>
	</header>

	<h5>Menu</h5>
	<nav>
		<ul>
			<li><a href = "daftar.php">Daftar</a></li>
			<li><a href = "list.php">Mahasiswa</a></li>
		</ul>
	</nav>
	<?php if (isset($_GET['status'])):  ?>
		<p>
			<?php
			if ($_GET['status'] == 'sukses') {
				echo "Pendaftaran Berhasil";
			}else{
				echo "Pendaftaran Gagal";
			}
			?>
		</p>
	<?php endif; ?>
</body>
</html>