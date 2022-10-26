<?php
$arrNilai = array("Eko"=>87,"Tono"=>90,"Sari"=>88);
echo "<b> Array sebelum di urutkan<b><br>";
echo"<pre>";
print_r($arrNilai);
echo"<\pre>";

ksort($arrNilai);//urut asc kecil ke besar
reset($arrNilai);
echo "<b> Array setelah di urutkan dengan ksort<b><br>";
echo"<pre>";
print_r($arrNilai);
echo"<\pre>";

krsort($arrNilai);//urut dsc besar ke kecil
reset($arrNilai);
echo "<b> Array setelah di urutkan dengan ksort<b><br>";
echo"<pre>";
print_r($arrNilai);
echo"<\pre>";

$no4=0;
$tota1=0;
foreach($arrNilai as $nama => $nilai){
    if($nilai>3)
        $no3++;
        $total +=$nilai;
        echo "$no3. $nama : $nilai <br>";
        $rata=$total/$no3;
    else
        $rata2=$total2/$no3; 
}
echo "Total = $no3<br>";
echo "Total = $no4<br>";
$rata=$total/$no3;
printf ("Rata diatas: %0.2f", $rata);
printf ("Rata dibawah: %0.2f", $rata);
?>