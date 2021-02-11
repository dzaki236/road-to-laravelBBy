<?php 
/**Struktur kendali */
#pengulangan
// mengerjakan blok program tanpa menulis ulang

// for
// while
// do...while
// foreach(khusus array)

#pengkondisian/percabangan
// if else
// if else if else
// ternary
// switch
#for
// inisialisasi; kondisi terminasi; increment/decrement;
for ($for=0; $for < 5; $for++) { 
    echo "hello for<br>";
}

#while
// cek kondisinya baru jalankan
$while = 0;
while($while < 5)//kondisi
{
echo "hello while<br>";
$while++;
}

#do...while
// jalankan dulu baru cek kondisinya
$doWhile=0;
do{
    //lakukan apa
    echo "hello do...while <br>";
    $doWhile++;
}while($doWhile<5);//kondisi
 
#if else
$tebak = 10;
if($tebak  >= 20){
    echo "lebih besar dari 10 <br>";
}
#else if
elseif($tebak  == 20){
    echo "bingo!";
}else{
    echo "lebih kecil dari 10 <br>";
}

#switch case
$warna = "merah";
switch ($warna) {
    # code...
    case 'merah':
    echo "berhenti <br>";
        break;
    case 'merah':
    # code...
    echo "hati hati <br>";
        break;
    case 'hijau':
    # code...
    echo "jalan";
        break;
    default:
        # code...
        echo "lampu nya rusak <br>";
        break;
}

// switch atau if else?
// bisa menggunakan if else atau switch,tergantung kebutuhan
// bila anyak string kayak gitu sebaiknya switch kalau if else untuk yang kompleksitasnya sudah bisa jdi mencakup boolean

#ternary
// tanpa ternary 
$gender = "laki";
$hi;

if ($gender == 'laki') {
    $hi = "Hi bro! <br>";
}else{
    $hi = "Hi nona <br>";
}
echo $hi;

// dengan ternary
// $variableOutput = $variable == "kondisi" ? : kondisi : kondisi;
$gender2= "laki";
$hi2 = $gender2 == "laki"? "Hi bro <br>":"Hi sist <br>";
echo $hi2;
?>