<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Rename File</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php
        $file = "data1.txt";
        $rename_file = "rename-data1.txt";
        if(rename($file, $rename_file)){
            echo "File $file berhasil di rename : $rename_file";
        }else{
            echo " File $file gagal direname";
        }
    ?>
    </body>
</html>