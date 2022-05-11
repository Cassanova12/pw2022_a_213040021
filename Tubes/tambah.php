<?php 
// koneksi ke DBMS 
$conn = mysqli_connect("localhost", "root", "", "tubes");

// cek apakah tombol submit sudah ditekan atau belum 
if( isset($_POST["submit"]) ) {
    // ambil data dari tiap elemen dalam form
    $Gambar = $_POST["Gambar"];
    $Nama = $_POST["Nama"];
    $NamaLatin = $_POST["NamaLatin"];
    $Jenis = $_POST["Jenis"];

    // querry insert data 
    $query = "INSERT INTO hewan_a
                 VALUES
              ('', '$Nama', '$NamaLatin', '$Jenis', '$Gambar')
            ";
    mysqli_query($conn, $query);

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

    <form action="" method="post">
        <ul>
            <li>
                <label for="Gambar">Gambar :</label>
                <input type="text" name="Gambar" id="Gambar">
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