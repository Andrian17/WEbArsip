
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>
	<?php
 // Apa itu Array. .?
	// Array merupakanvariabelyang memiliki isi atau nilai dalam suatu variabelnya. nilai array pertama dimulai dari 0.
	$Smartphone = array("Iphone", "Nokia", "Samsung", "Xiomi", "Oppo");
	$Kendaraan = ["mobil", "Motor", "Sepeda", "Kereta"];

	var_dump($Smartphone);
	echo"<br>";
	print_r($Smartphone);
	echo "<br>";
	echo $Smartphone[0];
	echo "<br>";
	$Smartphone[] = "Huawei";
	echo "<br>";
	print_r($Smartphone);
	echo "<br>";
	sort($Smartphone);
	// rsort($Smartphone);

	//Melakukan looping untuk mencetak array
	$panjang = count($Smartphone);
	for ($x = 0; $x < $panjang; $x++)
	{
		echo $Smartphone[$x];
		echo "<br>";
	}

	var_dump($Kendaraan);
	echo "<br>";

	//mencetak dengan method for
	for ($x=0; $x < count($Kendaraan); $x++) { 
		echo $Kendaraan[$x];
		echo "<br>";
	}
	    echo "<br>";

	//memcetak dengan method foreach
	foreach ($Kendaraan as $transport) {
	        echo $transport;
	        echo "<br>";

	}

	//membuat fungsi
	function luasPersegi($panjang , $lebar)
	{
		$luasPersegi= $panjang * $lebar;
		return $luasPersegi;
	}

	//memanggil dan mencetak fungsi
	echo luasPersegi(20,10);
	echo "<br>";
	echo luasPersegi(80,40);


	//Modularisasi
	//untuk modularisasi ini terlebih dahulu membuat file seperti array.php
	//include
	include 'Array.php';

	foreach ($handphone as $hp) {
		echo $hp;
		echo "<br>";
	}
    
    require 'Array.php';
    foreach ($handphone as $coba) {
        echo $coba;
        echo "<br>";
    }

	?>

</body>
</html>