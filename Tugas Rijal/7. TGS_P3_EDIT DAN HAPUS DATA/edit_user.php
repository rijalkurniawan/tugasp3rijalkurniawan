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

include("header.php");
	
?>
<h1><center> UPDATE USER</center></h1>
<br>
<form method="POST">
<table class="table table-bordered" border="1">

	<tr>
		<td>Nama User</td>
		<input type="hidden" name="id" value="<?php echo $data['id_user'];?>"/>
		<td><input type="text" name="nama" class="form-control" required value="<?php echo $data['nama'];?>"></td>
	</tr>
	<tr>
		<td>Nama Password</td>
		<td><input type="text" name="password" class="form-control" required value="<?php echo $data['password'];?>"></td>
	</tr>
	<tr>
		<td><input type="submit" name="save" class="btn btn-danger"></td>
	</tr>
</table>
</form>
<?php } ?>
<?php
include("footer.php");
