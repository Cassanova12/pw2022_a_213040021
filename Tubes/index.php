<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// Pagination
// Kongfigurasi
$jumlahDataPerHalaman = 15;
$jumlahData = count(query("SELECT * FROM hewan_a"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = ( isset($_GET["halaman"])) ? $_GET ["halaman"] : 1;
$awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;



$hewan = query("SELECT * FROM hewan_a LIMIT $awalData, $jumlahDataPerHalaman");

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

  
    <!-- navbar -->
    <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Jenis Jenis Hewan</a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="tambah.php">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled">Disabled</a>
      </div>
    </div>

    <!--  -->
    <form action = "" method = "POST" class="d-flex">
      <input class="form-control me-2" name="keyword" type="search" placeholder="Search" aria-label="Search" autocomplete="off" id="keyword">
      <button class="btn btn-outline-primary" type="submit" name="cari" id="tombol-cari"><i class="bi bi-search"></i></button>
    </form>
    <!--  -->

  </div>
</nav>
    <!-- a -->
    
<!-- <h1>Jenis Jenis Hewan </h1> -->
<div class="container">
<a class="btn btn-primary" href="tambah.php">Tambah Data Hewan</a> <a class="btn btn-primary" href="logout.php">Logout</a>
<br><br>



<!-- <form action="" method="post">

    <input type="text" name="keyword" size="40" autofocus placeholder="Masukan Pencaharian..." 
    autocomplete="off">
    <button type="submit" name="cari">Cari</button>


</form> -->

<!-- Navigasi  -->

<?php if( $halamanAktif > 1) : ?>
<a class="badge bg-primary" href ="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
<?php endif; ?>

<?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
    <?php if( $i == $halamanAktif ) : ?>
        <a class="badge bg-info" href="?halaman=<?= $i; ?>" style="font-weight: bold; color: black;"><?= $i; ?></a>
    <?php else : ?>
        <a class="badge bg-info" href="?halaman=<?= $i; ?>"><?= $i; ?></a>
    <?php endif; ?>
<?php endfor; ?>

<?php if( $halamanAktif < $jumlahHalaman ) : ?>
<a class="badge bg-secondary" href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
<?php endif; ?>

<br>

<br>
<div id="container">
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
    <div class="container">
      <div class="row">
        <div class="col">
          <footer class="bd-footer py-5">
            <div class="container py-5">
              <div class="row">
                <div class="col-lg-4 mb-3">
                  <a
                    class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none"
                    href="https://www.instagram.com/alif.rjb/"
                    aria-label="Bootstrap"
                  >
                    <img
                      src="img/Gua.png"
                      class="border border-danger rounded-circle"
                      width="50"
                      alt="Photo saya"
                    />
                    <span class="m-2 tr"><h5>Admin</h5></span>
                  </a>
                  <ul class="list-unstyled small text-muted">
                    <li class="mb-2">
                      Di design oleh 
                      <a
                        href="https://www.facebook.com/alifakbar.rajabi/"
                        target="_blank"
                        class="text-decoration-none"
                        >FILA RABKAR IJABAR</a
                      >
                      Dengan bantuan
                      <a
                        href="https://getbootstrap.com/"
                        class="text-decoration-none"
                        >Bootstrap v5.1.3</a
                      >.
                    </li>
                    <li class="mb-2">
                      ©2022 dibuat by
                      <a
                        href="https://cassanova12.github.io/TEMPE-Quu/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-decoration-none tr"
                        >iip</a
                      >
                    </li>
                  </ul>
                  <hr class="tr" />
                </div>
                <div class="col-lg-2 offset-lg-1 mb-3 mt-3">
                  <h5 class="tr">Tautan</h5>
                  <ul class="list-unstyled">
                    <li class="mb-2">
                      <a
                        href="https://www.youtube.com/c/WebProgrammingUNPAS"
                        class="text-decoration-none"
                        >Referensi</a
                      >
                    </li>
                    <li class="mb-2">
                      <a
                        href="https://getbootstrap.com/"
                        class="text-decoration-none"
                        >Website Support</a
                      >
                    </li>
                  </ul>
                  <hr class="tr" />
                  <!-- <hr /> -->
                </div>
                <!-- <hr /> -->
                <div class="col-lg-4 offset-lg-1 mb-3 mt-3">
                  <h5 class="tr">Akun</h5>
                  <ul class="list-unstyled">
                    <li class="mb-2">
                      <a
                        href="https://myaccount.google.com/?hl=en&utm_source=OGB&utm_medium=act"
                        class="fs-6 text-decoration-none"
                        ><i class="m-2 bi bi-google"></i
                        >rajabiakbaralif@gmail.com</a
                      >
                    </li>
                    <li class="mb-2">
                      <a
                        href="https://www.facebook.com/alifakbar.rajabi/"
                        class="text-decoration-none"
                        ><i class="m-2 bi bi-facebook"></i>Alif Akbar R</a
                      >
                    </li>
                    <li class="">
                      <a
                        href="https://cassanova12.github.io/"
                        class="m-2 text-decoration-none"
                        ><i class="me-2 bi bi-display"></i>My First Web</a
                      >
                    </li>
                  </ul>
                  <hr class="tr" />
                  <!-- <hr /> -->
                </div>
                <!-- <hr /> -->
              </div>
            </div>
          </footer>
          <!--  -->
        </div>
      </div>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="js/script.js"></script>
</body>
</html>