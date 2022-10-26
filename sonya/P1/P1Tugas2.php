<?php
$web=85;
$mobile=87;
$gis=88;

$rata=($web+$mobile+$gis)/3;

if($rata>=85 && $rata<=100){
    $nilai= "A";
}else if($rata>=85 && $rata<=100){
    $nilai="B";
}else if($rata>=70 && $rata<=84){
    $nilai="B-";
}else if($rata>=60 && $rata<=69){
    $nilai="B";
}else if($rata>=30 && $rata<=59){
    $nilai="C+";
}else {
    $nilai="E";
}

echo "List Matakuliah :"."<br>";
echo " 1. P.web dinamis = 85"."<br>";
echo "P. mobile = 87"."<br>";
echo "P. GIS = 88"."<br>";
//echo "Nilai rata-rata = %.2f",.$rata;
printf("Nilai rata : %.2f<br>",$rata);
echo "Nilai Status : ".$nilai;
?>
    