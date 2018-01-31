<!DOCTYPE html>
<html>
<head>
	<title>Input User</title>
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo asset_url()?>/css/mycss.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo asset_url()?>/css/cssku.css">
	<link rel="stylesheet" type="text/css" href="<?php echo asset_url()?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo asset_url()?>/css/bootstrap-theme.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
	<link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
</head>
<body>
	<!-- HEADER -->
<div class="container">
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#"><img src="<?php echo asset_url()?>/images/logo.png" width="25px"></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="#">DASHBOARD ADMIN <span class="sr-only">(current)</span></a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	      	<li><a href="#">Profil Admin</a></li>
	        <li><a href="<?php echo base_url('index.php/login/logout'); ?>"><i class="ionicons ion-log-out text-white"></i> Logout</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
</div>
<!-- /HEADER -->

<div class="container">