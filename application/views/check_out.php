<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD || Edit Data</title>
</head>
<body>
    <?php foreach($checkout as $check){ ?>
    <form method="POST" action="<?php echo site_url('Main/proses_checkout'); ?>">
    <table>
        <tr>
           <input type="hidden" name="id_bukutamu" value="<?= $check->id_bukutamu; ?>">
            <!-- <td>Nama :<input type="text" disabled="true" name="nama" value="<?= $check->nama; ?>"></td>
            <td>Email :<input type="text" disabled="true" name="email" value="<?= $check->email;?>"></td>
            <td>Aktifitas :<input type="text" disabled="true" name="aktifitas" value="<?= $check->aktifitas; ?>"></td>
            <td>Check-Out :<input type="date" name="checkout"></td> -->
            <td><input type="submit" name="proses_checkout" value="Check Out"></td>
        </tr>
    </table>
    </form>
    <?php } ?>
</body>
</html>