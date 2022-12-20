<?php
session_start();
include_once('koneksi.php');

$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

if(isset($_POST['save'])){
	$id=$_POST['id'];
	$nama=$_POST['nama_barang'];
	$id_kategori=$_POST['id_kategori'];
	$id_satuan=$_POST['id_satuan'];

	$update=mysqli_query($koneksi,"UPDATE barang SET nama_barang='$nama', id_kategori='$id_kategori', id_satuan='$id_satuan' WHERE id_barang='$id'");
	if($update){
		header("location:tampil_barang.php");
	}else{
		echo mysqli_error();
	}
}
$id = $_GET['id'];

	$query_mysqli = mysqli_query($koneksi,"SELECT * FROM barang WHERE id_barang='$id'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){
		
include_once('navbar_edit_barang.php');
?>
<?php } ?>