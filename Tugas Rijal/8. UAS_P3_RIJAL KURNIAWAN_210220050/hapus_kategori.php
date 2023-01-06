<?php
session_start();
include_once('koneksi.php');

$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];
$id = $_GET['id'];
$query_delete = mysqli_query($koneksi,"DELETE FROM kategori WHERE id_kategori='$id'")or die(mysqli_error());
if($query_delete){
	header('location:tampil_kategori.php');
}else{
	echo mysqli_error();
}
