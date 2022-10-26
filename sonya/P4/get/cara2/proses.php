<?php
if(isset($_GET['proses'])){
    $nama = $_GET['nama'];
    $nobp = $_GET['nobp'];
    echo "Nama : $nama <br>";
    echo "NobP : $nobp <br>";
    echo "<a href='index.php'>HOME</a>";
}
?>