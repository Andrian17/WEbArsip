<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alfih | 1901050002</title>

    <!-- CSS -->
    <style>
    
    </style>
</head>
<body>
    <header>
        <nav>
            <p>Nama: Alfih Atqia Rinjani</p>
            <p>NIM: 1901050002</p>
        </nav>
    </header>
    <h1>Praktikum Kondisi dan Perulangan</h1>
    <main style="display: flex;">
        <article style="width: 50%;">
            <h2>Kondisi</h2>

            <ol>
                <li>
                    <h3>if</h3>
                    <?php
                        if(date('H') < 20) // menjalankan perintah diawahnya jika bernilai true
                            echo '<p> ini kondisi true di (date("H") < 20 ) atau saat ini belum jam 20</p>';                
                    ?>
                </li>
                <li>
                    <h3>if...else</h3>
                    <?php 
                        if(date('H') < 20) // jika true akan menjalankan perintah dibawahnya
                            echo '<p> Have a good day </p>';
                        else // jika di kondisi if bernilai false maka akan menjalankan else statement
                            echo '<p> Have a good night </p>';
                    ?>
                </li>
                <li>
                    <h3>if...elsif...else</h3>
                    <?php 
                        if(date('H') < 10) // jika true menjalankan perintah dibawahnya
                            echo '<p> Have a good morning </p>';
                        elseif(date('H') < 20) // jika kondisi if bernilai false maka akan mengecek kondisi elseif, jika true menjalankan perintah dibwahnya
                            echo '<p> Have a good day </p>';
                        else // dijalankan jika elseif bernilai false
                            echo '<p> Have a good night </p>';

                    ?>
                </li>
                <li>
                    <h3>Switch</h3>
                    <?php 
                        $color = 'red';
                        switch($color){ // mengecek nilai $color;
                            case 'red': // jika $color bernilai "red"
                                echo '<p> Selected color is "red" </p>';
                                break;
                            case 'blue': // jika $color bernilai "red"
                                echo '<p> Selected color is "blue" </p>';
                                break;
                            default: // jika $color tidak bernilai "red" atau "blue"
                                echo '<p> no selected color </p>';
                                
                        }

                    ?>
                </li>
            </ol>
        </article>
        <article>
            <h2>Perulangan</h2>
            <ol>
                <li>
                    <h2>While</h2>
                    <?php
                        $x = 1;
                        while($x <= 2){ // mengecek kondisi dulu sebelum menjalankan statement
                            echo "<p> Angka " . $x . '</p>'; 
                            $x++;
                        }
                    ?>
                </li>
                <li>
                    <h2>Do...While</h2>
                    <?php
                        $x = 1;
                        do{ // menjalankan statement dulu baru cek kondisi
                            echo "<p> Angka " . $x . "</p>";
                            $x++;
                        }while($x < 3);
                    ?>
                </li>
                <li>
                    <h2>For</h2>
                    <?php 
                        for ($i=1; $i <= 2 ; $i++) {  // menginisiasi variable $i; mengevek kondisi, dan menjalankan statement jika true, kemudia melakukan iterasi, jika kondisi false maka langsung berhenti
                            echo "<p> Angka " . $i . "</p>";
                        }
                    ?>
                </li>
                <li>
                    <h2>Foreach</h2>
                    <?php
                        $colors = array("red", "blue");
                        // melakukan perulangan terhadap semua isi dari object atau array
                        foreach($colors as $color){
                            echo "<p> Warna " . $color . "</p>";
                        }
                    ?>
                </li>
            </ol>
        </article>
    </main>
</body>
</html>