<div class="content">
	<h3 class="text-center" style="padding-bottom: 20px;">Detail data "<?php echo $user['username']; ?>" </h3>
	<table width="100%">
		<tr>
			<td width="40%" style="padding-left: 25%; padding-top: 1%; padding-bottom: 1%">Username</td>
			<td width="60%" style="padding-left: 15%;">: <?php echo $user['username']; ?></td>
		</tr>
		<tr>
			<td width="40%" style="padding-left: 25%; padding-top: 1%; padding-bottom: 1%">Nama</td>
			<td width="60%" style="padding-left: 15%;">: <?php echo $user['nama']; ?></td>
		</tr>
		<tr>
			<td width="40%" style="padding-left: 25%; padding-top: 1%; padding-bottom: 1%">NIM</td>
			<td width="60%" style="padding-left: 15%;">: <?php echo $user['nim']; ?></td>
		</tr>
		<tr>
			<td width="40%" style="padding-left: 25%; padding-top: 1%; padding-bottom: 1%">Email</td>
			<td width="60%" style="padding-left: 15%;">: <?php echo $user['email']; ?></td>
		</tr>
		<tr>
			<td width="40%" style="padding-left: 25%; padding-top: 1%; padding-bottom: 1%">Alamat</td>
			<td width="60%" style="padding-left: 15%;">: <?php echo $user['alamat']; ?></td>
		</tr>
		<tr>
			<td width="40%" style="padding-left: 25%; padding-top: 1%; padding-bottom: 1%">Kota Asal</td>
			<td width="60%" style="padding-left: 15%;">: <?php echo $user['kota_asal']; ?></td>
		</tr>
		<tr>
			<td width="40%" style="padding-left: 25%; padding-top: 1%; padding-bottom: 1%">Jenis Kelamin</td>
			<td width="60%" style="padding-left: 15%;">: <?php if ($user['jenis_kelamin'] == 'L'){ echo "Laki-laki"; } else { echo "Perempuan"; } ?></td>
		</tr>
		<tr>
			<td width="40%" style="padding-left: 25%; padding-top: 1%; padding-bottom: 1%">Hobi</td>
			<td width="60%" style="padding-left: 15%;">: <?php echo $user['hobi']; ?></td>
		</tr>
		<tr>
			<td width="40%" style="padding-left: 25%; padding-top: 1%; padding-bottom: 1%">Deskripsi</td>
			<td width="60%" style="padding-left: 15%;">: <?php echo $user['deskripsi']; ?></td>
		</tr>
	</table>
	<div class="bottom" style="text-align: center;">
		<a href="<?php echo base_url()?>index.php/user" class="wow">KEMBALI</a>
	</div>
</div>