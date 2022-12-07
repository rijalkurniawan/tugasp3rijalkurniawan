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

$tgl_transaksi = $_POST['tgl_transaksi'];
$no_transaksi = $_POST['no_transaksi'];
$jenis_transaksi = $_POST['jenis_transaksi'];
$barang_id = $_POST['barang_id'];
$jumlah_transaksi = $_POST['jumlah_transaksi'];
$user_id = $_POST['user_id'];
// menginput data ke database
$a=mysqli_query($koneksi,"insert into transaksi values('','$tgl_transaksi','$no_transaksi','$jenis_transaksi','$barang_id','$jumlah_transaksi','$user_id')");
if($a){
	// mengalihkan halaman kembali
	header("location:tampil_transaksi.php");
}else{
	echo mysqli_error($koneksi);
}
 }
 
 $querybarang = "SELECT * FROM barang";
 $resultbarang = mysqli_query ($koneksi,$querybarang);
 
 $queryuser = "SELECT * FROM user";
 $resultuser = mysqli_query ($koneksi,$queryuser);
  
	
?>
<body>
	<h2>Pemograman 3 Rijal Kurniawan</h2>
	<br/>
	<a href="tampil_transaksi.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA TRANSAKSI</h3>
	<form method="POST">
		<table>
			<tr>
				<td>Tgl_Transaksi</td>
				<td><input type="date" name="tgl_transaksi"></td>
			</tr>
			<tr>
				<td>No_Transaksi</td>
				<td><input type="text" name="no_transaksi"></td>
			</tr>
			<tr>
				<td>Jenis_Transaksi</td>
				<td><select name="jenis_transaksi">
						<option value="">-----Pilih</option>
						<option value="Cash">Cash</option>
						<option value="Kredit">Kredit</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>Barang_Id</td>
				<td><select name="barang_id">
						<option value="">-----Pilih</option>
						<?php
						while ($databarang=mysqli_fetch_array($resultbarang))
						{
							echo "<option value=$databarang[id_barang]>$databarang[nama_barang]</option>";
						}
						?>
				</select>
				</td>
			</tr>
			<tr>
				<td>Jumlah_Transaksi</td>
				<td><input type="text" name="jumlah_transaksi"></td>
			</tr>
			<tr>
				<td>User_Id</td>
				<td><select name="user_id">
						<option value="">-----Pilih</option>
						<?php
						while ($datauser=mysqli_fetch_array($resultuser))
						{
							echo "<option value=$datauser[id_user]>$datauser[nama]</option>";
						}
						?>
				</select>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="save"></td>
			</tr>
		</table>
	</form>
</body>
</html>