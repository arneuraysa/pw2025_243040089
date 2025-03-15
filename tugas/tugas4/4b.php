<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 4b</title>
    <style>
        .underline-red {
            text-decoration: underline;
            text-decoration-color: red;
            text-decoration-thickness: 2px;
            color: black;
        }
    </style>
</head>

<body>
    <h2>Macam-macam perangkat keras komputer</h2>
    <ul>
        <?php
        // Membuat array awal dengan 6 elemen
        $hardware = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];

        // Menampilkan isi array menggunakan looping
        foreach ($hardware as $item) {
            echo "<li>$item</li>";
        }
        ?>
    </ul>

    <h2>Macam-macam perangkat keras komputer baru</h2>
    <ul>
        <?php
        // Menambah 2 elemen baru ke dalam array 
        array_push($hardware, "Card Reader", "Modem");

        // Mengurutkan array dalam urutan A-Z
        sort($hardware);

        // Menampilkan isi array yang telah diperbarui
        foreach ($hardware as $item) {
            // Menandai elemen yang baru ditambahkan dengan garis bawah merah
            if ($item == "Card Reader" || $item == "Modem") {
                echo "<li><span class='underline-red'>$item</span></li>";
            } else {
                echo "<li>$item</li>";
            }
        }
        ?>
    </ul>
</body>

</html>