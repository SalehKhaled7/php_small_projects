<?php

// for loop
$str = "php is cool ";
echo "for loop :<br>";
for ($i = 1; $i <= 10; $i++) {
    echo $i, "-", $str;
    echo "<br>";
}
echo "<br>";

// while loop
echo "while loop :<br>";

$i = 10;
while ($i > 0) {
    echo $i, "-hello";
    echo "<br>";
    $i--;
}
echo "<br>";

//for each loop
$numbers = array(1,2,3,4,5,6,7,8,9,10);
print_r($numbers); // use print_r for debug purposes
echo "<br>";
foreach ($numbers as $number){
    echo $number," - ";
}

//use normal for loop to get same result as for each
echo "<br>";
for ($i=0;$i<sizeof($numbers);$i++){ // sizeof() or count() to get array size
    echo $numbers[$i]," - ";
}

?>