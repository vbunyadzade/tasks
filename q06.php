<?php
/*PHP OOP yaxinlasmasinnan istifade ederek iki tarix arasindaki ferqi tapin.
Qeyd: Uzun hesablamalar aparmaga ehtiyac yoxdur. maksimum 4 setirle hell edin*/

$date1 = date_create("1997-8-10");
$date2 = date_create("2016-09-05");
$diff  = date_diff($date1, $date2);
echo $diff->format("%R%a days");
?>