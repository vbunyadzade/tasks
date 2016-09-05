<html>
<body>

<form action="" method="post">
<input type="text" name="number" placeholder="Ededi yaz">
<input type="submit" name="submit" Value="Hesabla">
</form>

</body>
</html>

<?php
//1.Ededin faktorialini hesablayan Class yazin//

if (isset($_POST['submit'])) {
	$num = $_POST["number"];
	$fa  = 1;
	$x   = "";
	for ($x = $num; $x >= 1; $x--) {
		$fa = $fa*$x;
	}
	echo "Factorali budur: $fa";
}
?>