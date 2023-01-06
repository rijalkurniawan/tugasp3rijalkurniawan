<?php
session_start();
include_once('koneksi.php');

$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into barang(nama_barang,id_kategori,id_satuan)
values(
'".$_POST['nama_barang']."',
'".$_POST['id_kategori']."',
'".$_POST['id_satuan']."')");

if($query_input){
header('location:tampil_barang.php');
}else{
	echo mysqli_error();
}
}
include_once('navbar_input_barang.php'); 
?>

