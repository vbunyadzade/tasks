<?php
/*Asagidaki kodlar-ın outputu necə olacaq və nə üçün?*/

1-ci
$x = 5;
echo $x;
echo "<br />";
echo $x+++$x++;
echo "<br />";
echo $x;
echo "<br />";
echo $x---$x--;
echo "<br />";
echo $x;
// 5 11 5 1 5

//2-ci
var_dump(0123 == 123);
var_dump('0123' == 123);
var_dump('0123' === 123);
//false , true, false

//3-cü
$x = true and false;
var_dump($x);
// false

//4-cü $x-in dəyəri nə olacaq?
$x = 3+"15%"+"$25";


?>