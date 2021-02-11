<?php 

$bulan = [
    "angka1" => [1,2,3],
    "angka2" => [4,5,6],
    "angka3" => [7,8,9],
    "angka4" => [7,8,9]
];
// echo $bulan[1][0];//index yang pertama untuk menentukan element terularnya & kedua itu dalamnya
// echo $bulan[1][1];  
echo "<br>";
// foreach
foreach ($bulan as $i => $month) {
    foreach($month as $bulans){
    echo $i." => ".$bulans;
    echo "<br>";
}
}
echo "<br>";
// // for
// for($a=0 ; $a < count($bulan);$a++){
//     for($b=0;$b<count($bulan[0]);$b++){
//         echo $bulan[$a][$b];
//         echo "<br>";
//     }
    
// }
?>