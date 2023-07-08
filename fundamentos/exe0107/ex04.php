<?php

$x = 0;
$count = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$x = $_POST["value"];

	for ($i = 0; $i <= $x; $i++) {
		array_push($count, $i);
	}
}

function countNumber($item)
{
	foreach ($item as $num) {
		echo $num . "\n";
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
	<title>Document</title>
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
			<label for="value" class="form-label">Informe um numero inteiro:</label>
			<input type="text" id="" name="value" class="form-control">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	<ul class="list-group">
		<li class="list-group-item d-inline-flex row-gap-3">Contagem: <?php echo countNumber($count) ?></li>
	</ul>

</body>

</html>