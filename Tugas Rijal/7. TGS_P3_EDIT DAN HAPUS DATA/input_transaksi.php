<?php
session_start();
include_once('koneksi.php');

$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into transaksi(nama_transaksi,tgl_transaksi,harga,qty,id_barang,diskon_member,diskon_barang,id_member)
values(
'".$_POST['nama_transaksi']."',
'".$_POST['tgl_transaksi']."',
'".$_POST['harga']."',
'".$_POST['qty']."',
'".$_POST['id_barang']."',
'".$_POST['diskon_member']."',
'".$_POST['diskon_barang']."',
'".$_POST['id_member']."')");

if($query_input){
header('location:tampil_transaksi.php');
}else{
	echo mysqli_error();
}
}
include("header.php");
?>
<h1><center>INPUT TRANSAKSI</center></h1>
<br>
<form method="POST">
<table class="table table-bordered" border="1">
	<tr>
		<td>Nama Transaksi</td>
		<td><input type="text" name="nama_transaksi" class="form-control"></td>
	</tr>
	<tr>
		<td>Tanggal Transaksi</td>
		<td><input type="date" name="tgl_transaksi" class="form-control"></td>
	</tr>
    <tr>
		<td>Id Barang</td>
		<td><select class="form-control" name="id_barang">
			<option value="">-----Pilih-----</option>
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
		<td><input type="number" name="qty" class="form-control"></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input type="text" name="harga" class="form-control"></td>
	</tr>
    <tr>
		<td>Diskon Member</td>
		<td><input type="number" name="diskon_member" class="form-control"></td>
	</tr>
	<tr>
		<td>Diskon Barang</td>
		<td><input type="number" name="diskon_barang" class="form-control"></td>
	</tr>
    <tr>
		<td>Id Member</td>
		<td><select name="id_member" class="form-control">
			<option value="">-----Pilih-----</option>
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
</form><input type='button'value='Tambah Member'onClick='top.location="input_member.php"'class="btn btn-danger">
<?php
include("footer.php");
?>