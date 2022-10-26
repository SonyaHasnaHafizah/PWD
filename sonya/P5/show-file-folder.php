<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Menampilkan isi folder</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php
            $folder = "sonya";
            if($handle = opendir($folder)){
                while(false !=($file = readdir($handle))){
                    if($file != "." && $file != ".."){
                    echo "$file<br>";
                }
            }
            closedir($handle);
        }
        ?>
    </body>
</html>