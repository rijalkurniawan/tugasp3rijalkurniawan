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

include("header.php");
?>
<h1><center> UPDATE KATEGORI</center></h1>
<br>
<form method="POST">
<table class="table table-bordered" border="1">
	<tr>
		<td>Nama</td>
		<input type="hidden" name="id" value="<?php echo $data['id_kategori'];?>"/>
		<td><input type="text" name="nama_kategori" class="form-control" required value="<?php echo $data['nama_kategori'];?>"></td>
	</tr>
	<tr>
		<td><input type="submit" name="save" class="btn btn-danger"></td>
	</tr>
</table>
</form>
<?php } ?>
<?php
include("footer.php");
