<?php 
// Mengkoneksikan ke database
$conn = mysqli_connect("localhost", "root", "", "tubes");

// mengambil data dari tabel hewan_a atau Query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM hewan_a");

// mengambil data hewan a dari object result
// mysqli_fetch_row() // menggembalikan array numerik 
// mysqli_fetch_assoc()
// mysqli_fetch_array()
// mysqli_fetch_object()

// $hwn = mysqli_fetch_row($result);
// var_dump($hwn );

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
    
<h1>Daftar Hewan A</h1>

<table border="1" cellpadding="10" cellspacing="0">
    
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Nama Latin</th>
        <th>Jenis</th>

    </tr>

    <?php $i = 1; ?>
    <?php while( $row = mysqli_fetch_assoc($result) ) : ?>

    <tr>
        <td><?= $i; ?></td>  
        <td>
            <a href="">ubah</a> |   
            <a href="">edit</a>
        </td>
        <td><img src="img/<?= $row ["gambar"]; ?>" width="70"></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["nama_latin"]; ?></td>
        <td><?= $row["jenis"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>

</table>

</body>
</html>