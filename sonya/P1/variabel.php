<?php
$nim = "2101092021";
$nama = "Sonya Hasna Hafizah";
$umur = 19;
$nilai = 3.75;
$status = true;

echo "Nim : ".$nim."<br>";
echo "Nama : ".$nama."<br>";
print "Umur : ".$umur."<br>";
printf("Nilai : %.2f<br>",$nilai);
echo "Status : ".$status."<br>";

if($status){
    echo "True";
}else{
    echo "False";
}
?>
