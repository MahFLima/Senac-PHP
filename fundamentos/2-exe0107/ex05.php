<?php
$x = 5;
$count = [];
$y = "";

function countNumber($arrayN)
{
    foreach ($arrayN as $i) {
        echo $i . " * ";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $x = $_POST["value"];

    for ($i = $x; $i > 0; $i--) {
        array_push($count, $i);
    }

    // 7 6 5 4 3 2 1
    foreach ($count as $i) {
        $y = $i * $y;
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
            <label for="value" class="form-label">Informe um valor inteiro:</label>
            <input type="text" id="value" name="value" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
    <ul class="list-group">
        <li class="list-group-item d-inline-flex row-gap-3">Fatorial: <?php echo countNumber($count) . " = " . $y ?></li>
    </ul>

</body>

</html>