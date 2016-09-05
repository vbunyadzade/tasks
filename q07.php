<?php
//sort() funksiyasindan istifade ederek tam ededlerden ibaret array-in elementlerini sort eden Class yazin.//

$tam = array(
	"bir", "iki", "uc", "dort",
);
sort($tam);
foreach ($tam as $key => $val) {
	echo "<br> Eded [".$key."] = ".$val."\n";
}

?>