<?php
$cod = "";
$total = 0;
$result = "";

function formatValue($valor) {
	$valorString = strval($valor); // converte o valor para uma string
	$posicaoVirgula = strpos($valorString, '.'); // encontra a posição da vírgula
	
	if ($posicaoVirgula === false) {
			return $valorString .",00";
	} else {
			$parteDecimal = substr($valorString, $posicaoVirgula + 1); // obtém a parte decimal após a vírgula
			
			if (intval($parteDecimal) > 0) {
					$decimal = intval($parteDecimal) / 100;
					return round($valor, 2);
			} else {
				return $valorString;
			}
	}
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$cod = $_POST["cod"];
	$total = $_POST["total"];

	switch ($cod) {
		case 1:
			$result = "Cliente Comum (sem desconto): " . "R$ " . formatValue($total);
			break;
		case 2:
			$result = "Funcionario (10% de desconto): " . "R$ " . formatValue($total - $total * 0.1);
			break;
		case 3:
			$result = "Cliente VIP (5% de desconto): " . "R$ " . formatValue($total - $total * 0.05);
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
	<title>Document</title>
</head>

<body>
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			display: flex;
			flex-direction: column;
			align-items: center;
			gap: 2rem;
		}

		nav {
			width: 100%;
		}

		form {
			width: 100%;
			max-width: 500px;
			margin-top: 2rem;
		}
	</style>

	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div class="mb-3">
			<label for="total" class="form-label">Total da Compra:</label>
			<input type="text" id="total" name="total" class="form-control" placeholder="ex: 10.99">
		</div>
		<div class="mb-3">
			<label for="disabledSelect" class="form-label">Comprador</label>
			<select id="disabledSelect" class="form-select" name="cod">
				<option value="" disabled>Escolha qual comprador:</option>
				<option value="1">Cliente Comum (sem desconto)</option>
				<option value="2">Funcionario (10% de desconto)</option>
				<option value="3">Cliente Vip (5% de desconto)</option>
			</select>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
		<?php echo $result?>
	</form>
</body>

</html>