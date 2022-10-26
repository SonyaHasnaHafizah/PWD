<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Hapus File</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php
        $file = "data.txt";
        if(unlink($file)){
            echo "File $file berhasil dihapus";
        }else{
            echo " File $file gagal dihapus";
        }
    ?>
    </body>
</html>