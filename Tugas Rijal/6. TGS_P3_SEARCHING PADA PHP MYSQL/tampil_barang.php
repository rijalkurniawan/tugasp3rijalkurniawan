<?php
session_start();
include_once('koneksi.php');


$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

if (isset($_POST['cari'])){
	$no = 1;
	$data = mysqli_query($koneksi,"select * from barang INNER JOIN kategori ON barang.id_kategori = kategori.id_kategori INNER JOIN satuan ON barang.id_satuan = satuan.id_satuan where nama_barang like '%".$_POST['rijalkurniawan']."%'");
	}else{
	$no = 1;
		$sql_brg = "SELECT * FROM barang INNER JOIN kategori ON barang.id_kategori = kategori.id_kategori INNER JOIN satuan ON barang.id_satuan = satuan.id_satuan";
		$data = mysqli_query($koneksi, $sql_brg) or die (mysqli_error($koneksi));
	}
include_once('header.php');
?>
<form method="POST">
	<table>
		<tr>
		<td>Cari Nama Barang </td>
		</tr>
		<tr>
			<td><input type="text" name="rijalkurniawan"></td>
		</tr>
		<tr>
			<td><input type="submit" name="cari" value="Cari" onClick='top.location="tampil_barang.php"'class='btn btn-danger'></td>
		</tr>
	</table>
</form>

<h1><center> DAFTAR BARANG </center></h1>
</br>

		<table class="table table-bordered" border="1">
	<tr>
		<td>No</td>
		<td>Nama Barang</td>
		<td>Kategori</td>
		<td>Satuan</td>
		<td>OPSI</td>

	</tr>
	<?php
		
		while ($d = mysqli_fetch_array($data)) {
		
	?>
	<tr>
		<td><?= $no++; ?></td>
		<td><?= $d['nama_barang'] ?></td>
		<td><?= $d['nama_kategori'] ?></td>
		<td><?= $d['nama_satuan'] ?></td>
		<td>
			<a href="edit_barang.php?id=<?php echo $d['id']; ?>">EDIT</a>
			<a href="hapus_barang.php?id=<?php echo $d['id']; ?>">HAPUS</a>
		</td>
	</tr>
	<?php } ?>

</table>
<input type='button'value='Tambah Barang'onClick='top.location="input_barang.php"'class='btn btn-danger'>
<input type='button'value='Refresh'onClick='top.location="tampil_barang.php"'class='btn btn-danger'>
<?php
include ("footer.php");
?>