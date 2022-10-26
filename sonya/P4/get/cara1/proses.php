<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sonya Hasna Hafizah</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
<body>
    <form action="" method="get">
        Nama: <input type="text" name="nama"><br>
        <input type="submit" value="Proses" name="proses">

    </form>
</body>
</html>
<?php
if(isset($_GET['proses'])){
    $nama = $_GET['nama'];
    echo "Nama : $nama <br>";
}
?>