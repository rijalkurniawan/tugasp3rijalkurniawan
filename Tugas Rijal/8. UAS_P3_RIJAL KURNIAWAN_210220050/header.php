<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Rijal MyPOS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>

<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
<!--Calender-->
<link rel="stylesheet" href="css/clndr.css" type="text/css" />
<script src="js/underscore-min.js" type="text/javascript"></script>
<script src= "js/moment-2.2.1.js" type="text/javascript"></script>
<script src="js/clndr.js" type="text/javascript"></script>

<script src="js/site.js" type="text/javascript"></script>
<!--End Calender-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		
		
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
					
					<?php if($_SESSION['level']==0){ ?>
						<li>
							<a href="home.php" class="active"><i class="fa fa-home nav_icon"></i>Home</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-cogs nav_icon"></i> Menu <span class="nav-badge">10</span> <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="input_barang.php">Input Barang</a>
								</li>
								<li>
									<a href="input_satuan.php">Input Satuan</a>
								</li>
								<li>
									<a href="input_kategori.php">Input kategori</a>
								</li>
      							<li>
									<a href="input_member.php">Input Member</a>
								</li>
								<li>
									<a href="input_user.php">Input User</a>
								</li>
      							<li>
									<a href="tampil_barang.php">Daftar Barang</a>
								</li>
        						<li>
									<a href="tampil_kategori.php">Daftar Kategori</a>
								</li>
       							<li>
									<a href="tampil_satuan.php">Daftar Satuan</a>
								</li>
       							<li>
									<a href="tampil_member.php">Daftar Member</a>
								</li>
								<li>
									<a href="tampil_user.php">Daftar User</a>
								</li>
							</ul>
						<li>
							<a href="#"><i class="fa fa-book nav_icon"></i>Transaksi<span class="nav-badge">3</span> <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">	
								<li>
									<a href="input_Transaksi.php">Input Transaksi</a>
								</li>
								<li>
									<a href="tampil_transaksi.php">Daftar Transaksi</a>
								</li>
        						<li>
									<a href="laporan.php">Laporan Transaksi</a>
								</li>
							</ul>
						</li>
							<!-- /nav-second-level -->
						
						
					<?php }else{ ?>	
						<li>
							<a href="home.php" class="active"><i class="fa fa-home nav_icon"></i>Home</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-book nav_icon"></i>Transaksi<span class="nav-badge">3</span> <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="input_Transaksi.php">Input Transaksi</a>
								</li>
								<li>
									<a href="tampil_transaksi.php">Daftar Transaksi</a>
								</li>
        						<li>
									<a href="laporan.php">Laporan Transaksi</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
						</li>
					<?php } ?>	
						
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
				<div class="logo">
					<a href="home.php">
						<h1>MY POS</h1>
						<span>Point Of Sale</span>
					</a>
				</div>
				<!--//logo-->
				<!--search-box-->
				<div class="">
					<form class="">
						
					</form>
				</div><!--//end-search-box-->
				<div class="clearfix"> </div>
			</div>
			
				<!--notification menu end -->
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img"><img src="" alt=""> </span> 
									<div class="user-name">
										<p>Welcome</p>
										<span><?php echo $username; ?></span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu"> 
								<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
			