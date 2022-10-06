<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Hitung Umur</title>
</head>

<body>

    <div class="container">
        <div class="card">
            <div class="title">Hitung Umur</div>
            <div class="all-form">
                <div class="form-input">
                    <label for="tahun">Tahun</label>
                    <select id="tahun"></select>
                </div>
                <div class="form-input">
                    <label for="bulan">Bulan</label>
                    <select id="bulan"></select>
                </div>
                <div class="form-input">
                    <label for="hari">Tanggal</label>
                    <select id="hari"></select>
                </div>
            </div>
            <div class="form-button">
                <button id="cek">Hitung</button>
            </div>
            <div class="output">
                <div class="text"></div>
            </div>
        </div>
    </div>

</body>
<script src="main.js"></script>

</html>