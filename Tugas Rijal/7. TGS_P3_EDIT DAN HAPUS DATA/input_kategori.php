<?php
session_start();
include_once('koneksi.php');

$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into kategori(nama_kategori)
values(
'".$_POST['nama_kategori']."')");

if($query_input){
header('location:tampil_kategori.php');
}else{
	echo mysqli_error();
}
}
include("header.php");
?>
<h1><center>INPUT KATEGORI</center></h1>
<br>
<form method="POST">
<table class="table table-bordered" border="1">
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama_kategori" class="form-control"></td>
	</tr>
	<tr>
		<td><input type="submit" name="save" class="btn btn-danger"></td>
	</tr>
</table>
</form>
<?php
include("footer.php");
?>