<?php

function Pengecualian($exception) {
    echo "Pengecualian : " . $exception->getMessage();
}

set_exception_handler('Pengecualian');

function bagiDua($angka) {
    if ($angka == 0) {
        throw new Exception("Tidak dapat membagi dengan nol.");
    }
    return 10 / $angka;
}

try {
    $hasil = bagiDua(0);
    echo "Hasil pembagian: " . $hasil;
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
