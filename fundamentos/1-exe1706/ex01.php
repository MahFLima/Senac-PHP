<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<title>Document</title>
</head>

<body>
	<style>
		nav{
			margin-bottom: 1rem; 
		}
	</style>
	<nav class="navbar bg-body-tertiary">
		<div class="container">
			<a class="nav-link" href="index.php">
				HOME
			</a>
		</div>
	</nav>
	<div class="container">
		<?php
		$nome = "";
		$numero = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$numero = $_POST["numero"];
		}
		?>
		<form method="POST" class="input-group mb-3">
			<input type="number" id="numero" name="numero" class="form-control" placeholder="Digite um numero">

			<input type="submit" value="Enviar" class="btn btn-outline-secondary">
		</form>

		<p>Numero:
			<?php
			$num = floatval($numero);
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if ($num > 0) {
					echo $numero, " Valor Positivo";
				} elseif ($num < 0) {
					echo $numero, " Valor Negativo";
				} else {
					echo $numero, " Igual a Zero";
				}
			}
			?>
		</p>
</body>

</html>