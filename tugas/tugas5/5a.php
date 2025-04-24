<?php
// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Arneu Raysa",
        "nrp" => "243040089",
        "email" => "xxxxxxxxxx@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "arneu.jpg"
    ],

    [
        "nama" => "Almira Alifia Suparya Putri",
        "nrp" => "243040097",
        "email" => "almirap430@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "almira.jpg"
    ],

    [
        "nama" => "Vicka Aulia Shafira Nurwina",
        "nrp" => "243040067",
        "email" => "vickaas29@gmail.com ",
        "jurusan" => "Teknik Informatika",
        "gambar" => "vicka.jpg"
    ],

    [
        "nama" => "Try Noer Arreva",
        "nrp" => "243040073",
        "email" => "reva121427@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "areva.jpg"
    ],

    [
        "nama" => "Salwa Alya",
        "nrp" => "243040081",
        "email" => "salwaalya008@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "salwa.jpg"
    ],

    [
        "nama" => "Nazala Qisti",
        "nrp" => "243040084",
        "email" => "nazalaqist@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "nana.jpg"
    ],

    [
        "nama" => "Ghryshvi Tauhsiyah Dzickra",
        "nrp" => "243040086",
        "email" => "ghryshvi@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "ghryshvi.jpg"
    ],

    [
        "nama" => "Muhamad Nur Salam",
        "nrp" => "243040083",
        "email" => "nur.salam@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "alam.jpg"
    ],

    [
        "nama" => "Billy Wicaksono",
        "nrp" => "243040090",
        "email" => "billy@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "billy.jpg"
    ],

    [
        "nama" => "Afsal Prima Maula",
        "nrp" => "243040091",
        "email" => "afsal@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "afsal.jpg"
    ],
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