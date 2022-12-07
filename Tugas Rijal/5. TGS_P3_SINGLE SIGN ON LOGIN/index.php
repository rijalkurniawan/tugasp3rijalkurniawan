<?php
error_reporting(0);
session_start();
$username = $_SESSION['nama'];
$password = $_SESSION['password'];
$level = $_SESSION['level'];

	if(isset($_SESSION['nama']) && isset($_SESSION['level']))
	{
		header('Location:home.php');
	} 
	else 
	{
	}
?>
 
<html>
<head>
<title>LOGIN SSO</title>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Square login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--Google Fonts-->
</head>
<body>
<!--header start here-->
<div class="login-form">
			<div class="top-login">
				<span><img src="images/group.png" alt=""/></span>
			</div>
			<h1>Yuk Anda Login</h1>
			<div class="login-top">
			<form method="POST" action="check_session.php">
				<div class="login-ic">
					<i></i>
					<input type="text"  name="nama" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
					<div class="clear"> </div>
				</div>
				<div class="login-ic">
					<i class="icon"></i>
					<input type="password"  name="password" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
					<div class="clear"> </div>
				</div>
			
				<div class="log-bwn">
					<input type="submit"  name="login" value="Login" >
				</div>
				</form>
			</div>
			<p class="copy">© 2022 SSO | Design by  <a href="http://w3layouts.com/" target="_blank">RK</a></p>
</div>		
<!--header start here-->
</body>
</html>