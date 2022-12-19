<?php
session_start();
include_once('koneksi.php');


$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

	if (isset($_POST['cari'])){
	$no = 1;
	$data = mysqli_query($koneksi,"select * from kategori where nama_kategori like '%".$_POST['rijalkurniawan']."%'");//where like
	}else{
	$no = 1;
	$data = mysqli_query($koneksi,"select * from kategori");
	}
include_once('header.php');	
?>

<form method="POST">
	<table>
		<tr>
		<td>Cari Nama Kategori </td>
		</tr>
		<tr>
			<td><input type="text" name="rijalkurniawan"></td>
		</tr>
		<tr>
			<td><input type="submit" name="cari" value="Cari" onClick='top.location="tampil_kategori.php"'class='btn btn-danger'></td>
		</tr>
	</table>
</form>

<h1><center> DAFTAR KATEGORI </center></h1>
<br>

		<table class="table table-bordered" border="1">
	<tr>
		<td><center>No</td>
		<td><center>Nama</td>
		<td colspan="2"><center>OPSI</td>
	</tr>
<?php
  while($d = mysqli_fetch_array($data)){
	?>
    <tr>
      <td><center><?php echo $no++;?></td>
      <td><?php echo $d ['nama_kategori'];?></td>
	  <td>
		<a href="edit_kategori.php?id=<?php echo $d['id_kategori']; ?>">EDIT</a>
		<td>
		<a href="hapus_kategori.php?id=<?php echo $d['id_kategori']; ?>">HAPUS</a>
		</td>
  </tr>
<?php }?>

</table>
<input type='button'value='Tambah Kategori'onClick='top.location="input_kategori.php"'class='btn btn-danger'>
<input type='button'value='Tambah Satuan'onClick='top.location="input_satuan.php"'class='btn btn-danger'>
<input type='button'value='Refresh'onClick='top.location="tampil_kategori.php"'class='btn btn-danger'>
<?php
include("footer.php");
?>