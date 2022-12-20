<?php
session_start();
include_once('koneksi.php');

$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

if(isset($_POST['save'])){
	$id=$_POST['id'];
	$nama=$_POST['nama'];
	$password=$_POST['password'];
	$level=$_POST['level'];
	$status=$_POST['status'];
	$update=mysqli_query($koneksi,"UPDATE user SET nama='$nama', level='$level',password='$password', status='$status' WHERE id_user='$id'");
	if($update){
		header("location:tampil_user.php");
	}else{
		echo mysqli_error();
	}
}
$id = $_GET['id'];

	$query_mysqli = mysqli_query($koneksi,"SELECT * FROM user WHERE id_user='$id'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){

include_once('navbar_edit_user.php');
?>
<?php } ?>