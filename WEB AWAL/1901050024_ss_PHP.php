<html>
<head>
	<title>
		Andrian
	</title>
</head>
<body>

	<?php 
		
		/*Fungsi untuk menampilkan ke browser*/
		echo "<h1> Selamat datang di Website ini </h1>";

		/*menampilkan atau mendeklarasikan variabel*/
		$a = "Selamat";
		$b = 24;
		$c = 12.5;
		$d = true;

		echo $a, "<br>", $b, "<br>", $c, "<br>", $d, "<br>";

		echo "<br>";

		/*menampilkan fungsi contanta = Konstanta adalah pengidentifikasi (nama) untuk nilai sederhana. Nilai tidak dapat diubah selama skrip. Konstanta seperti variabel "except" bahwa begitu mereka didefinisikan mereka tidak dapat diubah atau tidak ditentukan pada saat script.*/

		define("GREETING", "Selamat Datang");
		echo GREETING, "<br>";

		echo "<br>";

		/* menggunakan fungsi if else */
		if ($b > $c) {
			echo "b lebih besar dari c";
		} elseif ($b == $c) {
			echo "b sama dengan c";
		} else {
			echo "b lebih kecil dari c";
		}

		echo "<br>";
		echo "<br>";


		/*menggunakan fungsi switch*/
		$merek = "Oppo";
		switch ($merek) {
			case 'apple':
				echo "ini adalah apple";
				break;
			case 'samsung':
				echo "ini adalah samsung";
				break;
			case 'Oppo':
				echo "ini adalah Oppo";
				break;
			default:
				echo "ini adalah Nokia";
				break;
		}

		echo "<br>";
		echo "<br>";

		/*menggunakan fungsi for loop = Foreach loop hanya bekerja pada array, dan digunakan untuk loop melalui setiap pasangan kunci / nilai dalam array.*/
		for ($x = 0; $x <= 7; $x++) { 
			echo "Nomornya adalah : $x <br>";
		}

		echo "<br>";

		$usia = array("Aldo"=>"35", "Rifqi"=>"37", "Burhan"=>"43");

		foreach($usia as $x => $val) {
		  echo "$x = $val<br>";
		}

		echo "<br>";

		/*menggunakan fungsi while loop*/
		$i = 1;
		while ($i <= 7):
			echo $i;
			$i++;
		endwhile;

		echo "<br>";

		/*menggunakan fungsi do while*/
		$i = 1;
		do {
			echo "nilai : $i <br>";
			$i++;
		} 
		while ($i <= 8);

		echo "<br>";

		/*menggunakan object atau OOP*/
		class Fruit {       /*membuat class. Dalam sebuah class variable disebut sebagai property dan function disebut sebagai method.*/ 
		  // Properties = yaitu medeklarasikan variable. pendeklarasian ini dilakukan secara public agar method lain dapat menggunakannya.
		  public $name;
		  public $color;

		  // Methods = yaitu melakukan deklarasi fungsi atau method set dan get.
		  function set_name($name) { /*fungsi ini dugunakan untuk mengisi/set nama/value.*/
		    $this->name = $name;
		  }
		  function get_name() { /*fungsi ini dugunakan untuk mengambil/get nama/value.*/
		    return $this->name;
		  }
		}

		/*Proses memanggil atau menggunakan fungsi set*/
		$apple = new Fruit(); /*membuat object apple dengan cara menambahkan kunci baru*/
		$banana = new Fruit(); /*membuat object banana dengan cara menambahkan kunci baru*/
		$apple->set_name('Apel'); /*memberi/set object apple dengan nama "Apel"*/
		$banana->set_name('Pisang'); /*memberi/set object banana dengan nama "Pisang"*/

		/*Proses memanggil atau menggunakan fungsi get. Fungsi get ini adalah memanggil object*/
		echo $apple->get_name(); /*memanggil object apple untuk ditampilkan*/
		echo "<br>";
		echo $banana->get_name(); /*memanggil object banana untuk ditampilkan*/


	?>

</body>
</html>