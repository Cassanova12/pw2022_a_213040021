<?php 
// Mengkoneksikan ke database
$conn = mysqli_connect("localhost", "root", "", "tubes");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }

    return $rows;
}
function tambah($data) {
    global $conn;

    // upload gambar

    $Gambar = upload();
     if( !$Gambar ) {
         return false;
     }

    $Nama = htmlspecialchars($data["Nama"]);
    $NamaLatin = htmlspecialchars($data["NamaLatin"]);
    $Jenis = htmlspecialchars($data["Jenis"]);

    $query = "INSERT INTO hewan_a
                VALUES
              ('', '$Nama', '$NamaLatin', '$Jenis', '$Gambar')
              ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function upload() {
    
    $namaFile = $_FILES['Gambar']['name'];
    $ukuranFile = $_FILES['Gambar']['size'];
    $error = $_FILES['Gambar']['error'];
    $tmpName = $_FILES['Gambar']['tmp_name'];

    // Check Apakah ada gambar yang diupload 
    if( $error === 4 ) {
        echo "<script>
                alert('Please Choose Image!');
              </script>";
        return false;
    }

    // Check apakah yang di Up adalah Gambar?
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
                alert('yang bener kalo upload!');
              </script>";
        return false;
    }
    // Check apakah ukuran nya Badag/engga?
    if( $ukuranFile > 10000000) {
        echo "<script>
                alert('Ukuran gambarnya kegedean brodi');
              </script>";
        return false;
    }

    // Lolos Pengecheck'an 
    // Generate gambar nama baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}

    


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM hewan_a WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function edit($data) {
    global $conn;

    $id = $data["id"];

    $gambarLama = htmlspecialchars($data["gambarLama"]);
    // Check apakah user pilih gambar baru / tydact?
    if( $_FILES['Gambar']['error'] === 4 ) {
        $Gambar = $gambarLama;
    } else {
        $Gambar = upload();
    }

    
    $Nama = htmlspecialchars($data["Nama"]);
    $NamaLatin = htmlspecialchars($data["NamaLatin"]);
    $Jenis = htmlspecialchars($data["Jenis"]);

    $query = "UPDATE hewan_a SET
                Gambar = '$Gambar',
                Nama = '$Nama',
                Nama_Latin = '$NamaLatin',
                Jenis = '$Jenis'
              WHERE id = $id;
             ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function cari($keyword) {
    $query = "SELECT * FROM hewan_a 
                WHERE 
              nama LIKE '%$keyword%' OR 
              nama_latin LIKE '%$keyword%' OR
              jenis LIKE '%$keyword%'
              ";
    return query($query); 
}

?>