<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Combo Box, Drop Down</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form action="" method="post">
            Alamat : <textarea name="alamat" cols="30" rows="10"></textarea>
            <input type="submit" value="Proses" name="proses">
        </form>
    </body>
</html>

<?php
    extract($_POST);
    if(isset($proses)){
        echo "Alamat : $alamat";
    }
?>