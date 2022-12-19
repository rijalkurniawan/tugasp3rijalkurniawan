<?php
session_start();
include_once('koneksi.php');

$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

if(isset($_POST['save'])){
	$id=$_POST['id'];
	$nama=$_POST['nama_member'];
	$level=$_POST['level'];

	$update=mysqli_query($koneksi,"UPDATE member SET nama_member='$nama', level='$level' WHERE id_member='$id'");
	if($update){
		header("location:tampil_member.php");
	}else{
		echo mysqli_error();
	}
}
$id = $_GET['id'];

	$query_mysqli = mysqli_query($koneksi,"SELECT * FROM member WHERE id_member='$id'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){

include("header.php");
?>
<h1><center> UPDATE MEMBER</center></h1>
<br>
<form method="POST">
<table class="table table-bordered" border="1">
	<tr>
		<td>Nama Member</td>
		<input type="hidden" name="id" value="<?php echo $data['id_member'];?>"/>
		<td><input type="text" name="nama_member" class="form-control" required value="<?php echo $data['nama_member'];?>"></td>
	</tr>
	<tr>
		<td>Level</td>
		<td><select class="form-control" name="level" required>
			<option value="">-----Pilih-----</option>
			<option value="Silver">Silver</option>
			<option value="Gold">Gold</option>
			<option value="Platinum">Platinum</option>
		</select></td>
	</tr>
	<tr>
		<td><input type="submit" name="save" class="btn btn-danger"></td>
	</tr>
</table>
</form>
<?php } ?>
<?php
include("footer.php");