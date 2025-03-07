<?php
function urutanAngka($angka)
{
    $num = 1; // Angka awal
    for ($i = 1; $i <= $angka; $i++) { // Loop untuk jumlah baris
        for ($j = 1; $j <= $i; $j++) { // Loop untuk jumlah angka dalam baris
            echo $num . " ";
            $num++;
        }
        echo "<br>"; // Pindah ke baris berikutnya
    }
}

// Panggil function dengan parameter 5
urutanAngka(5);
