<?php
    $mahasiswa = [
        [
            "nama" => "Alif Akbar", 
            "NPM" => "213040021", 
            "Email" => "rajabiakbaralif@gmail.com", 
            "Jurusan" => "teknik informatika",
            "img" => "Alif A.jpeg"],
            
        [
            "nama" => "M.Alfarozi", 
            "NPM" => "213040003", 
            "Email" => "alfarozi@gmail.com", 
            "Jurusan" =>  "teknik robotik",
            "img" => "foto 1.jpeg"],
        [   
            "nama" => "Gilang R", 
            "NPM" => "213040004", 
            "Email" => "gilang@gmail.com", 
            "Jurusan" => "teknik sastra",
            "img" => "foto 2.jpeg"],
        [
            "nama" => "Faqih FKP", 
            "NPM" => "213040033", 
            "Email" => "faqih123@gmail.com", 
            "Jurusan" => "teknik Industri",
            "img" => "foto 3.jpeg"],
        [
            "nama" => "Fauzi Ilyas", 
            "NPM" => "213040032", 
            "Email" => "fauzi123@gmail.com", 
            "Jurusan" => "teknik musik",
            "img" => "foto 2.jpeg"],
        [
              "nama" => "Gilman Arief", 
              "NPM" => "213040042", 
              "Email" => "ariefgilman12@gmail.com", 
              "Jurusan" => "teknik lingkungan",
              "img" => "foto 3.jpeg"],
        [
              "nama" => "Malwi", 
              "NPM" => "213040015", 
              "Email" => "malwiedanuwu@gmail.com", 
              "Jurusan" => "teknik Pangan",
              "img" => "foto 2.jpeg"],
        [
              "nama" => "M.Irfan", 
              "NPM" => "213040019", 
              "Email" => "irfan321@gmail.com", 
              "Jurusan" => "teknik mesin",
              "img" => "foto 3.jpeg"],
        [
              "nama" => "Daffa Dhiya", 
              "NPM" => "213040006", 
              "Email" => "daffadhi21@gmail.com", 
              "Jurusan" => "Pendidikan Indonesia",
              "img" => "foto 2.jpeg"],
        [
              "nama" => "Muhammad Lutfi", 
              "NPM" => "213040015", 
              "Email" => "lutfhi45@gmail.com", 
              "Jurusan" => "Bahasa German",
              "img" => "foto 3.jpeg"]

    ];
    
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Detail Mahasiswa</title>
  </head>
  <body>

  <div class="container">
      <h1>Detail Mahasiswa</h1>
      <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="./img/<?= $_GET["gambar"]; ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="Alif Akbar R"><?= $_GET["nama"]; ?></h5>
        <p class="NPM"><?= $_GET["npm"]; ?></p>
        <p class="card-text"><?= $_GET["email"]; ?></p>
        <p class="card-text"><?= $_GET["jurusan"]; ?></small></p>
        <a href="kuliah_latihan3.php">Kembali</a>
      </div>
    </div>
  </div>
</div>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html> 