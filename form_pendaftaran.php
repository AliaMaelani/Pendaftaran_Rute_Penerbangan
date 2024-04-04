<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Rute Penerbangan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: #f2f2f2;">
    <div class="container">
        <h2>Form Pendaftaran Rute Penerbangan</h2>
        <form action="proses_pendaftaran.php" method="POST">
            <label for="nama_maskapai">Nama Maskapai:</label><br>
            <input type="text" id="nama_maskapai" name="nama_maskapai"><br><br>

            <label for="bandara_asal">Bandara Asal:</label><br>
            <select name="bandara_asal" id="bandara_asal">
                <?php include 'bandara.php'; ?>
            </select><br><br>

            <label for="bandara_tujuan">Bandara Tujuan:</label><br>
            <select name="bandara_tujuan" id="bandara_tujuan">
                <?php include 'bandara.php'; ?>
            </select><br><br>

            <label for="harga_tiket">Harga Tiket:</label><br>
            <input type="text" id="harga_tiket" name="harga_tiket"><br><br>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
