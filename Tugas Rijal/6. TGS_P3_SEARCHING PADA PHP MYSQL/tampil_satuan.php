<?php
session_start();
include_once('koneksi.php');


$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

if (isset($_POST['cari'])){
	$no = 1;
	$data = mysqli_query($koneksi,"select * from satuan where nama_satuan like '%".$_POST['rijalkurniawan']."%'");//where like
	}else{
	$no = 1;
	$data = mysqli_query($koneksi,"select * from satuan");
	}
include_once('header.php');
?>

<form method="POST">
	<table>
		<tr>
		<td>Cari Nama Satuan </td>
		</tr>
		<tr>
			<td><input type="text" name="rijalkurniawan"></td>
		</tr>
		<tr>
			<td><input type="submit" name="cari" value="Cari" onClick='top.location="tampil_satuan.php"'class='btn btn-danger'></td>
		</tr>
	</table>
</form>

<h1><center> DAFTAR SATUAN</center></h1>
<br>
<table class="table table-bordered" border="1">
  <tr>
    <td>No</td>
    <td>Nama</td>
	<td>OPSI</td>
  </tr>

  <?php
  
  while($d = mysqli_fetch_array($data)){?>
    <tr>
      <td><?php echo $no++;?></td>
      <td><?php echo $d ['nama_satuan'];?></td>
	  <td>
			<a href="edit_satuan.php?id=<?php echo $d['id']; ?>">EDIT</a>
			<a href="hapus_satuan.php?id=<?php echo $d['id']; ?>">HAPUS</a>
		</td>
  </tr>
<?php }?>

</table>
<input type='button'value='Tambah Satuan'onClick='top.location="input_satuan.php"'class='btn btn-danger'>
<input type='button'value='Tambah Barang'onClick='top.location="input_barang.php"'class='btn btn-danger'>
<input type='button'value='Refresh'onClick='top.location="tampil_satuan.php"'class='btn btn-danger'>
<?php
include("footer.php");