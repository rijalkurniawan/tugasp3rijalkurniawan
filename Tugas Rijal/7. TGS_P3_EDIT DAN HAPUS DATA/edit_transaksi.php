<?php
session_start();
include_once('koneksi.php');

$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

if(isset($_POST['save'])){
	$id=$_POST['id'];
	$nama=$_POST['nama_transaksi'];
	$tgl_transaksi=$_POST['tgl_transaksi'];
	$harga=$_POST['harga'];
	$qty=$_POST['qty'];
	$id_barang=$_POST['id_barang'];
	$diskon_member=$_POST['diskon_member'];
	$diskon_barang=$_POST['diskon_barang'];
	$id_member=$_POST['id_member'];

	$update=mysqli_query($koneksi,"UPDATE transaksi SET nama_transaksi='$nama', tgl_transaksi='$tgl_transaksi', harga='$harga', qty='$qty', id_barang='$id_barang',  
	diskon_member='$diskon_member', diskon_barang='$diskon_barang', id_member='$id_member' WHERE id_transaksi='$id'");
	if($update){
		header("location:tampil_transaksi.php");
	}else{
		echo mysqli_error();
	}
}
$id = $_GET['id'];

	$query_mysqli = mysqli_query($koneksi,"SELECT * FROM transaksi WHERE id_transaksi='$id'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){

include("header.php");
?>
<h1><center> UPDATE TRANSAKSI</center></h1>
<br>
<form method="POST">
<table class="table table-bordered" border="1">
	<tr>
		<td>Nama Transaksi</td>
		<input type="hidden" name="id" value="<?php echo $data['id_transaksi'];?>"/>
		<td><input type="text" name="nama_transaksi" class="form-control" required value="<?php echo $data['nama_transaksi'];?>"></td>
	</tr>
	<tr>
		<td>Tanggal Transaksi</td>
		<td><input type="date" name="tgl_transaksi" class="form-control" required value="<?php echo $data ['tgl_transaksi'];?>"></td>
	</tr>
    <tr>
		<td>Id Barang</td>
		<td><select class="form-control" name="id_barang" required>
			<option value="<?php echo $data ['id_barang'];?>">-----Pilih-----</option>
			<?php 
			$sql_kategori = mysqli_query ($koneksi, "Select * from barang" ) or die
			(mysql_error($koneksi));
			while ($kategori = mysqli_fetch_array($sql_kategori)) {
				echo '<option value="'.$kategori['id_barang'].'">'.$kategori['nama_barang'].'</option>';
			} ?>
		</select></td>
	</tr>
	<tr>
		<td>Qty</td>
		<td><input type="number" name="qty" class="form-control" required value="<?php echo $data ['qty'];?>"></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input type="text" name="harga" class="form-control" required value="<?php echo $data ['harga'];?>"></td>
	</tr>
    <tr>
		<td>Diskon Member</td>
		<td><input type="number" name="diskon_member" class="form-control" required value="<?php echo $data ['diskon_member'];?>"></td>
	</tr>
	<tr>
		<td>Diskon Barang</td>
		<td><input type="number" name="diskon_barang" class="form-control" required value="<?php echo $data ['diskon_barang'];?>"></td>
	</tr>
    <tr>
		<td>Id Member</td>
		<td><select name="id_member" class="form-control" required>
			<option value="<?php echo $data ['id_member'];?>">-----Pilih-----</option>
			<?php 
			$sql_member = mysqli_query ($koneksi, "Select * from member" ) or die
			(mysql_error($koneksi));
			while ($member = mysqli_fetch_array($sql_member)) {
				echo '<option value="'.$member['id_member'].'">'.$member['nama_member'].'</option>';
			} ?>
	</tr>
	<tr>
		<td><input type="submit" name="save" class="btn btn-danger"></td>
	</tr>
</table>
</form>
<?php } ?>
<input type='button'value='Tambah Member'onClick='top.location="input_member.php"'class="btn btn-danger">
<?php
include("footer.php");
