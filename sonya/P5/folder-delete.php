<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Hapus folder</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
            $folder="sonya";
            $hapus = rmdir($folder);
            if($hapus){
                echo "Folder $folder berhasil dihapus";
            }else{
                echo "Folder $folder ygagal dihapus";
            }
        ?>
    </body>
</html>