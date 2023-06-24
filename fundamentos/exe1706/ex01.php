<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<div class="container">
		<?php
		$nome = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$numero = $_POST["numero"];
		}
		?>
		<form method="POST">

			<label for="numero">Digite um numero:</label>
			<input type="number" id="numero" name="numero">

			<input type="submit" value="Enviar">
		</form>

		<p>Numero:
			<?php
				$num = floatval($numero);
				if($num > 0){
					echo $numero, " Valor Positivo";
				} elseif($num < 0){
					echo $numero, " Valor Negativo";
				} else {
					echo $numero, " Igual a Zero";
				}
			?>
		</p>
</body>

</html>