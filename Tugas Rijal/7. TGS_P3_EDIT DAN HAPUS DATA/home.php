<?php
session_start();
include_once('koneksi.php');


$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

if(isset($_SESSION['nama']) && isset($_SESSION['level'])){
}else{
	echo ("<script type='text/javascript'>alert('Anda harus login');document.location='index.php';</script>");
}

include_once('navbar.php');




?>
