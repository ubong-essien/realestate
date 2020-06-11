<!DOCTYPE html>
<html lang="en">
<head>
	<title>Campus Home Nigeria</title>
	<meta charset="UTF-8">
	<meta name="description" content="Campus Home Nigeria">
	<meta name="keywords" content="Campus Home Nigeria">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="<?= base_url();?>assets/img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

	<!-- Stylesheets -->
	
	<link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?= base_url();?>assets/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="<?= base_url();?>assets/css/animate.css"/>
	<link rel="stylesheet" href="<?= base_url();?>assets/css/magnific-popup.css"/>
	<link rel="stylesheet" href="<?= base_url();?>assets/css/owl.carousel.css"/>
	<link rel="stylesheet" href="<?= base_url();?>assets/css/style.css"/>
	<link rel="stylesheet" href="<?= base_url();?>assets/css/jquery.dataTables.min.css"/>
	<link rel="stylesheet" href="<?= base_url();?>assets/css/datatables.min.css"/>
	<link rel="stylesheet" href="<?= base_url();?>assets/css/dataTables.bootstrap.min.css"/>

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<?php //print_r($settings[0]); ?>
	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 header-top-left">
						<div class="top-info">
							<i class="fa fa-phone"></i>
							<?= $settings[0]['phone']?>
						</div>
						<div class="top-info">
							<i class="fa fa-envelope"></i>
							<?= $settings[0]['email']?>
						</div>
					</div>
					<div class="col-lg-7 text-lg-right header-top-right">
						<div class="top-social">
							<a href="<?= $settings[0]['facebook']?>"><i class="fa fa-facebook"></i></a>
							<a href="<?= $settings[0]['twitter']?>"><i class="fa fa-twitter"></i></a>
							<a href="<?= $settings[0]['instagram']?>"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
						<div class="user-panel">
							<a href="<?= base_url('user-register');?>"><i class="fa fa-user-circle-o"></i> Sign Up</a>
							
							<?php
								if(isset($_SESSION['logged_user'])){
										echo"<a href='".base_url('user-dashboard')."'><i class='fa fa-institution'></i>Dashboard</a>";
								}else{
										echo"<a href='". base_url('user_login')."'><i class='fa fa-sign-in'></i> Login</a>";
								}
							?>
							<a href="<?= base_url('agents');?>"><i class="fa fa-user-circle-o"></i> Agent</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="site-navbar">
						<a href="#" class="site-logo"><img src="<?= base_url();?>assets/img/logo2.png" alt=""></a>
						<div class="nav-switch">
							<i class="fa fa-bars"></i>
						</div>
						<ul class="main-menu">
						<?php
						//print_r($menus);
						foreach($menus as $menu):
						?>
							<li><a href="<?= site_url().$menu['menu_link'];?>"><?= $menu['menu_name']?></a></li>
						<?php
						endforeach;
						?>
						<li class="fa fa-cart"></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->

