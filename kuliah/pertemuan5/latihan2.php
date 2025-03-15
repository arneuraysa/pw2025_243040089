<?php
// Menghitung volume 2 kubus
// diketahui kubus a dan kubus b
$sisi_a = 9;
$sisi_b = 4;
// hitung volume a
$volume_a = $sisi_a * $sisi_a * $sisi_a;
// hitung volume b
$volume_b = $sisi_b * $sisi_b * $sisi_b;
// jumlahkan keduanya
$total_volume_ab = $volume_a + $volume_b;
// cetak hasilnya ke layar
$total_volume_ab;

// function boros
function hitung_volume_dua_kubus($a, $b)
{
    $volume_a = $a * $a * $a;
    $volume_b = $b * $b * $b;
    $total_volume_ab = $volume_a + $volume_b;
    return $total_volume_ab;
}

// function simpel
// function hitung_volume_dua_kubus($a, $b) {
//     return $a * $a * $a + $b * $b * $b;
// }

echo "Total volume kubus 9 & 4:";
echo hitung_volume_dua_kubus(9, 4);
echo "<br>";
echo "Hitung volume kubus 10 & 15";
echo hitung_volume_dua_kubus(10, 15);
