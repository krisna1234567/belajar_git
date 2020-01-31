<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD || Tambah Data</title>
</head>
<body>
    <form method="POST" action="<?php echo site_url('Main/proses_tambahdata');  ?>">
    <table>
        <tr>
            <td>Nama :<input type="text" name="nama"></td>
            <td>Email :<input type="text" name="email"></td>
            <td>Aktifitas :<input type="text" name="aktifitas"></td>
            <td><input type="submit" name="proses_tambahdata" value="Check In"></td>
        </tr>
    </table>
    
</body>
</html>