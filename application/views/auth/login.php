<div class="content">
	<h3 class="text-center" style="margin-bottom: 15px;"><?php echo $judul; ?></h3>
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
	<div class="login-container">
		<?php echo form_open('login/aksi_login'); ?>
			<div class="form-group">
				<label class="text-center">Username</label>
				<input type="text" name="username" class="margin-top-m" placeholder="Admin" required>
			</div>
			
			<div class="form-group">
				<label class="text-center">Password</label>
				<input type="password" name="password" class="margin-top-m" placeholder="*********" required>
			</div>

			<div class="form-group">
				<button type="submit">LOG IN</button>
			</div>
		</form>
	</div>
</div>