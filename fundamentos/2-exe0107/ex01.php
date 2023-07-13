<?php
	$math = "";
	$v1 = 0;
	$v2 = 0;
	$result = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$math = $_POST["math"];
		$v1 = $_POST["v1"];
		$v2 = $_POST["v2"];

		switch ($math) {
			case "soma":
				$result = $v1 . " + " . $v2 . " = " . $v1 + $v2;
				break;
			case "subtração":
				$result = $v1 . " - " . $v2 . " = " . $v1 - $v2;
				break;
			case "multiplicação":
				$result = $v1 . " * " . $v2 . " = " . $v1 * $v2;
				break;
			case "divisão":
				$result = $v1 . " / " . $v2 . " = " . $v1 / $v2;
				break;
			default:
				$result = "opção invalida";
				break;
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<title>Exercicio 1</title>
</head>

<body>

	<nav class="navbar bg-body-tertiary">
		<div class="container">
			<a class="nav-link" href="index.php">
				HOME
			</a>
		</div>
	</nav>

	<form method="POST">
		<div class="mb-3">
			<label for="v1" class="form-label">Informe o primeiro valor:</label>
			<input type="text" id="v1" name="v1" class="form-control">
		</div>
		<div class="mb-3">
			<label for="v2" class="form-label">Informe o segundo valor:</label>
			<input type="text" id="v2" name="v2" class="form-control">
		</div>
		<div class="mb-3">
			<label for="disabledSelect" class="form-label">Defina a operação matemática</label>
			<select id="disabledSelect" class="form-select" name="math">
				<option value="" disabled>Escolha uma operação matemática:</option>
				<option>soma</option>
				<option>subtração</option>
				<option>multiplicação</option>
				<option>divisão</option>
			</select>
		</div>
		<button type="submit" class="btn btn-primary">Calcular</button>
	</form>

	<ul class="list-group">
		<li class="list-group-item d-inline-flex row-gap-3">Resultado: <?php echo $result; ?></li>
	</ul>

	<?php
	
	?>
</body>

</html>