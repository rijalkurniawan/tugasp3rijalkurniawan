<?php
session_start();
include_once('koneksi.php');

$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into transaksi(nama_transaksi,tgl_transaksi,harga,qty,id_barang,diskon_member,diskon_barang,id_member)
values(
'".$_POST['nama_transaksi']."',
'".$_POST['tgl_transaksi']."',
'".$_POST['harga']."',
'".$_POST['qty']."',
'".$_POST['id_barang']."',
'".$_POST['diskon_member']."',
'".$_POST['diskon_barang']."',
'".$_POST['id_member']."')");

if($query_input){
header('location:tampil_transaksi.php');
}else{
	echo mysqli_error();
}
}
include_once('navbar_input_transaksi.php');
?>