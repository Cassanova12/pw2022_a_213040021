<?php 
require '../functions.php';

$keyword = $_GET['keyword'];
$query = "SELECT * FROM hewan_a 
            WHERE 
          nama LIKE '%$keyword%' OR 
          nama_latin LIKE '%$keyword%' OR
          jenis LIKE '%$keyword%'
       ";
$hewan_a = query($query);
?>
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
    <?php if( !empty($hewan_a)) : ?>
    <?php foreach( $hewan_a as $row) : ?>

    <tr>
        <td><?= $i; ?></td>  
        <td>
            <a class="btn btn-primary" href="edit.php?id=<?= $row["id"]; ?>">edit</a>    |   
            <a class="btn btn-primary" href="hapus.php?id=<?= $row ["id"]; ?>" onclick="return confirm('Anda yakin ingin menghapusnya?')">hapus</a>
        </td>
        <td><img src="img/<?= $row ["gambar"]; ?>" width="120"></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["nama_latin"]; ?></td>
        <td><?= $row["jenis"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    <?php else :  ?>
    <tr>
        <td>
            Data TIdak Ditemukan
        </td>
    </tr>
    <?php  endif ; ?>
</table>