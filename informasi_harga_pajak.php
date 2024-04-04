<?php
    $harga_tiket = array(
        "Soekarno Hatta - Ngurah Rai" => 8500000,
        "Soekarno Hatta - Hasanuddin" => 7000000,
        "Soekarno Hatta - Inanwatan" => 9000000,
        "Soekarno Hatta - Sultan Iskandar Muda" => 6500000,
        "Husein Sastranegara - Ngurah Rai" => 8500000,
        "Husein Sastranegara - Hasanuddin" => 7000000,
        "Husein Sastranegara - Inanwatan" => 9000000,
        "Husein Sastranegara - Sultan Iskandar Muda" => 6500000,
        "Abdul Rachman Saleh - Ngurah Rai" => 8500000,
        "Abdul Rachman Saleh - Hasanuddin" => 7000000,
        "Abdul Rachman Saleh - Inanwatan" => 9000000,
        "Abdul Rachman Saleh - Sultan Iskandar Muda" => 6500000,
        "Juanda - Ngurah Rai" => 8500000,
        "Juanda - Hasanuddin" => 7000000,
        "Juanda - Inanwatan" => 9000000,
        "Juanda - Sultan Iskandar Muda" => 6500000
    );

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

    echo "<h3>Daftar Harga Tiket dari Bandara Asal ke Bandara Tujuan (belum termasuk pajak)</h3>";
    echo "<ul>";
    foreach ($harga_tiket as $rute => $harga) {
        echo "<li>$rute: Rp $harga</li>";
    }
    echo "</ul>";

    echo "<h3>Daftar Pajak Bandara:</h3>";
    echo "<ul>";
    foreach ($pajak_bandara_asal as $bandara => $pajak) {
        echo "<li>Pajak dari $bandara: Rp $pajak</li>";
    }
    foreach ($pajak_bandara_tujuan as $bandara => $pajak) {
        echo "<li>Pajak dari $bandara: Rp $pajak</li>";
    }
    echo "</ul>";
?>
