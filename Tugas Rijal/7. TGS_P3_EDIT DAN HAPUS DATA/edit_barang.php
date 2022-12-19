<?php
session_start();
include_once('koneksi.php');

$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

if(isset($_POST['save'])){
	$id=$_POST['id'];
	$nama=$_POST['nama_barang'];
	$id_kategori=$_POST['id_kategori'];
	$id_satuan=$_POST['id_satuan'];

	$update=mysqli_query($koneksi,"UPDATE barang SET nama_barang='$nama', id_kategori='$id_kategori', id_satuan='$id_satuan' WHERE id_barang='$id'");
	if($update){
		header("location:tampil_barang.php");
	}else{
		echo mysqli_error();
	}
}
$id = $_GET['id'];

	$query_mysqli = mysqli_query($koneksi,"SELECT * FROM barang WHERE id_barang='$id'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){

include("header.php");
?>
<h1><center> UPDATE BARANG</center></h1>
<br>
<form method="POST">
<table class="table table-bordered" border="1">
	<tr>
		<td>Nama</td>
		<input type="hidden" name="id" value="<?php echo $data['id_barang'];?>"/>
		<td><input type="text" name="nama_barang" class="form-control" required value="<?php echo $data['nama_barang'];?>"></td>
	</tr>
	<tr>
		<td>id_kategori</td>
		<td><select name="id_kategori" class="form-control" required>
			<option value="">-----Pilih-----</option>
			<?php 
			$sql_kategori = mysqli_query ($koneksi, "Select * from kategori" ) or die
			(mysql_error($koneksi));
			while ($kategori = mysqli_fetch_array($sql_kategori)) {
				echo '<option value="'.$kategori['id_kategori'].'">'.$kategori['id_kategori'].'</option>';
			} ?>
		</select></td>
	</tr>
	<tr>
		<td>id_satuan</td>
		<td><select class="form-control" name="id_satuan" required>
			<option value="">-----Pilih-----</option>
			<?php 
			$sql_satuan = mysqli_query ($koneksi, "Select * from satuan" ) or die
			(mysql_error($koneksi));
			while ($satuan = mysqli_fetch_array($sql_satuan)) {
				echo '<option value="'.$satuan['id_satuan'].'">'.$satuan['id_satuan'].'</option>';
			} ?>
		</select></td>
	</tr>
	<tr>
		<td><input type="submit" name="save" class="btn btn-danger"></td>
	</tr>
</table>
</form>
<?php } ?>
<input type='button'value='Tambah kategori'onClick='top.location="input_kategori.php"'class='btn btn-danger'>
<input type='button'value='Tambah Satuan'onClick='top.location="input_satuan.php"'class='btn btn-danger'>
<?php
include_once('footer.php');
