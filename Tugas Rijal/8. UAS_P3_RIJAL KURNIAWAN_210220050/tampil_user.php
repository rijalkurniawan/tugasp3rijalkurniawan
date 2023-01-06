<?php
session_start();
include_once('koneksi.php');


$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

if (isset($_POST['cari'])){
	$no = 1;
	$data = mysqli_query($koneksi,"select * from user where nama like '%".$_POST['rijalkurniawan']."%'");
	}else{
	$no = 1;
	$data = mysqli_query($koneksi,"select * from user");
	}
include_once('navbar_tampil_user.php');
?>