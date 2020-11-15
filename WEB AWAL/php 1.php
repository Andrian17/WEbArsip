<html>
<head>
	<title>
		Baiq Sri Dewi Lestari
	</title>
</head>
<body>

	<?php 
		
		echo "<h1> Selamat datang di Website ini </h1>";
        define("GREETING", "If Statement");
        echo GREETING, "<br>";
        $t=date("H");
        if($t < "20"){
            echo "Have a good day";
        }
		echo "<br>";
	?>

    <?php

        define("GREETING", "If... Else Statement");
        echo GREETING, "<br>";
        $a=date("H");
        if($a < "20"){
            echo "Have a good day";
        }else{
            echo "Have a good Night";
        }
        echo "<br>";
        
    ?>

    <?php

        define("GREETING", "If..ElseIf.. Else Statement");
        echo GREETING, "<br>";
        $a=date("H");
        if($a < "10"){
            echo "Have a good Morning";
        }elseif ($a < "20") {
            echo "Have a good day";
        }else{
            echo "Have a good Night";
        }
        echo "<br>";
        
    ?>

    <?php
        define("GREETING", "Switch Statement");
        echo GREETING, "<br>";
        $favcolor="red";
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
    ?>

    <?php
    
        define("GREETING", "Perulangan");
        echo GREETING, "<br>";
        echo "While";
        $x = 1;
        while ($a <= 10) {
            echo "The number is: $x <br>";
            $x++;
        }
        echo "<br>";

        echo "DO.. While";
        do {
            echo "The number is: $x <br>";
            $x++;
        } while ($a <= 5);
        echo "<br>";

        echo "For";
        for ($i=0;10 $i < 10; $i++)10 { 
            echo "The number is: $x <br>";
        }
        echo "<br>";
        $colors = array ["red", "green", "Purple", "blue", "Yellow"];
        foreach ($colors as $value) {
            echo "<br>";
        }
    
    ?>



</body>
</html>