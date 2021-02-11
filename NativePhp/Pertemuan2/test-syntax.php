<?php
function boolean($boolean){
    if ($boolean == false) {
        return 0;
    }else if($boolean == false){
        return 1;
    }else{
        trigger_error('Function must be boolean only');
    }
}
echo boolean(false);

$a = "10";
$b = "20";
$a = $b;
$b = $a;

echo $a . ($b + 1)."<br>";


$total =  5+2+10+6;
echo $total;
?>