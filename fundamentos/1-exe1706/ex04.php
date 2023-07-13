<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<title>Document</title>
</head>

<body>
	<style>
		nav {
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
		<form method="POST" class="input-group mb-3">
			<input type="number" id="mes" name="mes" class="form-control"
				placeholder="Digite um numero referente a um mês">

			<input type="submit" value="Enviar" class="btn btn-outline-secondary">
		</form>
		<?php
		$month = [
			1 => 'Janeiro',
			2 => 'Fevereiro',
			3 => 'Março',
			4 => 'Abril',
			5 => 'Maio',
			6 => 'Junho',
			7 => 'Julho',
			8 => 'Agosto',
			9 => 'Setembro',
			10 => 'Outubro',
			11 => 'Novembro',
			12 => 'Dezembro',
		];
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$i = $_POST["mes"];
			if ($i <= 12 && $i > 0) {
				echo $month[$i];
			} else {
				echo "não existe mês com este numero";
			}
		}
		?>
	</div>

</body>

</html>