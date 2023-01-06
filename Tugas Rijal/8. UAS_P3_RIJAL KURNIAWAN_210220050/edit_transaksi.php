<?php
session_start();
include_once('koneksi.php');

$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

if(isset($_POST['save'])){
	$id=$_POST['id'];
	$nama=$_POST['nama_transaksi'];
	$tgl_transaksi=$_POST['tgl_transaksi'];
	$harga=$_POST['harga'];
	$qty=$_POST['qty'];
	$id_barang=$_POST['id_barang'];
	$diskon=$_POST['diskon'];
	$id_pelanggan=$_POST['id_pelanggan'];

	$update=mysqli_query($koneksi,"UPDATE transaksi SET nama_transaksi='$nama', tgl_transaksi='$tgl_transaksi', harga='$harga', qty='$qty', id_barang='$id_barang',  
	diskon='$diskon', id_pelanggan='$id_pelanggan' WHERE id_transaksi='$id'");
	if($update){
		header("location:tampil_transaksi.php");
	}else{
		echo mysqli_error();
	}
}
$id = $_GET['id'];

	$query_mysqli = mysqli_query($koneksi,"SELECT * FROM transaksi WHERE id_transaksi='$id'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){

include_once('navbar_edit_transaksi.php');
?>
<?php } ?>