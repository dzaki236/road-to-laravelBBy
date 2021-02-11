<?php
/**Sintaks Php */
// harus tulis tag php nya sebelum menuliskan sintaks phpnya

#Komentar
//  ctrl/cmnd slash(/),komentar untuk menjelaskan atau contekkan
/** komentar berbaris baris */
#   komentar implement dari bahasa c 

#Standar output
//  isitlahnya mencetak ke layar
//  echo,print(),biasa di gunakan untuk mencetak tulisan atau variable
//  print_r,digunakan untuk mencetak array
//  var_dump,dipakai untuk debugging
//  CONTOH : 
echo "test";
echo 'test kutip 1';
echo true;//1
echo false;//0

//harus dikasih kurung setelahnya
print(123);//sama aja
print_r('test');//bisa mencetak string bisa array
var_dump('test');//akan memberikan informasi yang di tampilkannya itu tipedatanya itu apa dan ukurannya berapa

var_dump(0);
#Penulisan sintaks php
// 1. php didalam html 
// 2. html didalam php

#Variable dan tipe data
// Variable
// $namaVariablenya
// tempat penampung data
// case
// $myIdentifier : Camel case (e.g. in java variable names)
// $MyIdentifier : Capital camel case (e.g. in java class names)
// $my_identifier : Snake case (e.g. in python variable names)
// $my-identifier : Kebab case (e.g. in racket names)
// $myidentifier : Flat case (e.g. in java package names)
// $MY_IDENTIFIER : Upper case (e.g. in C constant names)

// namanya tak boleh diawali angka tapi boleh di akhiri angka
$nama = "Dzaki";
$judul = "ini website";
// interpolasi,mengecek apakah di dalam kutip 2 itu terdapat variable atau tidak

echo "halo nama saya $nama";// halo nama saya Dzaki

echo 'halo nama saya $nama';// halo nama saya $nama?

#Operator 
// + - / * %

$x = 10;
$y = 10;
echo $x*$y;//100
echo "hasil";
var_dump($x + $y != 100);
//penggabung string / concat / concatenation
// . (titik)
$namadepan = "Dzaki";
$namabelakang="Ahnaf Z";
echo $namadepan." ".$namabelakang;

// assigntment
// +=, -=, .=, *=, /=, %=, =

$a = 1;
$a -= 5;
echo $a;//-4

$name = "Dzaki";
$name .= " ";
$name .= "Ahnaf Z";

echo $name;// Dzak Ahnaf Z

// perbandingan
// mengecek nilainya saja
//<, >, <=, >=, ==, !=
var_dump(1=="1");//true,hanya ngecek nilainya saja

// identitas
// untuk bener bener mengecek identitas tipe data dari sebuah nilai
// ===, !==
var_dump(1==="1");//false,walau nilainya sama tapi tipe datanya beda

// logika
// &&,||,!

//&&,true jika kedua kondisi bernilai true
// ||, true bila salah satu kondisi bernilai true
// !,true bila kondisi bernilai false begitu juga kebalikannya
$n = 30;
var_dump($n < 20 && $n %2 == 0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$judul";?></title>
</head>
<body>
    <!-- Php didalam Html -->
    <h1><?php echo "Php didalam html";?></h1>
    <!-- Html didalam Php -->
    <?php echo "<h1>Html didalam Php</h1>";?>
<p><?= "Paragraf";?></p>
</body>
</html>
