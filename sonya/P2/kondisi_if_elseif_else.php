<?php
$harga_barang=50000;
$status_kategori="";

if(($harga_barang>100000) && ($harga_barang<200000)){
    $status_kategori="Barang Mahal";
}else if(($harga_barang>50000) && ($harga_barang<=100000)){
    $status_kategori="Barang Sedang";
}else{
    $status_kategori="Barang Murah";
}

echo"Harga Barang : $harga_barang, Kategori : $status_kategori";



?>