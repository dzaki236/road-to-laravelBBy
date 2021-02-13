<?php 
/** Mengulas function */

# variable scope(lingkup variable)


//global
$x = 10;// hanya untuk halaman ini
echo $x; // variable global untuk file ini saja

echo "<br>";//pembatas
// local 
// membuat function showx()
function showx(){
    $x = 20;// variable x didalam function,lokal untuk function itu aja
    echo $x;
}
showx();// eror,undefined,karena lingkup variable yang di dalam function itu berbeda dengan variable x yang di luar function

$y = 100;
function showy(){
global $y;// mencari variable y di luar functionnya
 echo $y;
}
showy();
echo "<br>";

//superglobals
// variable global milik php
// bisa di akses dimana pun dan kapan pun
// *$_GET
// *$_POST
// $_REQUEST
// *$_SESSION
// *$_COOKIE
// $_SERVER
// $_ENV
// Semuanya adalah tipe array associative
// huruf besar semua
var_dump($_SERVER['SERVER_NAME']);//localhost
?>