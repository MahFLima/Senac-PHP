<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
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
      margin: 1rem;
      font-family: "Poppins", sans-serif;
    }

    .title {
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }

    .subtitle {
      font-size: 1.5rem;
      font-weight: 600;
      margin-bottom: 1rem;
    }
  </style>

  <?php
  echo "<p class='title'>Hello World with PHP</p>";
  echo "<p class='subtitle'>Arrays</p>";

  $estados = [
    'SP' => 'São Paulo',
    'MG' => 'Minas Gerais',
    'RJ' => 'Rio de Janeiro',
    'ES' => 'Espírito Santo'
  ];

  // sort($estados);
  
  $cadastro[0] = " Mario ";
  $cadastro[1] = " Maria ";
  $cadastro[2] = " Eduardo ";
  $cadastro[3] = " Clemencia ";

  foreach ($estados as $sigla => $nome) {
    echo $nome . " - " . $sigla . PHP_EOL;
    echo "<br/>";
  }

  echo "<br/>";

  sort($cadastro);

  echo "<p class='subtitle'>Nomes iniciando em M</p>";

  foreach ($cadastro as $nome) {
    $nome_trimmed = trim($nome);

    if ($nome_trimmed === "M") {
      echo $nome_trimmed;
      echo "<br/>";
    }
  }
  ?>

</body>

</html>