<?php
include("koneksi.php");

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into member(nama_member,level)
values(
'".$_POST['nama_member']."',
'".$_POST['level']."')");

if($query_input){
header('location:tampil_member.php');
}else{
	echo mysqli_error();
}
}
include("header.php");
?>
<form method="POST">
<table class="table table-bordered" border="1">
	<tr>
		<td>Nama Member</td>
		<td><input type="text" name="nama_member" class="form-control"></td>
	</tr>
	<tr>
		<td>Level</td>
		<td><select class="form-control" name="level">
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
<?php
include("footer.php");