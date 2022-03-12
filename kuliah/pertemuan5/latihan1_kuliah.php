<?php
// ARRAY
// Array adalah variable yang dapat menampng lebih dari satu nilai









// Membuat Array
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat"]; // Cara baru
$bulan = array("Januari", "Februari", "Maret", "April"); // Cara lama
$myArray = [100, "Alif", true];


// Mencetak Array 
// Mencetak 1 elemen / nilai menggunakan indexnya, index dimulai dari 0 
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<hr>";

// Mencetak semua elemen pada array
// var_dump() atau print_r()
// khusus untuk debugging
var_dump($hari);
echo "<br>";
print_r($bulan); 
echo "<hr>";

// Mencetak menggunakan looping
// for
for($i = 0; $i < count($hari); $i++) {
    echo $hari[$i];
    echo "<br>";
}
echo "<hr>";

// foreach (Khusus untuk array)
foreach($bulan as $b) {
    echo $b;
    echo "<br>";
}

echo "<br>";

foreach ($hari as $key => $value) {
    echo "key; $key, Value; $value";
    echo "<br>";
}
echo "<hr>";

// Memanipulasi isi Array
// menambahkan elemen baru di akhir array
$hari[] = "Sabtu";
$hari[] = "Minggu";
var_dump($hari);


?>