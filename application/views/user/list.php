<!-- MAIN CONTENT -->
	<div class="col-md-9">
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">Data Penduduk</h3>
		  </div>
		  <div class="panel-body">
		  	<div class="text-right text-white" style="margin-bottom: 15px;">
		        <?php echo anchor('user/input','<i class="ion-plus-round"></i> DATA USER', array('class' => 'btn btn-success'));?>
		        <?php echo anchor('user/report','<i class="ionicons ion-printer"></i> PRINT DATA', array('class' => 'btn btn-warning'));?>
		    </div>
		    <table class="table">
		    	<thead>
		    		<tr>
					  	<th>NIK</th>
					  	<th>Nama</th>
					  	<th>Email</th>
					  	<th>JK</th>
					  	<th>Aksi</th>
					</tr>
		    	</thead>
		    	<tbody>
		    		<?php
		    		foreach ($user as $u){
		    		echo"
		    		<tr>
		    			<td>$u->nik</td>
		    			<td>$u->nama</td>
		    			<td>$u->email</td>
		    			<td>$u->jenis_kelamin</td>
		    			<td>
		    				".anchor('user/detail/'.$u->nik,'<i class="ionicons ion-eye"></i>', array('class' => 'btn btn-primary'))."
		    				".anchor('user/edit/'.$u->nik,'<i class="ionicons ion-edit"></i>', array('class' => 'btn btn-info'))."
		    				".anchor('user/delete/'.$u->nik,'<i class="ionicons ion-android-delete"></i>', array('class' => 'btn btn-danger'))."
		    			</td>
		    		</tr>
		    		";
		    		}
		    		?>
		    	</tbody>
			</table>
		  </div>
		</div>
	</div>
	<!-- /MAIN CONTENT -->