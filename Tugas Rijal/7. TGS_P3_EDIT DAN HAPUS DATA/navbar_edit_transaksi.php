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
		<!-- //header-ends -->
<div id="page-wrapper">
<div class="main-page">
<h1><center> UPDATE TRANSAKSI</center></h1>
<br>
<form method="POST">
<table class="table table-bordered" border="1">
	<tr>
		<td>Nama Transaksi</td>
		<input type="hidden" name="id" value="<?php echo $data['id_transaksi'];?>"/>
		<td><input type="text" name="nama_transaksi" class="form-control" required value="<?php echo $data['nama_transaksi'];?>"></td>
	</tr>
	<tr>
		<td>Tanggal Transaksi</td>
		<td><input type="date" name="tgl_transaksi" class="form-control" required value="<?php echo $data ['tgl_transaksi'];?>"></td>
	</tr>
    <tr>
		<td>Id Barang</td>
		<td><select class="form-control" name="id_barang" required>
			<option value="<?php echo $data ['id_barang'];?>">-----Pilih-----</option>
			<?php 
			$sql_kategori = mysqli_query ($koneksi, "Select * from barang" ) or die
			(mysql_error($koneksi));
			while ($kategori = mysqli_fetch_array($sql_kategori)) {
				echo '<option value="'.$kategori['id_barang'].'">'.$kategori['nama_barang'].'</option>';
			} ?>
		</select></td>
	</tr>
	<tr>
		<td>Qty</td>
		<td><input type="number" name="qty" class="form-control" required value="<?php echo $data ['qty'];?>"></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input type="text" name="harga" class="form-control" required value="<?php echo $data ['harga'];?>"></td>
	</tr>
    <tr>
		<td>Diskon Member</td>
		<td><input type="number" name="diskon_member" class="form-control" required value="<?php echo $data ['diskon_member'];?>"></td>
	</tr>
	<tr>
		<td>Diskon Barang</td>
		<td><input type="number" name="diskon_barang" class="form-control" required value="<?php echo $data ['diskon_barang'];?>"></td>
	</tr>
    <tr>
		<td>Id Member</td>
		<td><select name="id_member" class="form-control" required>
			<option value="<?php echo $data ['id_member'];?>">-----Pilih-----</option>
			<?php 
			$sql_member = mysqli_query ($koneksi, "Select * from member" ) or die
			(mysql_error($koneksi));
			while ($member = mysqli_fetch_array($sql_member)) {
				echo '<option value="'.$member['id_member'].'">'.$member['nama_member'].'</option>';
			} ?>
	</tr>
	<tr>
		<td><input type="submit" name="save" class="btn btn-danger"></td>
	</tr>
</table>
</form>
<input type='button'value='Tambah Member'onClick='top.location="input_member.php"'class="btn btn-danger">

<!--footer-->
<div class="footer">
<p>&copy; 2022 My POS | Design by <a href="#" target="_blank">RK</a></p>
</div>
<!--//footer-->
</div>
<!-- Classie -->
<script src="js/classie.js"></script>
<script>
var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
showLeftPush = document.getElementById( 'showLeftPush' ),
body = document.body;

showLeftPush.onclick = function() {
classie.toggle( this, 'active' );
classie.toggle( body, 'cbp-spmenu-push-toright' );
classie.toggle( menuLeft, 'cbp-spmenu-open' );
disableOther( 'showLeftPush' );
};


function disableOther( button ) {
if( button !== 'showLeftPush' ) {
    classie.toggle( showLeftPush, 'disabled' );
}
}
</script>
<!--scrolling js-->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!--//scrolling js-->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.js"> </script>
</body>
</html>