<?php
session_start();
include_once('koneksi.php');

$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into kategori(nama_kategori)
values(
'".$_POST['nama_kategori']."')");

if($query_input){
header('location:tampil_kategori.php');
}else{
	echo mysqli_error();
}
}
include_once('navbar_input_kategori.php');
?>