<?php 
$server = "locashost";
$username="root";
$password="";
$db ="dbmhs";
//host,user,ps,nama db
//mysqli_connect('localhost','root','','dbmhs');

mysqli_connect($server,$username,$password,$db);

if($conn){
    echo "Database Terkoneksi";
}

?>