<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Baca isi seluruh file</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
            $nama_file = "data3.txt";
            $handle = fopen ($nama_file, "r");
            if(!$handle){
                echo "<b>File tidak ditemukan</b>";
            }else{
                echo "<b>Isi file $nama_file</b><br>";
                while($isi = fgets($handle)){
                    echo "$isi <br>";
                }
            }
            fclose($handle);
        ?>
    </body>
</html>