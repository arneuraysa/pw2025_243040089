<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            height: 100vh;
            background-color: #f5f5f5;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .row {
            display: flex;
        }

        .box {
            width: 50px;
            height: 50px;
            background-color:rgb(217, 116, 141);
            color: white;
            font-size: 20px;
            font-weight: bold;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 2px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="box">1</div>
        </div>
        <div class="row">
            <div class="box">2</div>
            <div class="box">2</div>
        </div>
        <div class="row">
            <div class="box">3</div>
            <div class="box">3</div>
            <div class="box">3</div>
        </div>
    </div>   
</body>
</html>