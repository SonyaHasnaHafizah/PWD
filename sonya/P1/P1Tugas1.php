<?php
$web=85;
$mobile=87;
$gis=88;

$rata=($web+$mobile+$gis)/3;

if($rata>70){
    $nilai= "Lulus";
}else{
    $nilai= "Tidak Lulus";
}

echo "List Matakuliah :"."<br>";
echo "1. P.web dinamis = 85"."<br>";
echo "2. P. mobile = 87"."<br>";
echo "3. P. GIS = 88"."<br>"."<br>";
printf("Nilai rata : %.2f<br>",$rata);
echo "Nilai Status : ".$nilai;
?>
    