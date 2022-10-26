<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sonya Hasna Hafizah</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form action="" method="post">
            Jenis Kelamin : <br>
            <input type="radio" name="jekel" value="Laki-laki" checked>Laki-laki<br>
            <input type="radio" name="jekel" value="Wanita">Wanita<br>
            <input type="submit" value="Proses" name="proses"><br>
        </form>
    </body>
</html>
<?php
extract($_POST);
if(isset($proses)){
    echo " Jenis Kelamin : $jekel";
}
?>