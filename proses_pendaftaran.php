<?php
    // Mendapatkan nilai nomor penerbangan secara acak
    $nomor_penerbangan = "PNB-" . uniqid();

    // Mendapatkan tanggal saat ini
    $tanggal = date("Y-m-d H:i:s");

    // Mendapatkan nilai dari form
    $nama_maskapai = $_POST['nama_maskapai'];
    $bandara_asal = $_POST['bandara_asal'];
    $bandara_tujuan = $_POST['bandara_tujuan'];

    // Mengonversi input harga tiket ke format numerik yang sesuai
    $harga_tiket_input = $_POST['harga_tiket'];
    $harga_tiket = str_replace(",", "", $harga_tiket_input);
    $harga_tiket = str_replace(".", "", $harga_tiket);
    $harga_tiket = str_replace(",", ".", $harga_tiket);

    // Hitung pajak
    $pajak_bandara_asal = array(
        "Soekarno Hatta" => 65000,
        "Husein Sastranegara" => 50000,
        "Abdul Rachman Saleh" => 40000,
        "Juanda" => 30000
    );

    $pajak_bandara_tujuan = array(
        "Ngurah Rai" => 85000,
        "Hasanuddin" => 70000,
        "Inanwatan" => 90000,
        "Sultan Iskandar Muda" => 60000
    );

    $pajak = $pajak_bandara_asal[$bandara_asal] + $pajak_bandara_tujuan[$bandara_tujuan];
    $total_harga_tiket = $harga_tiket + $pajak;

    // Format nominal dengan koma sebagai pemisah
    $harga_tiket_formatted = number_format($harga_tiket, 0, ',', '.');
    $pajak_formatted = number_format($pajak, 0, ',', '.');
    $total_harga_tiket_formatted = number_format($total_harga_tiket, 0, ',', '.');

    // Mengarahkan pengguna ke halaman tampilan HTML
    include 'detail_penerbangan.php';
?>
