<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php
	$numbers = "";
	$result = [""];
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$numbers = $_POST["numbers"];
		$result = explode(",", $numbers);
	}
	?>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="numbers">Informe os valores:</label>
		<input type="text" id="numbers" name="numbers" placeholder="ex: 1,2,3,4">
		<input type="submit" value="Enviar">
		<?php
		sort($result);
		foreach ($result as $num) {
			echo $num . "\n";
		}
		?>
	</form>
</body>

</html>