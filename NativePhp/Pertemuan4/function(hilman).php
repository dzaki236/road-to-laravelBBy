<?php 
#fungsi / function
// suatu block kode yang kita simpan dalam satu nama dan bisa di gunakan berkali kali,dimana pun saat di butuhkan
// boleh dengan huruf 

function jaga(){
        print "orang";
}
function jarak(){
        print "<br>";
}
// memanggil dengan menuliskan fungsinya saja
// tak terbatas mau berapa kali
jaga();
jarak();       
jaga();
jarak();  
jaga();
jarak();  

#parameter
// membuat nilai flexible
// deklarasikan variable,atau variable berikutnya
// sifat dari parameter,kita bebas untuk ubah variablenya/angka/string/apapun
function tampilsesuatu($text,$text2){
        $text = "hai ".$text;
        echo "-----------";
        echo "$text";
        echo "-----------";
        echo "<br>";
}
tampilsesuatu("Dzaki Ahnaf Z","hi");
// tampilsesuatu("Dzaky ahnap zet");//eror karena hanya memanggil 1 parameter saja


#return
// hanya memberi nilainya/mengembalikan nilainya(fungsinya)
function hitung($a,$b){
        $c = $a + $b;
        return $c;
}
echo hitung(2,4);

#scope
// dimana posisi posisi si variable kita hidup/dipake
$x = 10;
$y = 20;
function hitung2(){
        // global $x,$y;
        // untuk mengenal kan local variable dengan global cara 1
        $z = $GLOBALS['x']+$GLOBALS['y'];
        return $z;
}
echo "<br>".hitung2();
?>