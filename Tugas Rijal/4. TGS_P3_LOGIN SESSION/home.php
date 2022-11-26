<?php 
session_start();
if(isset($_SESSION['nama']) && isset($_SESSION['level'])){
}else{
	echo ("<script type='text/javascript'>alert('Anda harus login');document.location='index.php';</script>");
}
?>
<?php if($_SESSION['level']==0){
	echo "<center><b>WELCOME ADMINISTRATOR</b></center><br>"; 
	?>
<center><a href="tampil_user.php">Menu User</a></center>
<center><a href="tampil_barang.php">Menu Barang</a></center>
<center><a href="tampil_kategori.php">Menu Kategori</a></center>
<center><a href="tampil_transaksi.php">Menu Transaksi</a></center><br>
<center><a href="index.php">Logout</a></center>
<?php }else{
	echo "<center><b>WELCOME USER</b></center><br>";
	?>
<center><a href="tampil_transaksi.php">Menu Transaksi</a></center><br>
<center><a href="index.php">Logout</a></center>
<?php } ?>
