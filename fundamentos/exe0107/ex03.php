<?php
$salario = 0;
$result = 0;

function formatValue($valor)
{
    $valorString = strval($valor); // converte o valor para uma string
    $posicaoVirgula = strpos($valorString, '.'); // encontra a posição da vírgula

    if ($posicaoVirgula === false) {
        return $valorString . ".00";
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
    $salario = $_POST["salario"];
    switch ($salario) {
        case $salario <= 300:
            $result = $salario * 1.5;
            break;
        case $salario > 300:
            $result = $salario * 1.3;
            break;
        default:
            $result = 0;
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
    <title>Exercicio 3</title>
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
            <label for="salario" class="form-label">Salario Atual:</label>
            <input type="text" id="salario" name="salario" class="form-control" placeholder="ex: 300.00">
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
    <ul class="list-group">
        <li class="list-group-item">Salario Atual: R$<?php echo formatValue($salario) ?></li>
        <li class="list-group-item">Salario Reajustado: R$<?php echo formatValue($result) ?></li>
    </ul>
</body>

</html>