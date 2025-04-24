<?php
// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Arneu Raysa",
        "nrp" => "243040089",
        "email" => "xxxxxxxxxx@gmaail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "foto1.jpg"
    ],

    [
        "nama" => "Ixxxx Nxx Rxxxxx",
        "nrp" => "1012xxxxx",
        "email" => "xxxxxxxxxx@gmaail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "foto2.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associative</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li>
                <img src="img/<?= $m["gambar"]; ?>" alt="">
            </li>
            <li>Nama: <?= $m["nama"]; ?></li>
            <li>NIM: <?= $m["nrp"]; ?></li>
            <li>Email: <?= $m["email"]; ?></li>
            <li>Jurusan: <?= $m["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>