<?php

/**Function */
// potongan program atau baris kode yang di / kita buat untuk mempermudah kita pada saat membuat program
// kode program tadi bisa kita kasih nama lalu kita panggil berulang ulang

#build-in function
// date/time
// untuk menampilkan tanggal dengan format tertentu
// time(),date(),mktime(),strtotime()

// echo date("l, d-M-Y");//memanggil function punyanya php

// time()
// UNIX timestamp/ Epoch time
// detik yang sudah berlalu sejak 1 january 1970
echo time()."<br>";
echo date("F",time())."<br>";
echo date("d-F-y",time()-60*60*24*100)."<br>";//tampilkan hari dari sekian detik

// mktime
// membuat sendiri detik dari 1970 ke yang diinginkan
// parameter mktime(0,0,0,0,0,0)
// jam,menit,detik,bulan,tanggal,tahun
echo date("l",mktime(0,0,0,8,8,2004))."<br>";

// strtotime
// sama cuman memasukkan format tanggal
echo date("l d-F-y", strtotime("8 aug 2004"));

#string
// strlen()
// untuk menghitung panjang sebuah string

// strcmp()
// untuk membandingkan 2 buah string

// explode()
// memecah sebuah string menjadi sebuah array

// htmlspecialchars()
// mencegah aplikasi dari orang iseng

#fungsi bantuan
// var_dump
// untuk mengecek/menampilkan isi dari sebuah variable array dan object

// isset()
// mengecek apakah sebuah variable sudah pernah di buat atau belum,maka isset akan menghasilkan true atau false

// empty()
// untuk mengecek apakah variable yang ada itu kosong atau tidak

// die()
// menghentikan program kita,ketika ketemu die maka dibawahnya ga akan di eksekusi

// sleep()
// menghentikan sementara program selama beberapa detik
?>