<?php
session_start();
error_reporting(0);
include("cek_login.php");
include("koneksi.php");
$username=$_SESSION[username];
$NIP=$_SESSION[NIP];
$qryadmin=mysql_query("select * from login where username='$username'");
$tampiladmin=mysql_fetch_array($qryadmin);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>POST PIGEON - Menu User</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

		<link rel="icon" type="image/png" href="images/icons/p.png"/>
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	

		<header id="fh5co-header">
			<div class="container">
				<nav class="fh5co-main-nav">
					<ul>
						<li class="fh5co-active"><a href="menuuser.php"><span>Home</span></a></li>
						<li><a href="?page=data_sm"><span>SURAT MASUK</span></a></li>
						<li><a href="?page=data_sk"><span>SURAT KELUAR</span></a></li>
						<li><a href="?page=data_dp"><span>DISPOSISI</span></a></li>
						
													 <li>
					<li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">LAPORAN <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="?page=cari_sm2" style="color:#000000;">Laporan Surat Masuk</a></li>
              <li><a href="?page=cari_sk2" style="color:#000000;">Laporan Surat Keluar</a></li>
			  <li><a href="?page=lap1" style="color:#000000;">Laporan Tanggal</a></li>
								</ul>
							</li>
							</li>
						

					</ul>
				</nav>
			</div>
		</header>

		<div class="fh5co-hero" style="background-image: url(images/1.jpg);" data-stellar-background-ratio="0.5">
			
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell">
							<h1 class="text-center">POST PIGEON</h1>
							<img src="images/p.png" width="400" height="360">
							<p>Selamat datang di POST PIGEON, Anda berada di Menu User</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	<br>
					<div class="limiter">
		<div class="container-login100" style="background-image: url('images/u.jpg');">
		<?php include ("switch.php");?>
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
	
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

