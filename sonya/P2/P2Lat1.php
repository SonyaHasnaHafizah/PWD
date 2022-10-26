<?php


$ipk=4.00;
$status_kategori="";

if(($ipk >=3.51) && ($ipk <=4.00)){
    $status_kategori="Dengan Pujian";
}else if(($ipk>=2.76) && ($ipk<=3.50)){
    $status_kategori="Sangat Memuaskan";
}else{
    $status_kategori="Memuaskan";
}
echo"IPK : $ipk, Kategori : $status_kategori";



?>
