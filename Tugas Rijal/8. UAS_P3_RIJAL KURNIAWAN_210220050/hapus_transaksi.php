<?php
session_start();
include_once('koneksi.php');

$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];
$id = $_GET['id'];
$query_delete = mysqli_query($koneksi,"DELETE FROM transaksi WHERE id_transaksi='$id'")or die(mysqli_error());
if($query_delete){
	header('location:tampil_transaksi.php');
}else{
	echo mysqli_error();
}
