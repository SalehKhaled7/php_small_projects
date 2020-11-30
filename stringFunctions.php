<?php
//get part of a string
$str= "learning ,php/ to start working on laravel framework ";
echo strlen($str);
$a= strpos($str,",");// strpos(string , char) return the position of a character or substring as  int  starts from
$b=strpos($str,"/");
echo substr($str,$a+1,$b-$a-1); //substr(string,start,how many characters) return a sub-string from a string


?>