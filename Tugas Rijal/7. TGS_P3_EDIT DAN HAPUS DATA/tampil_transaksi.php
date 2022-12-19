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
	<td><center>No</td>
    <td><center>Nama Transaksi</td>
    <td><center>Tanggal Transaksi</td>
    <td><center>Harga</td>
    <td><center>Qty</td>
    <td><center>Nama Barang</td>
	<td><center>Diskon Member</td>
	<td><center>Diskon Barang</td>
    <td><center>Nama Member</td>
    <td><center>Level</td>
	<td colspan="2"><center>OPSI</td>
	
	</tr>
  
  <?php
  while ($d = mysqli_fetch_array($data)) {
  ?>
    <tr>
      <td><center><?=$no++;?></td>
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
			<a href="edit_transaksi.php?id=<?php echo $d['id_transaksi']; ?>">EDIT</a>
			<td>
			<a href="hapus_transaksi.php?id=<?php echo $d['id_transaksi']; ?>">HAPUS</a>
		</td>
	</tr>
    <?php }?>
 </table>
<input type='button'value='Tambah Transaksi'onClick='top.location="input_transaksi.php"'class='btn btn-danger'>
<input type='button'value='Refresh'onClick='top.location="tampil_transaksi.php"'class='btn btn-danger'>
<?php
include("footer.php");
?>