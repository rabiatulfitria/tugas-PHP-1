<?php

/*
menggunakan perulangan 'for' nested loop.
-perulangan 'for' yang pertama adalah untuk mengeksekusi baris awal, dimana :
    jika variabel i sama dengan 9 atau lebih dari 0,maka program akan melanjutkan script 'for' dibawahnya
-perulangan 'for' yang kedua adalah untuk mengeksekusi kolom,dimana :
    jika variabel j sama dengan 0 atau kurang dari variabel i, maka akan menampilkan simbol '*'.
Jika kondisi salah, maka yang ditampilkan adalah berganti ke baris baru/selanjutnya
sampai perulangan for yang pertama kondisi variabel i sudah tidak memenuhi syarat.
*/

$star = 9; //variabel $star, untuk mendefinisikan bahwa yang akan ditampilkan berupa simbol '*' yang berjumlah 9, yang berada di baris awal. 
for ($i=$star; $i>0; $i--){
    /*
    variabel counter $i adalah outer loop
    kondisi awal dari perulangan adalah $i=$star, variabel ini nilainya samadengan variabel $star
    kondisi akhir perulangan adalah $i>0, jadi selama varibel $i bernilai lebih dari 0, perulangan akan terus dijalankan
    Untuk perintah $i--, artinya dalam setiap proses perulangan, $i akan berkurang 1 angka, yang dimulai dari deretan simbol '*' yang berjumlah 9
    */
for ($j=0; $j<$i; $j++) {
    echo "*";
    /*
     variabel counter $j adalah inner loop, jadi pada perulangan sebelumnya, terdapat perulangan lagi.
     kondisi awal variabel $j bernilai 0, dan $j<=$i. Berarti perulangan ini melakukan 8kali perulangan juga.
     Karena pada kondisi akhir menggunakan tanda <,  maka akan muncul semua perhitungan angka yang kurang dari 9
     apakah '0' kurang dari 9? (true) program melanjutkan ke baris baru dan mengulang lagi, jadi ada 8 simbol '*'.
    sampai akhirnya sampai pada perhitungan angka '1' maka perulangan akan berhenti.
     */  
}
echo "<br>"; // <br> berfungsi agar setiap setelah perulangan selesai ditampilkan, berganti ke baris baru (Enter)
} 
?>