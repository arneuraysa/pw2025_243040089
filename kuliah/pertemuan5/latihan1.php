<?php
// Function
// 1. built in fungsi bawaan
// 2. user defined function dibuat sendiri oleh user

// Date
echo "waktu saat ini <br>";
echo date("l, j-M-Y");
echo "<hr>";

// Time
echo "detik saat ini <br>";
echo time();
echo "<br>";
echo "detik 1 hari dari sekaang <br>";
echo time() + 60 * 60 * 24;
echo "<hr>";

// Date + Time
echo "hari ini:";
echo date("l");
echo "<br>";
echo "100 hari dari sekarang hari:";
echo date("l", time() + 60 * 60 * 24 * 100);

// Mktime (waktu yang kita mau)
echo mktime(9, 23, 0, 3, 11, 2025);
echo date("l", mktime(9, 23, 0, 3, 11, 2025));
echo date("l", mktime(10, 0, 0, 1, 11, 2021));
echo date("l, j-M-Y G. i s", mktime(10, 0, 0, 1, 11, 2021));
