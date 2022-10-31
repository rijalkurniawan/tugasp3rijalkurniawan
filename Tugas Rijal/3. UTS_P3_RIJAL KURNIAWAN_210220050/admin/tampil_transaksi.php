<?php
include ("koneksi.php");
include ("header.php");

?>
<h1><center> DAFTAR TRANSAKSI </center></h1>

		<table class="table table-bordered" border="1">
	<tr>
		< <td>No</td>
    <td>Nama Transaksi</td>
    <td>Tanggal Transaksi</td>
    <td>Harga</td>
    <td>Qty</td>
    <td>Nama Barang</td>
	<td>Diskon Member</td>
	<td>Diskon Barang</td>
    <td>Nama Member</td>
    <td>Level</td>
	</tr>
  
  <?php
  $no=1;
  $query = "SELECT * FROM transaksi INNER JOIN barang ON transaksi.id_barang = barang.id_barang INNER JOIN member ON transaksi.id_member = member.id_member";
  $sql_brg = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));
  while ($data = mysqli_fetch_array($sql_brg)) {
  ?>
    <tr>
      <td><?=$no++;?></td>
      <td><?=$data['nama_transaksi']?></td>
      <td><?=$data['tgl_transaksi']?></td>
      <td><?=$data['harga']?></td>
      <td><?=$data['qty']?></td>
      <td><?=$data['nama_barang']?></td>
      <td><?=$data['diskon_member']?></td>
      <td><?=$data['diskon_barang']?></td>
      <td><?=$data['nama_member']?></td>
      <td><?=$data['level']?></td>
    <?php }?>
 </table>
<input type='button'value='Tambah Transaksi'onClick='top.location="input_transaksi.php"'class='btn btn-danger'>
<?php
include("footer.php");