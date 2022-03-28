<?php 
// SUPERGLOBALS
// variable bawaan PHP yang bisa digunakan di manapun
// bentuknya ada array associative
// $_GET
// $_POST
// $_SERVER

// var_dump($_GET)




?>

<h1>Hallo,<?= $_GET["nama"]; ?></h1>

<ul>
    <li>
        <a href="kuliah_latihan2.php?nama=Alif Akbar&email=rajabiakbaralif&npm=213040021">Alif Akbar</a>
    </li>
    <li>    
        <a href="kuliah_latihan2.php?nama=Faqih Firdaus&email=faqihfirdaus12@gmail.com&npm=213040033">Faqih Fidaus</a>
    </li>
    <li>
        <a href="kuliah_latihan2.php?nama=Gilang R&email=gilangramadhan21&npm=213040004">Gilang R</a>
    </li>
</ul>