<?php
/*Tipe data*/

#Int
echo "Decimal : <br>";
var_dump(1234);

echo "Octal : <br>";
var_dump(01234);

echo "Hexadecimal : <br>";
var_dump(0x1A);

echo "Binary : <br>";
var_dump(0b111111);

echo "Underscore : <br>";
var_dump(1_200_300);// underscore akan di ignore

#float
//kalau tambahkan titik otomatis menjadi floating point,kalau tidak menjadi integer
echo "Floating Point : ";
var_dump(1.234);

echo "Floating Point dengan E notation plus (1.2 x 1000) : ";
var_dump(1.2e3);

echo "Floating Point dengan E notation minus (1.2 x 0.001) : ";
var_dump(1.2e-3);

echo "Underscore di floating point : ";
var_dump(1_200.300);

#integer overflow
// akan melebihi batas kemampuan yang bisa di tampung sama integer
// akan di konversi ke floating point jika sudah melebihi batasan
echo "32 bit : ";
var_dump(2147483648);

echo "64 bit : ";
var_dump(9223372036854775808);
?>