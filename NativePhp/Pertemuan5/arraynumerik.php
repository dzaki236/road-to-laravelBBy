<?php 
/*array numerik*/
// variable yang memiliki banyak nilai 
// element array tipe datanya boleh beda
// pasangan antara key dan value
// key nya adalah index,yan di mulai dari 0

// memiliki implisit yang sebenarnya sudah di tentukan tapi gak ditulis,dan akan kelihatan bila menggunakan print_r/var_dump
# membuat array
// cara lama
$lama = array("tulisan",123,false);

// cara baru
$baru = ["tulisan",123,true];

#mencetak array
var_dump($lama);
echo "<br>";
print_r($baru);
echo "<br>";
// echo tak bisa mencetak array
// echo; 

// menampilkan 1 eleement array
// menambahkan indexnya disitu
echo $baru[1];
echo "<br>";
echo $lama[0];

$hari = ["Senin","Selasa","Rabu","Kamis"];
var_dump($hari);//menampilkan hari yang awal
echo "<br>";
$hari []="Jum'at";//menambahkan "Jum'at" di akhir index
var_dump($hari);
$hari []="Sabtu";
$hari []="Minggu";
var_dump($hari);
?>