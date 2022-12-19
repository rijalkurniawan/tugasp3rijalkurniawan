<?php
session_start();
include_once('koneksi.php');

$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into user(nama,password)
values(
'".$_POST['nama']."',
'".$_POST['password']."')");

if($query_input){
header('location:tampil_user.php');
}else{
	echo mysqli_error();
}
}
include("header.php");
?>
<form method="POST">
<h1><center>INPUT USER</center></h1>
<br>
<table class="table table-bordered" border="1">
	<tr>
		<td>Nama User</td>
		<td><input type="text" name="nama" class="form-control"></td>
	</tr>
	<tr>
		<td>Nama Password</td>
		<td><input type="text" name="password" class="form-control"></td>
	</tr>
	<tr>
		<td><input type="submit" name="save" class="btn btn-danger"></td>
	</tr>
</table>
</form>
<?php
include("footer.php");
?>