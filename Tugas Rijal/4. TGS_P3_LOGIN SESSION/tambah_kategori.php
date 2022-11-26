<!DOCTYPE html>
<html>
<head>
	<title>rijalkurniawan.com</title>
</head>

<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
if(!empty($_POST['save'])){

$nama_kategori = $_POST['nama_kategori'];
// menginput data ke database
$a=mysqli_query($koneksi,"insert into kategori values('','$nama_kategori')");
if($a){
	// mengalihkan halaman kembali
	header("location:tampil_kategori.php");
}else{
	echo mysqli_error($koneksi);
}
 }
  
	
?>
<body>
	<h2>Pemograman 3 Rijal Kurniawan</h2>
	<br/>
	<a href="tampil_kategori.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA KATEGORI</h3>
	<form method="POST">
		<table>
			<tr>
				<td>Kategori</td>
				<td><input type="text" name="nama_kategori"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="save"></td>
			</tr>
		</table>
	</form>
</body>
</html>