<?php
    $bandara_asal = array(
        "Soekarno Hatta",
        "Husein Sastranegara",
        "Abdul Rachman Saleh",
        "Juanda"
    );

    $bandara_tujuan = array(
        "Ngurah Rai",
        "Hasanuddin",
        "Inanwatan",
        "Sultan Iskandar Muda"
    );

    foreach ($bandara_asal as $bandara) {
        echo "<option value='$bandara'>$bandara</option>";
    }

    foreach ($bandara_tujuan as $bandara) {
        echo "<option value='$bandara'>$bandara</option>";
    }
?>
