<?php
$age =date("D");//get day name from date function
echo $age."<br>";

switch ($age){
    case "Sun":
        echo "Sunday";
        break;
    case "Mon";
        echo "Monday";
        break;
    case "Tue":
        echo "Tuesday";
        break;
    case "Wed";
        echo "Wednesday";
        break;
    case "Thur";
        echo "Thursday";
        break;
    case "Fri";
        echo "Friday";
        break;
    case "Sat";
        echo "Saturday";
        break;
    default:
        echo "this is default case ,,";
}

