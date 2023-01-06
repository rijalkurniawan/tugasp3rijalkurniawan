<?php
session_start();
include_once('koneksi.php');

$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into pelanggan(nama_pelanggan,no_tlp,status)
values(
'".$_POST['nama_pelanggan']."',
'".$_POST['no_tlp']."',
'".$_POST['status']."')");

if($query_input){
header('location:tampil_pelanggan.php');
}else{
	echo mysqli_error();
}
}
include_once('navbar_input_pelanggan.php');
?>