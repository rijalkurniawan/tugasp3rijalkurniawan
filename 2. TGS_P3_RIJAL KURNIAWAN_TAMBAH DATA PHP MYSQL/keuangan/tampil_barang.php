<html>
<head>
	<title>rijalkurniawan.com</title>
</head>
<body>
	<h2>Pemograman 3 Rijal Kurniawan</h2>
	<br/>
	<a href="tambah_barang.php">+ TAMBAH BARANG</a>
	<br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama_Barang</th>
			<th>Kode_Barang</th>
			<th>Qty</th>
			<th>Kategori_Id</th>
			<th>OPSI</th>
		</tr>
		<?php
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from barang");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++;?></td>
				<td><?php echo $d['nama_barang']; ?></td>
				<td><?php echo $d['kode_barang']; ?></td>
				<td><?php echo $d['qty']; ?></td>
				<td><?php echo $d['kategori_id']; ?></td>
				<td>
					<a href="edit_barang.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus_barang.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
				<?php
		}
		?>
	</table>
</body>
</html>