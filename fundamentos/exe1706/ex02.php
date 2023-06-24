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
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		body{
			display: flex;
			flex-direction: column;
			align-items: center;
			gap: 2rem;
		}
		nav{
			width: 100%;
		}
		form{
			width: 100%;
			max-width: 500px;

		}
	</style>

	<?php
	$numbers = "";
	$result = [""];
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$numbers = $_POST["numbers"];
		$result = explode(",", $numbers);
	}
	?>
	<nav class="navbar bg-body-tertiary">
		<div class="container">
			<a class="nav-link" href="index.php">
				HOME
			</a>
		</div>
	</nav>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div class="mb-3">
			<label for="numbers" class="form-label">Informe os valores:</label>
			<input type="text" id="numbers" name="numbers" placeholder="ex: 10,2,13,-4" class="form-control">
		</div>
		<input type="submit" value="Enviar" class="btn btn-success">
		<?php
		sort($result);
		foreach ($result as $num) {
			echo $num . "\n";
		}
		?>
	</form>
</body>

</html>