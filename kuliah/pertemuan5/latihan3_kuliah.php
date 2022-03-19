<?php 
// Studi Kasus


$mahasiswa = [
    ["alif akbar", "213040021", "rajabiakbaralif@gmail.com", "teknik informatika"],
    ["alfarozi", "213040003", "alfarozi@gmail.com", "teknik robotik"],
    ["gilang", "21304004", "gilang@gmail.com", "teknik sastra"],
];

?>

<?php foreach($mahasiswa as $mhs)
{ ?>
<ul>
    <li>nama : <?php 
    echo $mhs[0]
    ?></li>
    <li>NPM : <?php 
    echo $mhs[1]?>
    </li>
    <li>Email : <?php 
    echo $mhs[2]
    ?></li>
    <li>Jurusan : <?php 
    echo $mhs[3]
    ?></li>
</ul>
<?php } ?>