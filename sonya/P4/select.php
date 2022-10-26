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
            Jurusan : <br> 
                <select name="jurusan" id="">
                    <option value="TI">TI</option>
                    <option value="AN">AN</option>
                    <option value="MESIN">MESIN</option>
                    <option value="SIPIL">SIPIL</option>
                </select>

                <input type="submit" value="Proses" name="proses">
        </form>
    </body>
</html>

<?php
    extract($_POST);
    if(isset($proses)){
        echo "Jurusan : $jurusan";
    }
?>