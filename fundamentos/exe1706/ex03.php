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
    }

    nav {
      width: 100%;
    }

    form {
      width: 500px;
      background: #DCE9E2;
      padding: 1rem;
      margin-top: 2rem;
      border-radius: 1rem;
    }

    ul{
      margin-top: 1rem;
    }
  </style>

  <?php
  $nome = "";
  $n1 = "";
  $n2 = "";
  $n3 = "";
  $notas = ["", "", ""];

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];

    $notas = array($n1, $n2, $n3);
  }
  ?>


  <!-- <div class="form-floating">
      <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com">
      <label for="floatingInputGrid">Email address</label>
  </div> -->

  <nav class="navbar bg-body-tertiary">
    <div class="container">
      <a class="nav-link" href="index.php">
        HOME
      </a>
    </div>
  </nav>

  <div>
    <form method="POST">
      <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" id="nome" name="nome" class="form-control">
      </div>

      <div class="mb-3">
        <label for="n1" class="form-label">Nota 1</label>
        <input type="number" id="n1" name="n1" required class="form-control">
      </div>

      <div class="mb-3">
        <label for="n2" class="form-label">Nota 2</label>
        <input type="number" id="n2" name="n2" required class="form-control">
      </div>

      <div class="mb-3">
        <label for="n3" class="form-label">Nota 3</label>
        <input type="number" id="n3" name="n3" required class="form-control">
      </div>

      <input type="submit" value="Enviar" class="btn btn-success">
    </form>

    <ul class="list-group">
      <li class="list-group-item">Nome:
        <?php echo $nome; ?>
      </li>
      <li class="list-group-item">Nota 1:
        <?php echo $notas[0]; ?>
      </li>
      <li class="list-group-item">Nota 2:
        <?php echo $notas[1]; ?>
      </li>
      <li class="list-group-item">Nota 3:
        <?php echo $notas[2]; ?>
      </li>
      <li class="list-group-item">Media:
        <?php
        $media = round((floatval($n1) + floatval($n2) + floatval($n3)) / 3, 2);

        if ($media >= 7) {
          echo $media, " (Parabens, você passou)";
        } elseif ($media < 6) {
          echo $media, " (Infelizmente, você reprovou)";
        } else {
          echo $media, " (Prepare-se, você está de recuperação)";
        }
        ?>
      </li>
    </ul>
  </div>

</body>

</html>