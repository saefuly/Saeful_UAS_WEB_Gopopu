<!-- SIDEBAR MENU -->
	<div class="col-md-3">
		<div class="row">
			<div class="col-md-12 profile-admin bg-primary">
				<h4 class="text-white">WELCOME ADMIN</h4>
				<img src="<?php echo asset_url()?>/images/logo.png" width="75px">
				<h4 class="text-white"><?php echo $this->session->userdata("nama");?></h4>
			</div>
			<div class="col-md-12 main-menu">
				<ul class="list-unstyled">
					<a href=""><li>Data Penduduk</li></a>
					<a href=""><li>Data Kecamatan</li></a>
				</ul>
			</div>
		</div>
	</div>
	<!-- /SIDEBAR MENU -->