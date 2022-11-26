<html>
<head>
	<title>rijalkurniawan.com</title>
</head>
<body>
	<h2>Pemograman 3 Rijal Kurniawan</h2>
	<br/>
	<a href="tambah_transaksi.php">+ TAMBAH TRANSAKSI</a>
	<br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Tgl_Transaksi</th>
			<th>No_Transaksi</th>
			<th>Jenis_Transaksi</th>
			<th>Barang_Id</th>
			<th>Jumlah_Transaksi</th>
			<th>User_Id</th>
			<th>OPSI</th>
		</tr>
		<?php
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from transaksi");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++;?></td>
				<td><?php echo $d['tgl_transaksi']; ?></td>
				<td><?php echo $d['no_transaksi']; ?></td>
				<td><?php echo $d['jenis_transaksi']; ?></td>
				<td><?php echo $d['barang_id']; ?></td>
				<td><?php echo $d['jumlah_transaksi']; ?></td>
				<td><?php echo $d['user_id']; ?></td>
				<td>
					<a href="edit_transaksi.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus_transaksi.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
				<?php
		}
		?>
	</table>
</body>
</html>