<?php
$str = "";
$result = 0;
$pieces = [];

function countNumberOf($value){
    $x = strlen($value);
    for($i = 1; $i < $x; $i++){
        echo $i ."\n";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST["value"];
    $pieces = str_split($str);

    foreach ($pieces as $piece) {
        $result++;
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
    <form method="POST">
        <div class="mb-3">
            <label for="value" class="form-label">Informe um texto:</label>
            <textarea id="" name="value" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <ul class="list-group">
        <li class="list-group-item d-inline-flex row-gap-3">Texto: <?php echo $str ?></li>
        <li class="list-group-item d-inline-flex row-gap-3">Total de caracteres: <?php echo $result ?></li>
        <li class="list-group-item d-inline-flex row-gap-3">Imprime: <?php echo countNumberOf($str)?></li>
    </ul>

</body>

</html>