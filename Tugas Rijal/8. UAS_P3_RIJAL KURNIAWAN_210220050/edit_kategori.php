<?php
session_start();
include_once('koneksi.php');

$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

if(isset($_POST['save'])){
	$id=$_POST['id'];
	$nama=$_POST['nama_kategori'];

	$update=mysqli_query($koneksi,"UPDATE kategori SET nama_kategori='$nama' WHERE id_kategori='$id'");
	if($update){
		header("location:tampil_kategori.php");
	}else{
		echo mysqli_error();
	}
}
$id = $_GET['id'];

	$query_mysqli = mysqli_query($koneksi,"SELECT * FROM kategori WHERE id_kategori='$id'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){

include_once('navbar_edit_kategori.php');
?>
<?php } ?>

