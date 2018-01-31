<!-- MAIN CONTENT -->
	<div class="col-md-9">
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">Edit Data Penduduk</h3>
		  </div>
		  <div class="panel-body">
		  	<div class="text-right text-white" style="margin-bottom: 15px;">
		        <?php echo anchor('user','<i class="ionicons ion-android-arrow-back"></i> Kembali', array('class' => 'btn btn-primary'));?>
		    </div>
		    <div>
		    	<?php echo form_open_multipart('user/edit_simpan'); ?>
		    	<?php echo form_hidden('id',$this->uri->segment(3)); ?>
				  <div class="form-group">
				    <label>NIK*</label>
				    <input type="number" max="9999999999999999" name="nik" class="form-control" placeholder="NIK max 16 number" value="<?php echo $user['nik'] ?>" required >
				  </div>
				  <div class="form-group">
				    <label>Nama*</label>
				    <input type="text" name="nama" value="<?php echo $user['nama'] ?>" class="form-control" placeholder="Nama" required>
				  </div>
				  <div class="form-group">
				    <label>Email*</label>
				    <input type="email" name="email" value="<?php echo $user['email'] ?>" class="form-control" placeholder="Email" required>
				  </div>
				  <div class="row">
				  	<div class="col-md-4">
					  	<div class="form-group">
						    <label>Tempat Lahir*</label>
						    <input type="text" name="tempat_lahir" value="<?php echo $user['tempat_lahir'] ?>" class="form-control" placeholder="Tempat Lahir" required>
						</div>
					</div>
					<div class="col-md-8">
						<div class="form-group">
						    <label>Tanggal Lahir*</label>
						    <input type="date" name="tanggal" value="<?php echo $user['tanggal_lahir'] ?>" class="form-control" required>
						</div>
					</div>
				  </div>
				    <div class="form-group">
						<label>Alamat*</label>
						<textarea name="alamat" class="form-control" required><?php echo $user['alamat'] ?></textarea>
					</div>
					<div class="form-group">
						<label>Kota</label>
						<input type="text" name="kota_asal" value="<?php echo $user['kota_asal'] ?>" class="form-control" placeholder="Kota Asal">
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Agama</label>
								<select class="form-control" name="agama">
									<option value="0"><?php echo $user['agama'] ?></option>
									<option>Islam</option>
									<option>Kristen</option>
									<option>Katolik</option>
									<option>Hindu</option>
									<option>Budha</option>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Jenis Kelamin</label><br />
								<label class="checkbox-inline">
								  <input type="checkbox" name="jenis_kelamin" value="L"> Pria
								</label>
								<label class="checkbox-inline">
								  <input type="checkbox" name="jenis_kelamin" value="P"> Wanita
								</label>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Status Perkawinan</label><br />
								<label class="checkbox-inline">
								  <input type="checkbox" name="status" value="kawin"> Kawin
								</label>
								<label class="checkbox-inline">
								  <input type="checkbox" name="status" value="belum kawin"> Belum Kawin
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Pekerjaan</label>
						<input type="text" name="pekerjaan" value="<?php echo $user['pekerjaan'] ?>" class="form-control" placeholder="Pekerjaan">
					</div>
					<div class="form-group">
						<label>Kewarganegaraan</label>
						<input type="text" name="kewarganegaran" value="<?php echo $user['kewarganegaran'] ?>" class="form-control" placeholder="Kewarganegaraan">
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<textarea name="deskripsi" class="form-control"><?php echo $user['deskripsi'] ?></textarea>
					</div>
				    <div class="form-group">
						<label>Foto</label>
						<input type="file" name="foto" class="form-control">
					</div>
				  <button type="submit" class="btn btn-success">Edit Data</button>
				</form>
		    </div>
		  </div>
		</div>
	</div>
	<!-- /MAIN CONTENT -->