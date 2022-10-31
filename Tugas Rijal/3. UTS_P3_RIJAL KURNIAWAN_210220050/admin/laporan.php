<?php
include "koneksi.php";
include("header.php");

?>
<h1><center> LAPORAN TRANSAKSI </center></h1>

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
		$no=1;
		
		$query = ("SELECT * FROM transaksi INNER JOIN barang ON transaksi.id_barang = barang.id_barang INNER JOIN member ON transaksi.id_member = member.id_member"); 
		$sql_brg = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
		while ($data = mysqli_fetch_array($sql_brg)) {
			
	?>
	<tr>
	
		<td><?= $no++; ?></td>
		<td><?=$data['nama_member']?></td>
		<td><?=$data['level']?></td>
		<td><?=$data['diskon_member']?>%</td>
		<td><?=$data['diskon_barang']?>%</td>
		<td>Rp.<?=$data['harga']?></td>
		<td>Rp.<?=$data['harga'] * $data['diskon_member']/100 + $data['harga'] * $data['diskon_barang']/100?></td>
		<td>Rp.<?=$data['harga'] - ($data['harga'] * $data['diskon_member']/100 + $data['harga'] * $data['diskon_barang']/100)?></td>
	</tr>
	<?php }?>
</table>
<input type='button'value='Tambah Transaksi'onClick='top.location="input_transaksi.php"'class='btn btn-danger'>
<?php
include("footer.php");