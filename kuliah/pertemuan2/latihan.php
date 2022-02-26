<?php
  // pertemuan 2. membahas mengenal sintkas PHP
  // nilai: integer, string, boolean
  echo false;
  echo "<hr>";

  // VARIABLE
  // wadah untuk menyimpan NILAI
  // nama nya bebas, tidak boleh diawali angka
  // tidak boleh ada spasi
  $nama = 'Alif';
  echo $nama;
  echo "<br>";
  // bisa ditimpa / overwrite
  $nama = 'Akbar';
  echo $nama;
  echo "<hr>";

  // String
  // '',""
  echo "Jum'at";
  echo "<br>";
  // escaped character
  // \
  echo 'Alif ; "jum\'at"';
  echo "<br>";
  echo "Alif ; \"jum'at\"";
  echo "<br>";

  // interpolasi
  // Mencetak isi variable
  // Hanya digunakan oleh ""
  echo "halo nama saya $nama";
  echo "price: $200";
  echo "<hr>";

  // OPERATOR
  // Aritmatika
  // +, -, *, / , % (module / modulus / sisa bagi)
  echo (1 + 2) * 3 - 4; // KaBaTaKu
  echo "<br>";
  $alas = 10;
  $tinggi = 20;
  $luas_segi_tiga = ($alas * $tinggi) / 2;
  echo $luas_segi_tiga;
  echo "<br>";




  // Concat
  // Penggabung String
  // .
  $nama_depan = 'Alif';
  $nama_belakang = 'Akbar';
  echo $nama_depan . " " . $nama_belakang;
  echo "<hr>";

  // Perbandingan
  // <, >, <=, >=, ==, !=
  echo 1 < 5;
  echo "<br>";
  echo 10 == "10";
  echo "<hr>";

  // Identitas / Strict Comparison
  // ===, !==
  echo 10 === "10";
  echo "<hr>";

  // increment / Decrement
  // Penambahan / Pengurangan 1
  // ++, --
  $x = 10;
  echo ++$x;
  echo "<br>";
  echo $x;


  
?>