<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }
        .data-container {
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: 0 auto;
        }
        .data-item {
            margin-bottom: 15px;
        }
        .data-item span {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="data-container">
        <?php
        // Data static sebagai contoh
        $id = 123456;
        $nama = "Mushthofa Thoriq";
        $alamat = "Magetan, Jawa Timur";

        // Menampilkan data dengan style
        echo '<div class="data-item"><span>ID:</span> ' . htmlspecialchars($id) . '</div>';
        echo '<div class="data-item"><span>Nama:</span> ' . htmlspecialchars($nama) . '</div>';
        echo '<div class="data-item"><span>Alamat:</span> ' . htmlspecialchars($alamat) . '</div>';
        ?>
    </div>
</body>
</html>
