<?php
session_start();
include_once('koneksi.php');
include_once('header.php');

$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

if (isset($_POST['cari'])){
	$no = 1;
	$data = mysqli_query($koneksi,"SELECT * FROM transaksi INNER JOIN barang ON transaksi.id_barang = barang.id_barang INNER JOIN member ON transaksi.id_member = member.id_member where nama_member like '%".$_POST['rijalkurniawan']."%'");
	}else{
	$no = 1;
		$sql_brg = ("SELECT * FROM transaksi INNER JOIN barang ON transaksi.id_barang = barang.id_barang INNER JOIN member ON transaksi.id_member = member.id_member"); 
		$data = mysqli_query($koneksi, $sql_brg) or die (mysqli_error($koneksi));
	}

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
			<td><input type="submit" name="cari" value="Cari" onClick='top.location="laporan.php"'class='btn btn-danger'></td>
		</tr>
	</table>
</form>

<h1><center> LAPORAN TRANSAKSI </center></h1>
</br>

<table class="table table-bordered table-dark"border="1">
	<tr>
		<td>No</td>
		<td>Nama Member</td>
		<td>Level</td>
		<td>Diskon Member</td>
		<td>Diskon Barang</td>
		<td>Total Pembelian</td>
		<td>Total Diskon</td>
		<td>Total Transaksi</td>
	</tr>
	<?php
		
		while ($d = mysqli_fetch_array($data)) {
			
	?>
	<tr>
	
		<td><?= $no++; ?></td>
		<td><?=$d['nama_member']?></td>
		<td><?=$d['level']?></td>
		<td><?=$d['diskon_member']?>%</td>
		<td><?=$d['diskon_barang']?>%</td>
		<td>Rp.<?=$d['harga']?></td>
		<td>Rp.<?=$d['harga'] * $d['diskon_member']/100 + $d['harga'] * $d['diskon_barang']/100?></td>
		<td>Rp.<?=$d['harga'] - ($d['harga'] * $d['diskon_member']/100 + $d['harga'] * $d['diskon_barang']/100)?></td>
	</tr>
	<?php }?>
</table>
<input type='button'value='Tambah Transaksi'onClick='top.location="input_transaksi.php"'class='btn btn-danger'>
<input type='button'value='Refresh'onClick='top.location="laporan.php"'class='btn btn-danger'>
<?php
include("footer.php");