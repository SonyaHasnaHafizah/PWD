<?php
$arrWarna = array("Merah","Hijau","Biru");

echo count($arrWarna)."<br>";//3   index sampai 2
 //Cara 1
for($i = 0; $i < count($arrWarna); $i++){
    echo "Warna ".$arrWarna[$i]."<br>";
}

//Cara 2
foreach($arrWarna as $warna){
    echo "Warna $warna <br>";
}

?>