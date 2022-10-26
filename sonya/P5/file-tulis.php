<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
            $nama_file = "data3.txt";
            $handle = fopen($nama_file,"r+");
            if(!$handle){
                echo "<b>file </b>";
            }else{
                fwrite($handle, "Nama : Sonya Hasna Hafizah\n");
                fputs($handle, "NoBp : 2101092021");
                echo "File $nama_file Berhasil di Tulis";
            }
            fclose($handle);
        ?>
    </body>
</html>