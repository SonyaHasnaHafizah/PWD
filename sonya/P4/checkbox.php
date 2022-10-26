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
            Hobby : <br>
            <input type="checkbox" name="musik" value="Musik">Musik<br>
            <input type="checkbox" name="baca" value="Membaca">Membaca<br>
            <input type="checkbox" name="renang" value="Berenang">Berenang<br>
            <input type="submit" value="Proses" name="proses">
        </form>
    </body>
</html>
<?php
extract($_POST);
if(isset($proses)){
    echo "Nama : $nama<br>";
    echo "NoBp : $nobp<br>";
    $hobby= "";
    if(isset($musik)){
        $hobby.="+ $musik <br>";
    }

    if(isset($baca)){
        $hobby.="+ $baca <br>";
    }

    if(isset($renang)){
        $hobby.="+ $renang <br>";
    }

    echo "Hobby : <br> $hobby";
}
?>