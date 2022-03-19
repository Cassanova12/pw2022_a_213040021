<?php
// Array Assiciative
// Array yang indexnya berupa string yang ber-asosiasi dengan nilai nya 

$mahasiswa = [
    [
        "nama" => "alif akbar", 
        "NPM" => "213040021", 
        "Email" => "rajabiakbaralif@gmail.com", 
        "Jurusan" => "teknik informatika"],
    [
        "nama" => "alfarozi", 
        "NPM" => "213040003", 
        "Email" => "alfarozi@gmail.com", 
        "Jurusan" =>  "teknik robotik"],
    [
        "nama" => "gilang", 
        "NPM" => "21304004", 
        "Email" => "gilang@gmail.com", 
        "Jurusan" => "teknik sastra"],
    [
        "nama" => "jangkrik", 
        "NPM" => "213040040", 
        "Email" => "jangkrik@gmail.com", 
        "Jurusan" => "teknik Industri"],
];
// var_dump($mahasiswa[2]["Email"]);
?>

<?php foreach($mahasiswa as $mhs)
{ ?>
<ul>
    <li>nama : <?php echo $mhs["nama"]?></li>
    <li>NPM : <?php echo $mhs["NPM"]?></li>
    <li>Email : <?php echo $mhs["Email"]?></li>
    <li>Jurusan : <?php echo $mhs["Jurusan"]?></li>
</ul>
    <?php } ?>