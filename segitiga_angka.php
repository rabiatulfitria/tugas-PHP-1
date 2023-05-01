<?php

/*
menggunakan perulangan 'for' nested loop.
-perulangan 'for' yang pertama adalah untuk mengeksekusi baris awal, dimana :
    jika variabel i sama dengan 0 atau kurang dari 8,maka program akan melanjutkan script 'for' dibawahnya
-perulangan 'for' yang kedua adalah untuk mengeksekusi kolom,dimana :
    jika variabel j sama dengan 0 atau kurang dari variabel i, maka akan menampilkan simbol '*'.
Jika kondisi salah, maka yang ditampilkan adalah berganti ke baris baru/selanjutnya
sampai perulangan for yang pertama kondisi variabel i sudah tidak memenuhi syarat.
*/
for ($i=0; $i<=8; $i++){
    /*
    variabel counter $i adalah outer loop
    kondisi awal dari perulangan adalah $i=0, variabel ini yang akan menjadi penghitung dari perulangan for
    kondisi akhir perulangan adalah $i<=8, jadi selama varibel $i bernilai kurang atau sama dengan 8 perulangan akan terus dijalankan
    Untuk perintah $i++, artinya dalam setiap proses perulangan, $i akan bertambah 1 angka, yang dimulai dari angka 0
    */
for ($j=0; $j<=$i; $j++) {
    echo "$j";
    /*
     variabel counter $j adalah inner loop, jadi pada 8kali perulangan sebelumnya, terdapat perulangan lagi.
     kondisi awal variabel $j bernilai 0, dan $j<=$i. Berarti perulangan ini melakukan 8kali perulangan juga.
     Karena pada kondisi akhir menggunakan tanda <=, baik pada perulangan pertama/kedua, maka setiap program mengeksekusi:
     apakah '0' kurang dari 8? (true) program melanjutkan ke baris baru dan mengulang lagi serta menambahkan 1 angka, menjadi '01'
    sampai akhirnya ada tampil angka '8' maka perulangan akan berhenti.
    Jika tidak menggunakan tanda = maka akan muncul semua angka yang kurang dari 8 tanpa menyeleksi satu-persatu.
     echo "$j"; adalah untuk menampilkan angka 0-8.
     */ 
}
echo "<br>"; // <br> berfungsi agar setiap setelah perulangan selesai ditampilkan, berganti ke baris baru (Enter)
} 
?>