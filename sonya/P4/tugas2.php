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
            Jenis Kelamin : <br>
            <?php
                $arrayJekel=array('Laki-laki'=> "Laki-laki",'Wanita' => "Wanita");
                foreach($arrayJekel as $key => $value){
                    echo "<input type='radio' name='jekel' value='$key' >$value<br>";
                }
            ?>
            Hobby : <br>
            <?php
                $arrayHobby=array('musik'=> "Musik",'baca' => "Membaca",'renang' => "Berenang");
                foreach($arrayHobby as $key => $value){
                    echo "<input type='checkbox' name='$key' value='$value' >$value<br>";
                }
            ?>
            
            <input type="submit" value="Proses" name="proses">
            
        </form>
    </body>
</html>
<?php
extract($_POST);
if(isset($proses)){
    echo "Nama : $nama<br>";
    echo "NoBp : $nobp<br>";
    
    echo " Jenis Kelamin : $jekel";

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

    echo "<br>Hobby : <br> $hobby";
}
?>