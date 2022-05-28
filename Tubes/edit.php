<?php 
require "functions.php";

// ambil data dari URL 
$id = $_GET["id"];
// query data hewan berdasarkan id
$hewan = query("SELECT * FROM hewan_a WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum 
if( isset($_POST["submit"]) ) {
    
    // cek apakah data berhasil diedit / tidak? 
    if (edit($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
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
    <title>Edit Data Hewan</title>
</head>
<body>
    <h1>Edit data hewan</h1>    

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $hewan["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $hewan["gambar"]; ?>">
        <ul>
            <li>
                <label for="Gambar">Gambar :</label> <br>
                <img src="img/<?= $hewan['gambar']; ?>" width="120"><br>
                <input type="file" name="Gambar" id="Gambar">
            </li> 
            <li>
                <label for="Nama">Nama :</label>
                <input type="text" name="Nama" id="Nama" value="<?= $hewan["nama"]; ?>">
            </li>
            <li>
                <label for="Nama Latin">Nama Latin :</label>
                <input type="text" name="NamaLatin" id="NamaLatin" value="<?= $hewan["nama_latin"]; ?>">
            </li>
            <li>
                <label for="Jenis">Jenis :</label>
                <input type="text" name="Jenis" id="Jenis" value="<?= $hewan["jenis"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>

    </form>



</body>
</html>