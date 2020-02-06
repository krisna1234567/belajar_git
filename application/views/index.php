<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud</title>
</head>
<body>
    
      <center><a href="<?php echo site_url('Main/tambah_data'); ?>">Tambah Data </a></center>
    <table border="1" style="margin: 20px auto;">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Email</td>
            <td>Aktifitas</td>
            <td>Check In</td>
            <td>Check Out</td>
            <td>Aksi</td>
        </tr>
       <?php
        $no =1;
            foreach($tamu as $tm){
               
       ?>
        <tr>
            <td><?= $no; ?></td>
            <td><?= $tm->nama; ?></td>
            <td><?= $tm->email; ?></td>
            <td><?= $tm->aktifitas; ?></td>
            <td><?= $tm->check_in; ?></td>
          
            <td>
                <?php
                    $tes = $tm->check_out;
                    if($tes !=""){
                        echo $tes;
                    }else{
                        echo "Belum Check Out";
                    } ?>
            </td> 
            <td>
                <a href="<?php echo site_url('Main/edit/');?><?php echo $tm->id_bukutamu;?>">Edit</a> || 
                <a href="<?php echo site_url('Main/delete/');?><?php echo $tm->id_bukutamu;?>">Delete</a> ||
                <a href="<?php echo site_url('Main/proses_checkout/');?><?php echo $tm->id_bukutamu;?>">Check-Out</a>
            </td>
        </tr>
        <?php $no++; } ?>
    
    </table>
</body>
</html>