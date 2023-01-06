<?php
session_start();
include_once('koneksi.php');

$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

if(isset($_POST['save'])){
$query_input=mysqli_query($koneksi,"insert into user(nama,password)
values(
'".$_POST['nama']."',
'".$_POST['password']."')");

if($query_input){
header('location:tampil_user.php');
}else{
	echo mysqli_error();
}
}
include_once('navbar_input_user.php');
?>