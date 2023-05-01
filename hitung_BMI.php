<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Menghitung BMI</title>
<body>
<h1>Menghitung BMI</h1>

<?php
if (isset($_GET['submit'])) {
    // Input form
    $nama        = $_GET['nama'];
    $tb            = $_GET['tb']/100;
    $bb            = $_GET['bb'];
    /* Rumus BMI adalah:
    BMI = BERAT BADAN / KUADRAT TINGGI BADAN
    */   
    // Hitung BMI
    $bmi        = $bb / ($tb * $tb);
    //output
    echo "<h3>Hasil perhitungan BMI</h3>";
    echo "Halo, $nama<br>";
    echo "Nilai BMI Anda adalah -> ".number_format($bmi)."</br>";
    //kondisi
    if($bmi < 15.5) {
        echo "Anda termasuk kurus <hr>";
    }elseif ($bmi < 18.5 ) {
        echo "Anda termasuk kurus <hr>";
    }elseif ($bmi < 25 ) {
        echo "Anda termasuk sedang <hr>";
    }elseif ($bmi < 30 ) {
        echo "Anda termasuk gemuk <hr>";
    }elseif ($bmi < 35 ) {
        echo "Anda termasuk gemuk <hr>";
    }elseif ($bmi < 40 ) {
        echo "Anda termasuk gemuk <hr>";
    }else {
        echo "Anda termasuk gemuk <hr>";
    }
    
}
?>

<form    methot="get" action="">
Nama<br>
<input type="text" name="nama"><br>
Tinggi badan (cm) <br>
<input type="text" name="tb"><br>
Berat badan (kg)<br>
<input type="text" name="bb"><br>
<input type="submit" name="submit" value="Hitung BMI">
</form>
</body>
</html>