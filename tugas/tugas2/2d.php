<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2d</title>
    <style>
        .catur {
            display: grid;
            grid-template-columns: repeat(5, 50px);
            width: 250px;
            height: 250px;
            border: 2px solid black;
        }

        .kotak {
            width: 50px;
            height: 50px;
        }

        .hitam {
            background-color: black;
        }

        .putih {
            background-color: white;
        }
    </style>
</head>
<body>
    <div class="catur">
        <?php
            for ($row = 0; $row < 5; $row++) {
                for ($col = 0; $col < 5; $col++) {
                    $color = ($row + $col) % 2 === 0 ? 'hitam' : 'putih';
                    echo "<div class='kotak $color'></div>";
                }
            }
        ?>
    </div>
</body>
</html>