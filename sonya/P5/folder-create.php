<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Menambahkan folder</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
            $folder = "sonya";
            $cek = mkdir($folder);
            if($cek){
                echo "Folder berhasil ditambahkan";
            }else{
                echo "Folder gagal ditambahkan";
            }
        ?>
    </body>
</html>