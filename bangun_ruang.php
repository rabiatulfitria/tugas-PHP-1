<?php
/* ---Volume Bola---*/
echo "Menghitung Volume Bola <br>";
echo "=================== <br>";

$phi = 3.14;
$r = 20;
$volume_bola = 4/3*$phi*(pow ($r, 3));

echo "π = $phi <br>";
echo "Jari-Jari Bola = $r <br>";
echo "Volume Bola 4/3×π×r<sup>3</sup> = $volume_bola cm<sup>3</sup> <br>";
echo "---------------------------------------------------- <br>";
echo "<br>";

/* ---Volume Tabung---*/
echo "Menghitung Volume Tabung <br>";
echo "=================== <br>";

$phi = 3.14;
$r = 10;
$t = 30;
$volume_tabung = $phi*(pow ($r, 2))*$t;

echo "π = $phi <br>";
echo "Jari-Jari Lingkaran Tabung = $r <br>";
echo "Tinggi Tabung = $t <br>";
echo "Volume Tabung = π×r<sup>2</sup>×t = $volume_tabung cm<sup>3</sup> <br>";
echo "---------------------------------------------------- <br>";
echo "<br>";

/* ---Volume Kerucut---*/
echo "Menghitung Volume Kerucut <br>";
echo "=================== <br>";

$phi = 3.14;
$r = 10;
$t = 30;
$volume_kerucut = 1/3*$phi*(pow ($r, 2))*$t;

echo "π = $phi <br>";
echo "Jari-Jari Lingkaran Kerucut = $r <br>";
echo "Tinggi Kerucut = $t <br>";
echo "Volume Kerucut = 1/3 ×π×r<sup>3</sup>×t = $volume_kerucut cm<sup>3</sup> <br>";
echo "---------------------------------------------------- <br>";
echo "<br>";
?>