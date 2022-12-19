<?php

$server="localhost";
$user="root";
$database="db_uts";
$password="";

$koneksi=mysqli_connect($server,$user,$password,$database);


if($koneksi){
echo "Koneksi Sukses";
}else{
echo "Koneksi gagal";
}
?>