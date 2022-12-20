<?php
session_start();
include_once('koneksi.php');

$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

if(isset($_POST['save'])){
	$id=$_POST['id'];
	$nama=$_POST['nama_member'];
	$level=$_POST['level'];

	$update=mysqli_query($koneksi,"UPDATE member SET nama_member='$nama', level='$level' WHERE id_member='$id'");
	if($update){
		header("location:tampil_member.php");
	}else{
		echo mysqli_error();
	}
}
$id = $_GET['id'];
$query_mysqli = mysqli_query($koneksi,"SELECT * FROM member WHERE id_member='$id'")or die(mysqli_error());
$nomor = 1;
while($data = mysqli_fetch_array($query_mysqli)){

include_once('navbar_edit_member.php');
?>
<?php } ?>