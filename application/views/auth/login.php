<div class="content">
	<h3 class="text-center judul"><?php echo $judul; ?></h3>
	<?php
		if(!empty($this->session->flashdata('message'))){
	?>	
		<center>
			<h4 <?= $this->session->flashdata('desc') ? 'style="color:green"' : 'style="color:red; margin-top: 10px;"' ?>>
				<?= $this->session->flashdata('message') ?>	
			</h4>
		</center>
	<?php
		}
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 login-container">
				<?php echo form_open('login/aksi_login'); ?>
					<div class="form-group">
					    <label class="text-white">Username</label>
					    <input type="text" name="username" class="form-control" placeholder="Username" required>
					</div>
					<div class="form-group">
					    <label class="text-white">Password</label>
					    <input type="password" name="password" class="form-control" placeholder="Password" required>
					</div>
					<button type="submit" class="btn btn-success btn-block margin-top-m">Login</button>
				</form>
			</div>
		</div>
	</div>
</div>