<?php
session_start();
include_once('koneksi.php');


$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

if (isset($_POST['cari'])){
	$no = 1;
	$data = mysqli_query($koneksi,"SELECT * FROM transaksi INNER JOIN barang ON transaksi.id_barang = barang.id_barang INNER JOIN member ON transaksi.id_member = member.id_member where nama_barang like '%".$_POST['rijalkurniawan']."%'");
	}else{
	$no = 1;
	$sql_brg = "SELECT * FROM transaksi INNER JOIN barang ON transaksi.id_barang = barang.id_barang INNER JOIN member ON transaksi.id_member = member.id_member";
	$data = mysqli_query($koneksi, $sql_brg) or die (mysqli_error($koneksi));
	}
include_once('header.php');
?>
<form method="POST">
	<table>
		<tr>
		<td>Cari Nama Transaksi </td>
		</tr>
		<tr>
			<td><input type="text" name="rijalkurniawan"></td>
		</tr>
		<tr>
			<td><input type="submit" name="cari" value="Cari" onClick='top.location="tampil_transaksi.php"'class='btn btn-danger'></td>
		</tr>
	</table>
</form>

<h1><center> DAFTAR TRANSAKSI </center></h1>
</br>

	<table class="table table-bordered" border="1">
	<tr>
	<td>No</td>
    <td>Nama Transaksi</td>
    <td>Tanggal Transaksi</td>
    <td>Harga</td>
    <td>Qty</td>
    <td>Nama Barang</td>
	<td>Diskon Member</td>
	<td>Diskon Barang</td>
    <td>Nama Member</td>
    <td>Level</td>
	<td>OPSI</td>
	
	</tr>
  
  <?php
  while ($d = mysqli_fetch_array($data)) {
  ?>
    <tr>
      <td><?=$no++;?></td>
      <td><?=$d['nama_transaksi']?></td>
      <td><?=$d['tgl_transaksi']?></td>
      <td><?=$d['harga']?></td>
      <td><?=$d['qty']?></td>
      <td><?=$d['nama_barang']?></td>
      <td><?=$d['diskon_member']?></td>
      <td><?=$d['diskon_barang']?></td>
      <td><?=$d['nama_member']?></td>
      <td><?=$d['level']?></td>
	  <td>
			<a href="edit_barang.php?id=<?php echo $d['id']; ?>">EDIT</a>
			<a href="hapus_barang.php?id=<?php echo $d['id']; ?>">HAPUS</a>
		</td>
	</tr>
    <?php }?>
 </table>
<input type='button'value='Tambah Transaksi'onClick='top.location="input_transaksi.php"'class='btn btn-danger'>
<input type='button'value='Refresh'onClick='top.location="tampil_transaksi.php"'class='btn btn-danger'>
<?php
include("footer.php");
