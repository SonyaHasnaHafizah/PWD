<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Manipulasi file dan folder</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
            $file = "data1.txt";
            if(file_exists($file)){
                    echo "File $file sudah ada<br>";
            }else{
                echo "File $file belum ada<br>";
            }
        ?>
    </body>
</html>