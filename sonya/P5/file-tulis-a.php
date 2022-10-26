<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Menulis sebuah file</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
            $nama_file = "data4.txt";
            $handle = fopen($nama_file,"a");
            if(!$handle){
                echo "<b>File tidak ditemukan</b>";
            }else{
                fwrite($handle,"Prodi : Teknik Komputer\n");
                echo "File $nama_file berhasil ditemukan";
            }
            fclose($handle);
        ?>
    </body>
</html>