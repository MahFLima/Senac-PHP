<!DOCTYPE html>
<html lang="en">

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
      width: 100vw;
      display: flex;
      flex-direction: column;
      align-items: center;
      font-family: "Poppins", sans-serif;
    }

    form {
      color: white;
      margin-top: 2rem;
      width: 500px;
      padding: 2rem;
      background: blueviolet;
      display: flex;
      flex-direction: column;
      gap: 1rem;
      border-radius: 2rem;
    }

    label{
      font-size: 1.5rem;
    }
    
    h2{
      margin: 2rem 0;
    }

    p{
      margin-bottom: 0.5rem;
    }

    input{
      width: 100%;
      border: none;
      padding: 0.5rem 1rem;
      border-radius: 0.5rem;
    }

    input[type=submit] {
      width: 6.25rem;
      border-radius: 4px;
      background: green;
      color: white;
      margin-top: 1rem;
    }
  </style>
  
  <?php
  $nome = "";
  $n1 = "";
  $n2 = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
  }
  ?>

  <div class="container">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome">

      <label for="n1">Nota 1</label>
      <input type="number" id="n1" name="n1">

      <label for="n2">Nota 2</label>
      <input type="number" id="n2" name="n2">

      <input type="submit" value="Enviar">
    </form>

    <h2>Dados do Formulário:</h2>
    <p>Nome:
      <?php echo $nome; ?>
    </p>
    <p>Nota 1:
      <?php echo $n1; ?>
    </p>
    <p>Nota 2:
      <?php echo $n2; ?>
    </p>
    <p>Media:
      <?php
      $media = -1;
      $media = (floatval($n1) + floatval($n2)) / 2;

      if($media >= 7){
        echo $media, " (Parabens, você passou)";
      } elseif($media < 6){
        echo $media, " (Infelizmente, você reprovou)";
      } else {
        echo $media, " (Prepare-se, você está de recuperação)";
      }
      ?>
    </p>
  </div>

</body>

</html>