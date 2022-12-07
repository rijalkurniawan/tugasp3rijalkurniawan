<html>
<head>
	<title>rijalkurniawan.com</title>
</head>
<body>
	<h2>Pemograman 3 Rijal Kurniawan</h2>
	<br/>
	<a href="tambah_user.php">+ TAMBAH USER</a>
	<br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Password</th>
			<th>Level</th>
			<th>Status</th>
			<th>OPSI</th>
		</tr>
		<?php
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from user");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++;?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['password']; ?></td>
				<td><?php echo $d['level']; ?></td>
				<td><?php echo $d['status']; ?></td>
				<td>
					<a href="edit_user.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus_user.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
				<?php
		}
		?>
	</table>
</body>
</html>