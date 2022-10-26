<?php

echo "Cara Pertama <br>";
for($i = 1; $i<=10;$i++){
    echo "Nilai Ke : $i"."<br>";
}

echo "Cara Ke dua <br>";
 for($i=1; ;$i++){
    if($i>10){
        break;
    }
    echo "Nilai Ke : $i<br>";
 }

 echo "Cara Ke Tiga <br>";
 $i=1;
 for(;;){
    if($i>10){
        break;
    }
    echo"Nilai ke : $i<br>";
    $i++;
 }
?>