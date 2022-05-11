<?php 
require 'functions.php';
$hewan = query("SELECT * FROM hewan_a");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
<h1>Daftar Hewan </h1>

<table border="1" cellpadding="10" cellspacing="0">
    
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Nama Latin</th>
        <th>JEMLIS</th>

    </tr>

    <?php $i = 1; ?>
    <?php foreach( $hewan as $row) : ?>

    <tr>
        <td><?= $i; ?></td>  
        <td>
            <a href="ubah.php">ubah</a> |   
            <a href="hapus.php">hapus</a>
        </td>
        <td><img src="img/<?= $row ["gambar"]; ?>" width="200   "></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["nama_latin"]; ?></td>
        <td><?= $row["jenis"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

</table>

</body>
</html>