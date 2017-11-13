<!DOCTYPE html>
<html>
<head>
  <title>Report Table</title>
  <style type="text/css">
    #outtable{
      padding: 20px;
      border:1px solid #e3e3e3;
      width:700px;
      border-radius: 5px;
    }
 
    .short{
      width: 50px;
    }
 
    .normal{
      width: 150px;
    }
 
    table{
      border-collapse: collapse;
      font-family: arial;
      color:#5E5B5C;
    }
 
    thead th{
      text-align: left;
      padding: 10px;
    }
 
    tbody td{
      border-top: 1px solid #e3e3e3;
      padding: 10px;
    }
 
    tbody tr:nth-child(even){
      background: #F6F5FA;
    }
 
    tbody tr:hover{
      background: #EAE9F5
    }
  </style>
</head>
<body>
	<div id="outtable">
	  <table>
	  	<thead>
	  		<tr>
	  			<th class="short">#</th>
	  			<th class="normal">Username</th>
	  			<th class="normal">NIM</th>
          <th class="normal">Nama</th>
          <th class="normal">Email</th>
          <th class="normal">JK</th>
	  			<th class="normal">Kota</th>
	  		</tr>
	  	</thead>
	  	<tbody>
	  		<?php $no=1; ?>
	  		<?php foreach($user as $u): ?>
	  		  <tr>
	  			<td><?php echo $no; ?></td>
	  			<td><?php echo $u->username; ?></td>
	  			<td><?php echo $u->nim; ?></td>
          <td><?php echo $u->nama; ?></td>
          <td><?php echo $u->email; ?></td>
          <td><?php echo $u->jenis_kelamin; ?></td>
	  			<td><?php echo $u->kota_asal; ?></td>
	  		  </tr>
	  		<?php $no++; ?>
	  		<?php endforeach; ?>
	  	</tbody>
	  </table>
	 </div>
</body>
</html>