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
            Email: <input type="text" name="email"><br>
            Nama: <input type="text" name="nama"><br>
            Password: <input type="text" name="password"><br>
            Jurusan : <br>
            <select name="jurusan" id="">
            <?php
                $arrayJurusan=array('TI'=> "TI",'AN' => "AN",'MESIN' => "MESIN", 'SIPIL' => "SIPIL");
               
                    foreach($arrayJurusan as $key => $value){
                        echo "<option value='$key'>$key</option>";
                    }   
            ?>
             </select>
            <br>Agama : <br>
            <?php
                $arrayAgama=array("Islam","Kristen","Hindu","Buddha");
                foreach($arrayAgama as $key){
                    echo "<input type='radio' name='agama' value='$key' >$key<br>";
                }
            ?>
           
            Alamat : <textarea name="alamat" cols="30" rows="10"></textarea>

            <br>
            <input type="submit" value="Proses" name="proses">
            
        </form>
    </body>
</html>
<?php
extract($_POST);
if(isset($proses)){
    echo "Email : $email<br>";
    echo "Nama : $nama<br>";
    echo "Password : $password<br>";
    echo "Jurusan : $jurusan<br>";
    echo "Agama : $agama<br>";
    echo "Alamat : $alamat<br>";
}
?>