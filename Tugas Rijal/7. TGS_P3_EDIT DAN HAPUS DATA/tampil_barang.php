<?php
session_start();
include_once('koneksi.php');


$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

if (isset($_POST['cari'])){
	$no = 1;
	$data = mysqli_query($koneksi,"select * from barang INNER JOIN kategori ON barang.id_kategori = kategori.id_kategori INNER JOIN satuan ON barang.id_satuan = satuan.id_satuan where nama_barang like '%".$_POST['rijalkurniawan']."%'");
	}else{
	$no = 1;
		$sql_brg = "SELECT * FROM barang INNER JOIN kategori ON barang.id_kategori = kategori.id_kategori INNER JOIN satuan ON barang.id_satuan = satuan.id_satuan";
		$data = mysqli_query($koneksi, $sql_brg) or die (mysqli_error($koneksi));
	}
include_once('navbar_tampil_barang.php');
?>
