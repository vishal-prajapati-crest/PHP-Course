<?php
$str="vishAL is Learning php";
//lower case
echo strtolower($str),"<br>";
//Upper case
echo strtoupper($str),"<br>";
//change only first char to upper case using ucfirst similarly tochange only first char to lower case use lcfirst() 
echo ucfirst($str),"<br>";
echo lcfirst($str),"<br>";
//to convert upper of first char of every word we use ucwords()
echo ucwords($str),"<br>";

//TO REVERSE THE STRING USE STRREV()
echo strrev($str),"<br>";

//To get the length of the string user strlen()
echo strlen("apple"),"<br>";
?>