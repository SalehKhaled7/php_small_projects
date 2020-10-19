<?php

$str ="karabuk university*computer eng|4th year @php class";

$university =getSubStr($str,"start","*");
$department = getSubStr($str,"*","|");
$year = getSubStr($str,"|","@");
$class = getSubStr($str,"@","end");

echo "university: $university<br>";
echo "department: $department<br>";
echo "year: $year<br>";
echo "class: $class<br>";

function getSubStr($str,$start,$end){
    if($start=="start"){
        return substr($str,0,strpos($str,$end));
    }elseif ($end=="end"){
        return substr($str,strpos($str,$start)+1);
    }else{
        return substr($str,strpos($str,$start)+1,strpos($str,$end)-strpos($str,$start)-1);
    }
}

