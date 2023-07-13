<?php
  $tasks = [];
  $total = count($tasks);
  $result = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $result = $_POST["result"];
    array_push($tasks, $result);
    $total = count($tasks);
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>ToDo List</title>
</head>

<body class="flex flex-col h-screen text-gray-100 font-sans">
  <header class="h-1/5 bg-neutral-950 flex justify-center items-center">
    <img src="./assets/logo.svg" />
  </header>
  <main class="h-4/5 bg-neutral-800 flex flex-col items-center py-4 gap-16">
    <div class="flex flex-col items-center w-full px-4 sm:w-4/5 lg:w-3/5 gap-16">
      <form method="POST" class="w-full">
        <div class="flex w-full gap-2">
          <input name="result" type="text" class="w-full bg-neutral-600 p-4 rounded-lg" placeholder="Adicione uma nova tarefa">
          <button type="submit" class="bg-cyan-800 p-4 rounded-lg font-semibold hover:opacity-70">Criar</button>
        </div>
      </form>
      <div class="w-full">
        <ul class="flex justify-between font-bold text-lg list-none">
          <li class="text-cyan-500">Tarefas criadas: <?php echo $total?></li>
          <li class="text-purple-500">Concluidas: 0</li>
        </ul>
        <div class="w-full mt-4 flex flex-col gap-4">
          <?php
            foreach($tasks as $task){
              echo "<form class='w-full bg-neutral-600 p-4 rounded-lg flex items-center gap-2 relative'>";
              echo "<input type='checkbox'>";
              echo "<label class='pr-8' for='$task'>$task</label>";
              echo "<button type='submit' class='absolute right-4'><img src='./assets/trash.svg'/></button>";
              echo "</form>";
            }
          ?>
        </div>
      </div>
    </div>
  </main>
</body>

</html>