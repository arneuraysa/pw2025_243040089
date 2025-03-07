<?php
// Function untuk menghitung luas lingkaran
function hitungLuasLingkaran($r)
{
    $luas = 3.14 * $r * $r;
    echo "<h4>Menghitung Luas Lingkaran</h4>";
    echo "Jari-jari = $r cm.<br>";
    echo "Luas Lingkaran = $luas cm²<br>";
}

// Function untuk menghitung keliling lingkaran
function hitungKelilingLingkaran($r)
{
    $keliling = 2 * 3.14 * $r;
    echo "<h4>Menghitung Keliling Lingkaran</h4>";
    echo "Jari-jari = $r cm.<br>";
    echo "Keliling Lingkaran = $keliling cm<br>";
}

// Memanggil function dengan nilai jari-jari berbeda
hitungLuasLingkaran(10);
echo "<hr>";
hitungKelilingLingkaran(20);
