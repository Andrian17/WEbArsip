<html>
<head>
	<title>
		Baiq Sri Dwi Lestari
	</title>
</head>
<body>
    <p><h3>Nama :   Baiq Sri Dwi Lestari<h3></p>
    <p><h3>Nim  :   1901050005<h3></p>

	<?php 
		
		echo "<h1> Selamat datang di Website ini </h1>";
        echo ("If Statement");
        echo "<br>";
        $t= date("18");
        if($t < "20"){
            echo "Have a good day";
        }
		echo "<br>";
        echo( "If... Else Statement");
        echo "<br>";

        if($t > "20"){
            echo "Have a good day";
        }else{
            echo "Have a good Night";
        }
        echo "<br>";
        echo ("If..ElseIf.. Else Statement");
        echo "<br>";

        if($t < "10"){
            echo "Have a good Morning";
        }elseif ($t < "20") {
            echo "Have a good day";
        }else{
            echo "Have a good Night";
        }
        echo "<br>";
        echo ("Switch Statement");
        echo "<br>";

        $favcolor="blue";
        switch ($favcolor) {
            case 'red':
                echo "your favorite color is red  ";
                break;
            case 'blue':
                echo "your favorite color is blue";
                break;
            case 'Green':
                echo "your favorite color is green";
                break;    
            default:
                echo "your favorite color is neither red, blue, not green";
                break;
        }

        echo "<br>";
        echo ("<h3>Perulangan</h3>");
        echo "<br>";
        echo "While";
        echo "<br>";
        $x = 1;
        while ($x <= 10) {
            echo "The number is: $x <br>";
            $x++;
        }
        echo "<br>";

        echo "DO.. While";
        echo "<br>";
        do {
            echo "The number is: $x <br>";
            $x++;
        } while ($x < 5);
        echo "<br>";

        echo "For";
        echo "<br>";
        for ($i=0; $i < 10; $i++){ 
            echo "The number is: $x <br>";
        }
        echo "<br>";
        echo "Foreach";
        echo "<br>";
        $colors = array ("red", "green", "Purple", "blue", "Yellow");
        foreach ($colors as $value) {
            echo "$value<br>";
        }
    
    ?>



</body>
</html>