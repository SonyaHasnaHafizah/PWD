<?php
$arrNilai = array("Eko"=>90,"Dani"=>79,"Budi"=>60);
echo "<b>Array Sebelum di urutkan</b><br>";
echo"<pre>";
print_r($arrNilai);
echo"<\pre>";

sort($arrNilai);//urut value dari asc, dg mengubah struktur asc
reset($arrNilai);
echo "<b>\nArray Setelah di urutkan dengan sort</b><br>";
echo"<pre>";
print_r($arrNilai);
echo"<\pre>";

rsort($arrNilai);//urut value dari dsc dg mengubah struktur asc
reset($arrNilai);
echo "<b>\nArray Setelah di urutkan dengan rsort</b><br>";
echo"<pre>";
print_r($arrNilai);
echo"<\pre>";

asort($arrNilai);//urut value dari asc, index dsc
reset($arrNilai);
echo "<b>\nArray Setelah di urutkan dengan asort</b><br>";
echo"<pre>";
print_r($arrNilai);
echo"<\pre>";

arsort($arrNilai);//urut value dari dsc, index asc
reset($arrNilai);
echo "<b>\nArray Setelah di urutkan dengan arsort</b><br>";
echo"<pre>";
print_r($arrNilai);
echo"<\pre>";



?>