<!DOCTYPE html>
<html lang="en">
    <head>
        <title>UPLOAD  fILE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            Upload Gambar : <input type="file" name="gambar" id=""><br>
            <<input type="submit" name="Upload" value="upload">
        </form>
    </body>
</html>
<?php
    extract($_POST);
    if(isset($upload)){
        $folder = "images/";
        $nama_file = $_FILES['gambar']['name'];
        $temp_file = $_FILES['gambar']['tmp_name'];
        if(is_uploaded_file($temp_file)){
            $cek = move_uploaded_file($temp_file,$folder . $nama_file);
            if($cek){
                echo "File $nama_file berhasil diupload";
            }else{
                "File $nama_file gagal diupload";
            }
        }
    }
?>