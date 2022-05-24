<?php 
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
</head>
<body>
    <h1>Tambah data hewan</h1>    

    <form action="" method="post" enctype="multipart/form-data">
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

    </form>



</body>
</html>