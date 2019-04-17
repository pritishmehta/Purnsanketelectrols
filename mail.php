<html>
<head>
	<title>heloo</title>
</head>
<body>
	<form method="post">
<label><input type="checkbox" name="language[]" value="A1">A1</label>
<label><input type="checkbox" name="language[]" value="A2">A1</label>

<label><input type="checkbox" name="language[]" value="A3">A1</label>

<label><input type="checkbox" name="language[]" value="A4">A1</label>
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
<?php
$arrayc = array();
if(isset($_POST["submit"]))
{
	if(!empty($_POST["language"]))
	foreach ($_POST["language"] as $language) {
		# code...
		arrayc[]=$language;
	}
}
$v = implode(',', $arrayc);
echo $v;
?>
