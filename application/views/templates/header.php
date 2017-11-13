<!DOCTYPE html>
<html>
<head>
	<title>Input User</title>
	<link rel="stylesheet" type="text/css" href="<?php echo asset_url()?>/css/mycss.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
	<link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
</head>
<body>
	<div class="main-content">
		<?php if($this->session->userdata('status') == "login"){?>
			<div class="info-admin">
				<h3 class="text-white" style="margin-bottom: 10px;">Selamat datang, <?php echo $this->session->userdata("nama"); ?></h3>
				<a href="<?php echo base_url('index.php/login/logout'); ?>" style="color: white;"><i class="ionicons ion-log-out"></i> Logout</a>
			</div>
		<?php	} ?>
		
		<div class="header-logo">
			<center>
				<img src="<?php echo asset_url()?>/images/logo.png" width="80px">
			</center>
		</div>