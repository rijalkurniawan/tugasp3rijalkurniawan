<?php
session_start();
include_once("koneksi.php");

$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];
$nama_level = $_SESSION['nama_level'];
$query=mysqli_query($koneksi,"UPDATE user set aktif='0' where nama = '$username' and password = '$password' ");

unset($_SESSION['nama']);
unset($_SESSION['password']);
unset($_SESSION['level']);
unset($_SESSION['nama_level']);

header('location:index.php');
?>