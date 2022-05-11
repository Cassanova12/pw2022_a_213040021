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




?>