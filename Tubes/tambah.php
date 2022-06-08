<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
  header("Location: login.php");
  exit;
}

require "functions.php";
// cek apakah tombol submit sudah ditekan atau belum 
if( isset($_POST["submit"]) ) {
    
    // cek apakah data berhasil ditambahkan / tidak? 
    if (tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Hewan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   

    <!-- <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="Gambar">Gambar :</label>
                <input type="file" name="Gambar" id="Gambar" required>
            </li>
            <li>
                <label for="Nama">Nama :</label>
                <input type="text" name="Nama" id="Nama">
            </li>
            <li>
                <label for="Nama Latin">Nama Latin :</label>
                <input type="text" name="NamaLatin" id="NamaLatin">
            </li>
            <li>
                <label for="Jenis">Jenis :</label>
                <input type="text" name="Jenis" id="Jenis">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>

    </form> -->

    <div class="container">
    <h1>Tambah data hewan</h1> 

      <a href="index.php" class="btn btn-primary">Kembali</a>
      
      <div class="row mt-3">
          <div class="col-8">


          <form action="" method="post" autocomplete="off" enctype="multipart/form-data">

            
                <div class="mb-3">
                  <label for="Nama" class="form-label">Nama :</label>
                  <input type="text" class="form-control" id="Nama" name="Nama"> 
                </div>

                <div class="mb-3">
                  <label for="NamaLatin" class="form-label">Nama latin :</label>
                  <input type="text" class="form-control" id="NamaLatin" name="NamaLatin"> 
                </div>

                <div class="mb-3">
                  <label for="Jenis" class="form-label">Jenis :</label>
                  <input type="text" class="form-control" id="Jenis" name="Jenis"> 
                </div>

                <div class="mb-3">
                  <label for="Gambar" class="form-label">Gambar :</label>
                  <input type="file" class="form-control" id="Gambar" name="Gambar"> 
                </div>

                <button type="submit" class="btn-primary" name="submit">Tambahin???</button>

            </div>
        </form>
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