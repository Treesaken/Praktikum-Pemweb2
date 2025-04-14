<?php
    $temanSaya = ["anwar", "ayam", "budi", "caca", "didi"]; // array
    print_r($temanSaya); // untuk menampilkan semua array (debugging)

    echo "<br>";
    echo $temanSaya[0]; // Menampilkan elemen pertama array
    echo "<br>";
    echo count($temanSaya); // untuk mengetahui jumlah array

    // Menampilkan array dalam bentuk list terurut (ordered list)
    echo "<ol>";
    foreach ($temanSaya as $key => $value) { // key adalah index, value adalah value
        echo "<li>$key. $value</li>";
    }
    echo "</ol>";
    $temanSaya[3] = "fafa"; // Menambahkan elemen baru ke array
    unset($temanSaya[1]); // Menghapus elemen array
    print_r($temanSaya);

    echo "<br>";

    $buah = ["a" => "apel", "j" => "jeruk", "m" => "mangga", "d" => "duku"]; // array sort
    asort($buah); // Mengurutkan array berdasarkan value
    // arsort($buah); // Mengurutkan array berdasarkan value secara terbalik
    // ksort($buah); // Mengurutkan array berdasarkan key
    // krsort($buah); // Mengurutkan array berdasarkan key secara terbalik
    print_r($buah);


    echo "<br> <br>";

    array_pop($buah); // Menghapus elemen terakhir array
    print_r($buah);

    echo "<br>";

    array_push($buah, "durian"); // Menambahkan elemen terakhir array
    print_r($buah);

    echo "<br>";

    array_shift($buah); // Menghapus elemen pertama array
    print_r($buah);

    echo "<br>";

    array_unshift($buah, "anggur"); // Menambahkan elemen pertama array
    print_r($buah);
?>