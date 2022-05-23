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

    $Gambar = htmlspecialchars($data["Gambar"]);
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

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM hewan_a WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function edit($data) {
    global $conn;

    $id = $data["id"];
    $Gambar = htmlspecialchars($data["Gambar"]);
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