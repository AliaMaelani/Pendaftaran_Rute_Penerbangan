<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Penerbangan</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }
        .ticket {
            width: 300px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            margin: 50px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: #333;
        }
        .ticket h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #007bff;
        }
        .ticket p {
            margin-bottom: 10px;
        }
        .ticket hr {
            border: none;
            border-top: 1px solid #ccc;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="ticket">
        <h2>Detail Penerbangan</h2>
        <p>Nomor Penerbangan: <?php echo $nomor_penerbangan; ?></p>
        <hr>
        <p>Tanggal: <?php echo $tanggal; ?></p>
        <p>Nama Maskapai: <?php echo $nama_maskapai; ?></p>
        <p>Asal Penerbangan: <?php echo $bandara_asal; ?></p>
        <p>Tujuan Penerbangan: <?php echo $bandara_tujuan; ?></p>
        <p>Harga Tiket: Rp <?php echo $harga_tiket_formatted; ?></p>
        <p>Pajak: Rp <?php echo $pajak_formatted; ?></p>
        <hr>
        <p>Total Harga Tiket: Rp <?php echo $total_harga_tiket_formatted; ?></p>
    </div>
</body>
</html>
