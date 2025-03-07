<?php
// Pengulangan / LOOP / LOOPING
// While(kondisi) {aksi} rumus untuk menulis kondisi
// Komponen While 
// 1. Nilai awal / inialisasi 
// 2. Kondisi terminasi / kapan harus berhenti
// 3. Increment / deckerment

// Maju
$i = 1;
while ($i <= 5) {
    echo "Hello World! $i x <br>";
    $i = $i + 1;
}

// Mundur
$i = 5;
while ($i >= 1) {
    echo "Hello World! $i x <br>";
    $i = $i + -1;
}

// Ganjil
$i = 1;
while ($i <= 10) {
    echo "Hello World! $i x <br>";
    $i = $i + 2;
}

// Genap
$i = 2;
while ($i <= 10) {
    echo "Hello World! $i x <br>";
    $i = $i + 2;
}
