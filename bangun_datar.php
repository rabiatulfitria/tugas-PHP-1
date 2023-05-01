<?php 
/* ---Luas Persegi---*/
echo "Menghitung Luas Persegi <br>";
echo "=================== <br>";

$s = 12.5;
$luas_persegi = $s * $s;

echo "Panjang Sisi Persegi = $s <br>";
echo "Luas Persegi (s×s) = $luas_persegi <br>";
echo "---------------------------------------------------- <br>";
echo "<br>";

/* ---Luas Persegi Panjang---*/
echo "Menghitung Luas Persegi Panjang <br>";
echo "========================= <br>";

$P = 7;
$L = 8;
$luas_persegipanjang = $P * $L;

echo "Panjang = $P <br>";
echo "Lebar = $L <br>";
echo "Luas Persegi (p×l) = $luas_persegipanjang <br>";
echo "---------------------------------------------------- <br>";
echo "<br>";

/* ---Luas Lingkaran---*/
echo "Menghitung Luas Lingkaran <br>";
echo "===================== <br>";

$phi = 22/7;
$r = 14;
$luas_lingkaran = $phi*($r*$r);

echo "π = $phi <br>";
echo "Jari-jari(r) = $r <br>";
echo "Luas Lingkaran (π×r×r) = $luas_lingkaran <br>";
echo "---------------------------------------------------- <br>";
echo "<br>";

/* ---Luas Segitiga---*/
echo "Menghitung Luas Segitiga <br>";
echo "===================== <br>";

$a = 9;
$t = 17;
$luas_segitiga = 1/2*($a*$t);

echo "Alas Segitiga = $a <br>";
echo "Tinggi Segitiga = $t <br>";
echo "Luas Segitiga (½×a×t) = $luas_segitiga <br>";
echo "---------------------------------------------------- <br>";
echo "<br>";

/* ---Luas Trapesium---*/
echo "Menghitung Luas Trapesium <br>";
echo "===================== <br>";

$b1 = 5;
$b2 = 15;
$t = 7;
$luas_trapesuim = 1/2*($b1+$b2)*$t;

echo "sisi sejajar(atas) = $b1 <br>";
echo "sisi sejajar(bawah) = $b2 <br>";
echo "tinggi trapesium = $t <br>";
echo "Luas Trapesium ½×(b1×b2)×t = $luas_trapesuim <br>";
echo "---------------------------------------------------- <br>";
echo "<br>";
?>