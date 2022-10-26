<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Baca Isi sebuah file</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
            $nama_file = "data3.txt";
            $handle = fopen($nama_file,"r");
            if(!$handle){
                echo "<b>File tidak ditemukan </b>";
            }else{
                $isi = fgets($handle);
                $isi2 = fread($handle,4);
                echo "Isi dari file $nama_file : $isi<br>";
                echo "Isi ke 2 dari file $nama_file : $isi2";
            }

            fclose($handle);
        ?>
    </body>
</html>