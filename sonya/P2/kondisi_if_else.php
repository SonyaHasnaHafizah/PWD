<?php
$harga_barang=150000;
$status_kategori="";

if(($harga_barang>100000) && ($harga_barang<200000)){
    $status_kategori="Barang Mahal";
}else{
    $status_kategori="Barang Murah";
}

echo"Harga Barang : $harga_barang, Kategori : $status_kategori";
?>