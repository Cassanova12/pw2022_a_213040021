<?php 
// Membuat fungsi / definisi fungsi
function totalLuasDuaKubus($a, $b) {
$luas_a = $a * $a * $a; // boleh juga pow($a,3);
$luas_b = $b * $b * $b; // boleh juga pow($b,3);

$total = $luas_a + $luas_b;

return "total luas dari kubus A dengan sisi $a dan kubus B dengan sisi $b adalah $total";
}

echo totalLuasDuaKubus(9,4);
echo "<br>";
echo totalLuasDuaKubus(10,15);
echo "<br>";
echo totalLuasDuaKubus(100,200);



?>