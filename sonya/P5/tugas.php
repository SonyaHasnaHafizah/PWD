<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <h3>Upload Gambar</h3>
    <form action="" method="post" enctype="munltipart/form-data">
        Gambar : <input type="file" name="gambar" id=""><br>
        <input type="submit" value="Upload" name="upload">
    </form>
</body>
</html>
<?php
extract($_POST);
if (isset($upload)) {
    $folder = "images/";
    $nama_file = $_FILES['gambar']['name'];
    $temp_file = $_FILES['gambar']['tmp_name'];
    if (is_uploaded_file($temp_file)){
        $cek = move_uploaded_file($temp_file, $folder . $nama_file);
        if ($cek){
           echo "File $nama_file berhasil diupload";
        } else {
           echo "File gagal di upload";
        }
    }
    $i = 1;
    while($i <= 10){

        echo "<html>
        <table border='1'>
            <tr>
                <td align='center'>No</td>
                <td align='center'>Gambar</td>
                <td align='center'>Hapus</td>
            </tr>
            <tr>
                <td align='center'>$i</td>
                <td align='center'>$nama_file</td>
                <td align='center'><input type='button' value='Hapus' name='hapus'></td>
            </tr>
        </table>
    </html>";

    $i++;
    }
    
}
?>