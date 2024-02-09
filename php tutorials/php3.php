<!-- conditional statement in php -->
<?php
$a= 25;
if($a===25.0){
    echo "condition is true";
}
elseif($a===25){
    echo "Second condition is true";
}
else{
    print "condition is false";
}
echo "<br>";
// switch case in  php

switch($a){
    case 10:
        echo "number 10";
        break;
    case 25:
        echo "number 25";
        break;
    default:
        echo "It is positive number";
}

// for ($i = 1, $j = 0; $i <= 9; $j += $i,print "j: $j", print $i, $i++); 
?>