<html>
<head>
	<title>rijalkurniawan.com</title>
</head>
<body>
	<h2>Pemograman 3 Rijal Kurniawan</h2>
	<br/>
	<a href="tambah_kategori.php">+ TAMBAH KATEGORI</a>
	<br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama_Kategori</th>
			<th>OPSI</th>
		</tr>
		<?php
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from kategori");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++;?></td>
				<td><?php echo $d['nama_kategori']; ?></td>
				
				<td>
					<a href="edit_kategori.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus_kategori.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
				<?php
		}
		?>
	</table>
</body>
</html>