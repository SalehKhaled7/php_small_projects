<?php

$number1=6;
$number2=4;

if($number1<$number2){
    for($i=$number1+1;$i<$number2;$i++){
        echo "$i factorial is :",findFactorialRec($i),"<br>";
    }
}
if($number1>$number2){
    for($i=$number2+1;$i<$number1;$i++){
        echo "$i factorial is :",findFactorialRec($i),"<br>";
    }
}



function findFactorial($number){
    $total = 1;
    while($number>0){
        $total*=$number;
        $number--;
    }
    return $total;
}

 function findFactorialRec($number){
    if($number<0){
        return "invalid number !";
    }
    if($number == 1 || $number == 0){
        return 1;
    }else{
        return $number*findFactorialRec($number-1);
    }

 }
