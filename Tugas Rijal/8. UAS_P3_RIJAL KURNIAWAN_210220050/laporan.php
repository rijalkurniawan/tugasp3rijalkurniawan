<?php
session_start();
include_once('koneksi.php');


$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

if (isset($_POST['cari'])){
	$no = 1;
	$data = mysqli_query($koneksi,"SELECT * FROM transaksi INNER JOIN barang ON transaksi.id_barang = barang.id_barang INNER JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan
		INNER JOIN kategori ON barang.id_kategori = kategori.id_kategori where nama_pelanggan like '%".$_POST['rijalkurniawan']."%'");
	}else{
	$no = 1;
	$sql_brg = ("SELECT * FROM transaksi INNER JOIN barang ON transaksi.id_barang = barang.id_barang INNER JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan
		INNER JOIN kategori ON barang.id_kategori = kategori.id_kategori"); 
	$data = mysqli_query($koneksi, $sql_brg) or die (mysqli_error($koneksi));
	}
	include_once('navbar_laporan.php');
?>