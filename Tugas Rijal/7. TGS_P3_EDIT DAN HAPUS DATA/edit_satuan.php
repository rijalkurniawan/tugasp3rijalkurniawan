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

include("header.php");
?>
<h1><center> UPDATE SATUAN</center></h1>
<br>
<form method="POST">
<table class="table table-bordered" border="1">
	<tr>
		<td>Nama</td>
		<input type="hidden" name="id" value="<?php echo $data['id_satuan'];?>"/>
		<td><input type="text" name="nama_satuan" class="form-control" required value="<?php echo $data['nama_satuan'];?>"></td>
	</tr>
	<tr>
		<td><input type="submit" name="save" class="btn btn-danger"></td>
	</tr>
</table>
</form>
<?php } ?>
<?php
include("footer.php");