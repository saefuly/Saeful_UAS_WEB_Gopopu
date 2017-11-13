<div class="content">
    <h3 class="text-center" style="margin-bottom: 15px;"><?php echo $judul; ?> </h3>
    <div class="text-right text-white" style="margin-bottom: 15px;">
        <?php echo anchor('user/input','<i class="ion-plus-round"></i> INPUT DATA USER', array('class' => 'text-white'));?>
    </div>
    

    <table width="100%" class="mytable">
        <thead>
            <tr>
                <th>USERNAME</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>EMAIL</th>
                <th colspan="3">AKSI</th>
            </tr>
        </thead>
        
        <?php
        foreach ($user as $u){
            echo "<tr>
                    <td class='text-center padding-vertical-medium'>$u->username</td>
                    <td class='text-center padding-vertical-medium'>$u->nim</td>
                    <td class='text-center padding-vertical-medium'>$u->nama</td>
                    <td class='text-center padding-vertical-medium'>$u->email</td>
                    <td class='text-center padding-vertical-medium'>".anchor('user/detail/'.$u->username,'<i class="ionicons ion-eye"></i>', array('class' => 'text-white'))."</td>
                    <td class='text-center padding-vertical-medium'>".anchor('user/edit/'.$u->username,'<i class="ionicons ion-edit"></i>', array('class' => 'text-white'))."</td>
                    <td class='text-center padding-vertical-medium'>".anchor('user/delete/'.$u->username,'<i class="ionicons ion-android-delete"></i>', array('class' => 'text-white'))."</td>
                </tr>";
        }
        ?>
    </table>
</div>
