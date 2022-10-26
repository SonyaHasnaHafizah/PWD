<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mengakses sebuah file</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php   
            $namafile="data.txt";
            //fopen(namafile,mode);
            $handle = fopen($namafile,"r");
            if(!$handle){
                echo "<b>File tidak bisa dibuka atau belum ada</b>";
            }else{
                echo "<b>File berhasil dibuka</b>";
            }
            fclose($handle);
        ?>
    </body>
</html>