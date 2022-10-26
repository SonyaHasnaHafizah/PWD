<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Copy File</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
            $file = "data1.txt";
            $file_copy = "copy-data1.txt";
            if(copy($file, $file_copy)){
                echo "File $file berhasil di copy : $file_copy";
            }else{
                echo " File $file gagal dicopy";
            }
        ?>
    </body>
</html>