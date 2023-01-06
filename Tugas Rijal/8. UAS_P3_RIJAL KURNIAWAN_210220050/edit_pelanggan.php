<?php
session_start();
include_once('koneksi.php');

$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

if(isset($_POST['save'])){
	$id=$_POST['id'];
	$nama=$_POST['nama_pelanggan'];
	$no_tlp=$_POST['no_tlp'];
	$status=$_POST['status'];

	$update=mysqli_query($koneksi,"UPDATE pelanggan SET nama_pelanggan='$nama', no_tlp='$no_tlp', status='$status' WHERE id_pelanggan='$id'");
	if($update){
		header("location:tampil_pelanggan.php");
	}else{
		echo mysqli_error();
	}
}
$id = $_GET['id'];
$query_mysqli = mysqli_query($koneksi,"SELECT * FROM pelanggan WHERE id_pelanggan='$id'")or die(mysqli_error());
$nomor = 1;
while($data = mysqli_fetch_array($query_mysqli)){

include_once('navbar_edit_pelanggan.php');
?>
<?php } ?>