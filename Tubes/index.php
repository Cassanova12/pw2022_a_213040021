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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
<h1>Jenis Jenis Hewan </h1>

<a href="tambah.php">Tambah Data Hewan</a>
<br><br>

<table class = "table-bordered table"  cellpadding="10" cellspacing="0">
    
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Nama Latin</th>
        <th>Jenis</th>

    </tr>

    <?php $i = 1; ?>
    <?php foreach( $hewan as $row) : ?>

    <tr>
        <td><?= $i; ?></td>  
        <td>
            <a class="btn btn-primary" href="edit.php">edit</a> |   
            <a class="btn btn-primary" href="hapus.php?id=<?= $row ["id"]; ?>" onclick="return confirm('Anda yakin ingin menghapusnya?')">hapus</a>
        </td>
        <td><img src="img/<?= $row ["gambar"]; ?>" width="200   "></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["nama_latin"]; ?></td>
        <td><?= $row["jenis"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>