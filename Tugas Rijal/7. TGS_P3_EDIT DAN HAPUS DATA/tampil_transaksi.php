<?php
session_start();
include_once('koneksi.php');


$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

if (isset($_POST['cari'])){
	$no = 1;
	$data = mysqli_query($koneksi,"SELECT * FROM transaksi INNER JOIN barang ON transaksi.id_barang = barang.id_barang INNER JOIN member ON transaksi.id_member = member.id_member where nama_barang like '%".$_POST['rijalkurniawan']."%'");
	}else{
	$no = 1;
	$sql_brg = "SELECT * FROM transaksi INNER JOIN barang ON transaksi.id_barang = barang.id_barang INNER JOIN member ON transaksi.id_member = member.id_member";
	$data = mysqli_query($koneksi, $sql_brg) or die (mysqli_error($koneksi));
	}
include_once('navbar_tampil_transaksi.php');
?>