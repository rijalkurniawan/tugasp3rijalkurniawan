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

$nama_barang = $_POST['nama_barang'];
$kode_barang = $_POST['kode_barang'];
$qty = $_POST['qty'];
$kategori_id = $_POST['kategori_id'];
// menginput data ke database
$a=mysqli_query($koneksi,"insert into barang values('','$nama_barang','$kode_barang','$qty','$kategori_id')");
if($a){
	// mengalihkan halaman kembali
	header("location:tampil_barang.php");
}else{
	echo mysqli_error($koneksi);
}
 }
  
	
?>
<body>
	<h2>Pemograman 3 Rijal Kurniawan</h2>
	<br/>
	<a href="tampil_barang.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA BARANG</h3>
	<form method="POST">
		<table>
			<tr>
				<td>Nama_Barang</td>
				<td><input type="text" name="nama_barang"></td>
			</tr>
			<tr>
				<td>Kode_Barang</td>
				<td><input type="text" name="kode_barang"></td>
			</tr>
			<tr>
				<td>Qty</td>
				<td><input type="number" name="qty"></td>
				</td>
			</tr>
			<tr>
				<td>Kategori_Id</td>
				<td><select name="kategori_id">
						<option value="">-----Pilih</option>
						<option value="1">Pancing</option>
						<option value="2">Burung</option>
				</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="save"></td>
			</tr>
		</table>
	</form>
</body>
</html>