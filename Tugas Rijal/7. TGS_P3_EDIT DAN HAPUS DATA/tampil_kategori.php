<?php
session_start();
include_once('koneksi.php');


$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

	if (isset($_POST['cari'])){
	$no = 1;
	$data = mysqli_query($koneksi,"select * from kategori where nama_kategori like '%".$_POST['rijalkurniawan']."%'");//where like
	}else{
	$no = 1;
	$data = mysqli_query($koneksi,"select * from kategori");
	}
include_once('navbar_tampil_kategori.php');	
?>