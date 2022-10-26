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
        Nama: <input type="text" name="nama"><br>
        NoBp: <input type="text" name="nobp"><br>
        <input type="submit" value="Proses" name="proses">

    </form>
</body>
</html>
<?php
if(isset($_POST['proses'])){//menampung data, check data ada pada proses
    $nama = $_POST['nama'];
    $nobp = $_POST['nobp'];
    echo "Nama : $nama <br>";
    echo "NoBp : $nobp";
}
?>