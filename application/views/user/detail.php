<!-- MAIN CONTENT -->
	<div class="col-md-9">
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">Detail Data Penduduk</h3>
		  </div>
		  <div class="panel-body">
		  	<div class="text-right text-white" style="margin-bottom: 15px;">
		        <?php echo anchor('user','<i class="ionicons ion-android-arrow-back"></i> Kembali', array('class' => 'btn btn-primary'));?>
		    </div>
		    <div>
		    	<dl class="dl-horizontal">
				  <dt>NIK</dt>
				  <dd><?php echo $user['nik']; ?></dd>
				</dl>
				<dl class="dl-horizontal">
				  <dt>Nama</dt>
				  <dd><?php echo $user['nama']; ?></dd>
				</dl>
				<dl class="dl-horizontal">
				  <dt>Email</dt>
				  <dd><?php echo $user['email']; ?></dd>
				</dl>
				<dl class="dl-horizontal">
				  <dt>Tempat Lahir</dt>
				  <dd><?php echo $user['tempat_lahir']; ?></dd>
				</dl>
				<dl class="dl-horizontal">
				  <dt>Tanggal Lahir</dt>
				  <dd><?php echo $user['tanggal_lahir']; ?></dd>
				</dl>
				<dl class="dl-horizontal">
				  <dt>Alamat</dt>
				  <dd><?php echo $user['alamat']; ?></dd>
				</dl>
				<dl class="dl-horizontal">
				  <dt>Kota Asal</dt>
				  <dd><?php echo $user['kota_asal']; ?></dd>
				</dl>
				<dl class="dl-horizontal">
				  <dt>Agama</dt>
				  <dd><?php echo $user['agama']; ?></dd>
				</dl>
				<dl class="dl-horizontal">
				  <dt>Jenis Kelamin</dt>
				  <dd><?php echo $user['nik']; ?></dd>
				</dl>
				<dl class="dl-horizontal">
				  <dt>Status</dt>
				  <dd><?php echo $user['status']; ?></dd>
				</dl>
				<dl class="dl-horizontal">
				  <dt>Pekerjaan</dt>
				  <dd><?php echo $user['pekerjaan']; ?></dd>
				</dl>
				<dl class="dl-horizontal">
				  <dt>Kewarganegaraan</dt>
				  <dd><?php echo $user['kewarganegaran']; ?></dd>
				</dl>
				<dl class="dl-horizontal">
				  <dt>Deskripsi</dt>
				  <dd><?php echo $user['deskripsi']; ?></dd>
				</dl>
				<dl class="dl-horizontal">
				  <dt>Foto</dt>
				  <dd><img src="<?php echo asset_url()?>/upload/<?php echo $user['foto']; ?>" width="200px"></dd>
				</dl>
		    </div>
		  </div>
		</div>
	</div>
	<!-- /MAIN CONTENT -->