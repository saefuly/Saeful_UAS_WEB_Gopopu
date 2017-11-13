<div class="content">
	<h3 class="text-center">User Registration</h3>
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
	<?php echo form_open('user/input_simpan'); ?>
		<div class="form1">
			<p style="color: #DCDCDC; margin-bottom: 7px;" class="text-left-force">Username</p>
			<input type="text" name="username" placeholder="Username" required>
			<p style="color: #DCDCDC; margin-bottom: 7px;" class="text-left-force">Password</p>
			<input type="password" name="password" placeholder="Password" required>
			<p style="color: #DCDCDC; margin-bottom: 7px;" class="text-left-force">Re-type Password</p>
			<input type="password" name="re-password" placeholder="Re-type Password">
			<p style="color: #DCDCDC; margin-bottom: 7px;" class="text-left-force">Email</p>
			<input type="email" name="email" placeholder="Email" required>
			<p style="color: #DCDCDC; margin-bottom: 7px;" class="text-left-force">Nama</p>
			<input type="text" name="nama" placeholder="Nama" required>
			<p style="color: #DCDCDC; margin-bottom: 7px;" class="text-left-force">NIM</p>
			<input type="text" name="nim" placeholder="NIM" required>
		</div>
		<div class="form2">
			<p style="color: #DCDCDC; margin-bottom: 7px;" class="text-left-force">Alamat</p>
			<textarea rows="5" name="alamat"></textarea>
			<p style="color: #DCDCDC; margin-bottom: 7px;" class="text-left-force">Kota</p>
			<select name="kota">
				<option>---- Pilih Kota ----</option>
				<option>Bandung</option>
				<option>Jakarta</option>
				<option>Jogja</option>
			</select>
			<table width="100%" style="margin-bottom: 10px; margin-top: 5px;">
				<tr>
					<td class="text-left-force" style="color: #DCDCDC">Jenis Kelamin</td>
					<td class="text-right"><input type="radio" name="jk" value="L">Pria &nbsp <input type="radio" name="jk" value="p">Wanita</td>
				</tr>
			</table>
			<table width="100%" style="margin-bottom: 10px;">
				<tr>
					<td class="text-left-force" style="color: #DCDCDC">Hobi</td>
					<td class="text-right">
						<input type="checkbox" name="hobi[]" value="coding"> Coding 
						<input type="checkbox" name="hobi[]" value="ps"> PSan 
						<input type="checkbox" name="hobi[]" value="bilyard"> Bilyard
					</td>
				</tr>
			</table>
			<p style="color: #DCDCDC; margin-bottom: 7px;" class="text-left-force">Deskripsi</p>
			<textarea rows="5" name="deskripsi"></textarea>
		</div>
		<div style="clear: both"></div>
		<div class="bottom">
			<button type="submit">DAFTAR</button>
			<button type="reset">RESET</button>
			<a href="<?php echo base_url()?>index.php/user" class="wow">KEMBALI</a>
		</div>
	<?php echo form_close();?>
</div>
	

