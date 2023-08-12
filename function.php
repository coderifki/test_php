<?php
function luasLingkaran($jariJari)
{
    return round(3.14 * $jariJari * $jariJari, 2);
}

function kelilingLingkaran($jariJari)
{
    return round(2 * 3.14 * $jariJari, 2);
}

function luasPersegi($panjang, $lebar)
{
    return round($panjang * $lebar, 2);
}

for ($angka = 1; $angka <= 100; $angka++) {
    if ($angka % 3 == 0 && $angka % 5 == 0) {
        $luasPersegi = luasPersegi($angka / 3, $angka / 5);
        echo number_format($luasPersegi, 2) . "\n";
    } elseif ($angka % 3 == 0) {
        $jariJari = $angka / 3;
        $luasLingkaran = luasLingkaran($jariJari);
        echo number_format($luasLingkaran, 2) . "\n";
    } elseif ($angka % 5 == 0) {
        $jariJari = $angka / 5;
        $kelilingLingkaran = kelilingLingkaran($jariJari);
        echo number_format($kelilingLingkaran, 2) . "\n";
    } else {
        echo number_format($angka, 2) . "\n";
    }
}
