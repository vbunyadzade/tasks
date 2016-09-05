<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		input{
			display:block;
			padding:5px 10px;
			margin:5px;
		}
		input[type="radio"]{
			display:inline-block;
		}
		p{
			background:gray;
		}
	</style>
</head>
<body>
<form action="" method="post">
	<input type="number" name="num01">
	<input type="number" name="num02">
	<span>+</span><input type="radio" name="radio" value="+" >
	<span>-</span><input type="radio" name="radio" value="-" >
	<span>*</span><input type="radio" name="radio" value="*" >
	<span>/</span><input type="radio" name="radio" value="/" >
	<input type="submit" name="submit" value="Hesabla">
	<p>Netice:</p>
</form>
</body>
</html>

<?php
// forması yuxarıda verilen besit hesablama masını yazın
if (isset($_POST['submit'])) {
	$num1 = $_POST['num01'];
	$num2 = $_POST['num02'];

	if ($_POST['radio'] == "+") {
		echo $num1+$num2;
	}
	if ($_POST['radio'] == "-") {
		echo $num1-$num2;
	}
	if ($_POST['radio'] == "*") {
		echo $num1*$num2;
	}
	if ($_POST['radio'] == "/") {
		echo $num1/$num2;
	}
}
?>