<?php
$pilih="Mangga";
$status_pilih="";

switch($pilih){
    case 'Apple' :
        $status_pilih = "Buah yang dipilih Apple";
        break;
    case 'Mangga' :
        $status_pilih="Buah yang dipilih Mangga";
        break;
    default:
        $status_pilih="Tidak ada yang di pilih dalam list buah";
        break;
}

echo $status_pilih;
?>