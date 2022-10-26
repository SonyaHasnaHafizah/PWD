<?php
/*
IP Mahasiswa
1. Dani = 3.5
2. Sari = 3.2
3. Tari = 3.0
4. Andre = 2.75
*/

echo "<b>IP MAHASISWA<br></b>";
$no=0;
$arrNilai = array("Dani"=>2.77,"Sari"=>3.22,"Tari"=>3.11,"Andre"=>2.75);
foreach($arrNilai as $nama => $nilai){
    $no++;
    echo "$no. $nama : $nilai <br>";
}

echo "\n<b>IP MAHASISWA DIATAS 3.1</b><br>";
reset($arrNilai);
$no2=0;
foreach($arrNilai as $nama => $nilai){
    if($nilai<3)
    continue;
    $no2++;
    echo "$no2. $nama : $nilai <br>";     
}

echo "\n<b>URUTAN IP DIATAS 3 DAN DIBAWAH 3</b><br>";
arsort($arrNilai);
reset($arrNilai);
$no3=0;
$total=0;
foreach($arrNilai as $nama => $nilai){
    $no3++;
    $total=$total+$nilai;
    echo "$no3. $nama : $nilai <br>";
    if($nilai<3)
    $rata=$total/$no3;
    
}

//tugas laporan

$total=0;
$no4=0;
$no5=0;
$total1=0;
foreach($arrNilai as $nama => $nilai){
        if($nilai>=3){
            $no4++;
            $total += $nilai;
            
        }else if($nilai<3) {
            $no5++;
            $total1 = $total1+$nilai;
        }
    }

    
echo "--------------------------------<br>";
echo "Total IP diatas 3 = $no4<br>";
echo "Total IP dibawah 3 = $no5<br>";
$rata=$total/$no4;
$rata1=$total1/$no5;
printf ("Rata IP diatas 3 = %.2f <br>", $rata);
printf ("Rata IP dibawah 3 = %.2f", $rata1);



?>