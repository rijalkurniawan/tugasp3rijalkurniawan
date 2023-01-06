<?php
session_start();
include_once('koneksi.php');

$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

if(isset($_POST['save'])){
	$id=$_POST['id'];
	$nama=$_POST['nama_satuan'];

	$update=mysqli_query($koneksi,"UPDATE satuan SET nama_satuan='$nama' WHERE id_satuan='$id'");
	if($update){
		header("location:tampil_satuan.php");
	}else{
		echo mysqli_error();
	}
}
$id = $_GET['id'];
$query_mysqli = mysqli_query($koneksi,"SELECT * FROM satuan WHERE id_satuan='$id'")or die(mysqli_error());
$nomor = 1;
while($data = mysqli_fetch_array($query_mysqli)){

include_once('navbar_edit_satuan.php');
?>
<?php } ?>
