<?php
require_once 'lingkaran.php';

$lingkaran1 = new lingkaran(10);
$lingkaran2 = new lingkaran(20);

echo "Jari-jari lingkaran1 adalah = " . $lingkaran1->jarijari . "<br>";
echo "Jari-jari lingkaran2 adalah = " . $lingkaran2->jarijari . "<br>";
echo "Nilai PHI adalah = " . lingkaran::PHI . "<br>";
echo "<hr>";
echo "Luas lingkaran1 adalah = " . $lingkaran1->getLuas() . "<br>";
echo "Keliling lingkaran1 adalah = " . $lingkaran1->getKeliling() . "<br>";

echo "<hr>";

echo "Luas lingkaran2 adalah = " . $lingkaran2->getLuas() . "<br>";
echo "Keliling lingkaran2 adalah = " . $lingkaran2->getKeliling() . "<br>";

echo "<hr>";
$lingkaran1 -> cetak();
echo "<hr>";
$lingkaran2 -> cetak();

?>