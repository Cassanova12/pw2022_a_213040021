<?php
// function

// Built in Function
// date();
echo date("l, j F Y");
echo "<hr>";

// time()
echo time();
// UNIX Timestamp / EPOCH Time
// Dektik yang sudah berlalu sejak 1 januari 1970
echo "<br>";
echo time() + 60 * 60 * 24;
echo "<hr>";
echo date("l, j F Y", time() - 60 * 60 * 24 * 100);
echo "<hr>";
// mk time(0,0,0,0,0,0,)
// mendapatkan detik pada tanggal tertentu
// jam,menit,detik,bulan,tanggal,tahun
echo mktime(0,0,0,3,5,2022);
echo "<hr>";
echo date("l", mktime(0,0,0,5,12,2003));
echo "<hr>";

// MATH
echo pow(2,3); // Pangkat (pakai koma)
echo "<br>";
echo rand(1,10); // (pakai koma)
echo "<br>";
// Pembulatan 
// round(), ceil(), floor()
echo round(2.9); // Terdekat (pakai titik)
echo "<br>";
echo ceil(2.1); // ke atas (ceiling / langit-langit ) (pakai titik)
echo "<br>";
echo floor(2.9); // ke bawah (lantai) (pakai titik)






?>