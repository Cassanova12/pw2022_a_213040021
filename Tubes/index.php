<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$hewan = query("SELECT * FROM hewan_a");

// Tombol cari Diclick

if( isset($_POST['cari']) ) {
    $hewan = cari($_POST['keyword']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>

  <a href="logout.php">Logout</a>
    <!-- navbar -->
    <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Jenis Jenis Hewan</a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="tambah.php">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled">Disabled</a>
      </div>
    </div>
    <form action = "" method = "POST" class="d-flex">
      <input class="form-control me-2" name="keyword" type="search" placeholder="Search" aria-label="Search" autocomplete="off">
      <button class="btn btn-outline-success" type="submit" name="cari"><i class="bi bi-search"></i></button>
    </form>
  </div>
</nav>
    <!-- a -->
    
<!-- <h1>Jenis Jenis Hewan </h1> -->
<div class="container">
<a class="btn btn-primary" href="tambah.php">Tambah Data Hewan</a>
<br><br>



<!-- <form action="" method="post">

    <input type="text" name="keyword" size="40" autofocus placeholder="Masukan Pencaharian..." 
    autocomplete="off">
    <button type="submit" name="cari">Cari</button>


</form> -->
<br>
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

</table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>