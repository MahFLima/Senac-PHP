<?php
$v1 = 0;
$v2 = 0;
$count = [];

function countNumber($item)
{
    foreach ($item as $num) {
        echo $num . "\n";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $v1 = $_POST["v1"];
    $v2 = $_POST["v2"];

    for ($i = $v1 + 1; $i < $v2; $i++) {
        array_push($count, $i);
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
            <label for="v1" class="form-label">Inicio da contagem:</label>
            <input type="text" id="v1" name="v1" class="form-control">
        </div>
        <div class="mb-3">
            <label for="v2" class="form-label">Fim da contagem:</label>
            <input type="text" id="v2" name="v2" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Iniciar</button>
    </form>
    <ul class="list-group">
        <li class="list-group-item d-inline-flex row-gap-3">Contagem: <?php echo countNumber($count) ?></li>
    </ul>

</body>

</html>