<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Menulis sebuah file</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form action="" method="post">
            Nama: <input type="text" name="nama"><br>
            NoBp: <input type="text" name="nobp"><br>
            Jurusan : <br>
            <select name="jurusan" id="">
            <?php
                $arrayJurusan=array('TI'=> "TI",'AN' => "AN",'MESIN' => "MESIN", 'SIPIL' => "SIPIL");
               
                    foreach($arrayJurusan as $key => $value){
                        echo "<option value='$key'>$key</option>";
                    }   
            ?>
            </select>
            <br>Prodi : <br>
            <select name="prodi" id="">
            <?php
                $arrayProdi=array('TK'=> "TK",'MI' => "MI",'TRPL' => "TRPL", 'SI' => "SI");
               
                    foreach($arrayProdi as $key => $value){
                        echo "<option value='$key'>$key</option>";
                    }   
            ?>
             </select>
             <br>Jenis Kelamin : <br>
            <?php
                $arrayJekel=array('Laki-laki'=> "Laki-laki",'Wanita' => "Wanita");
                foreach($arrayJekel as $key => $value){
                    echo "<input type='radio' name='jekel' value='$key' >$value<br>";
                }
            ?>
            <br><input type="submit" value="Simpan" name="simpan">  
        </form>
    </body>   
</html>
<?php
extract($_POST);
if(isset($simpan)){
            $nama_file = "sonya.txt";
            $handle = fopen($nama_file,"a");
            if(!$handle){
                echo "<b>File tidak ditemukan</b>";
            }else{
                fwrite($handle,"$nobp|$nama|$jurusan|$prodi|$jekel\n");
                echo "Data berhasil ditemukan<br>";

                $no=0;
                $handle2 = fopen($nama_file,"r");
                //echo "$nobp|$nama|$jurusan|$prodi<br>";
                while($isifull = fgets($handle2)){
                    $no++;
                    echo "$no. $isifull <br>"; 
                  
                }
                fclose($handle2);
            }
            fclose($handle);

}
?>
