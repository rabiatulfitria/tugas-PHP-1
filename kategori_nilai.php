<form action="" method="POST">
KATEGORI NILAI<br>
Nilai : <input type="text" name="nilai">
<input type="submit" value="Hasil">
</form>

<?php
if (isset($_POST['nilai'])) {
$nilai = $_POST['nilai'];
switch ($_POST) {
	case $nilai > 90:
		$kategori = "A";
		echo "<br>";
		echo "Nilai : " . $nilai;
		echo "<br>";
		echo "Kategori Nilai : " . $kategori;
		break;
	case $nilai >= 80:
		$kategori = "B";
		echo "<br>";
		echo "Nilai : " . $nilai;
		echo "<br>";
		echo "Kategori Nilai : " . $kategori;
		break;
	case $nilai >= 70:
		$kategori = "C";
		echo "<br>";
		echo "Nilai : " . $nilai;
		echo "<br>";
		echo "Kategori Nilai : " . $kategori;
		break;
	case $nilai > 0 && $nilai <= 70:
		$kategori = "D";
		echo "<br>";
		echo "Nilai : " . $nilai;
		echo "<br>";
		echo "Kategori Nilai : " . $kategori;
		break;
	default:
	    $kategori = "Tidak Ada Kategori";
		echo "<br>";
		echo "Nilai : " . $nilai;
		echo "<br>";
		echo "Kategori Nilai : " . $kategori;
		break;
	}
}
?>