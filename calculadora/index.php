<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Document</title>
</head>

<?php
$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $result = "ok";
}

?>

<body class="bg-violet-300 w-screen h-screen flex justify-center items-center text-gray-50">
  <main class="w-full max-w-sm bg-gray-800 rounded-3xl flex flex-col justify-center p-10 gap-6">
    <div class="h-20 bg-gray-700 rounded-2xl"></div>
    <form method="POST" class="flex flex-wrap justify-center w-full gap-4 text-2xl">
      <button class="w-14 h-14 sm:w-16 sm:h-16 bg-gray-700   rounded-full shadow-lg hover:shadow-indigo-600/50">CE</button>
      <button class="w-14 h-14 sm:w-16 sm:h-16 bg-gray-700   rounded-full shadow-lg hover:shadow-indigo-600/50">C</button>
      <button class="w-14 h-14 sm:w-16 sm:h-16 bg-gray-700   rounded-full shadow-lg hover:shadow-indigo-600/50">%</button>
      <button class="w-14 h-14 sm:w-16 sm:h-16 bg-violet-800 rounded-full shadow-lg hover:shadow-indigo-600/50">÷</button>
      <button class="w-14 h-14 sm:w-16 sm:h-16 bg-gray-700   rounded-full shadow-lg hover:shadow-indigo-600/50">7</button>
      <button class="w-14 h-14 sm:w-16 sm:h-16 bg-gray-700   rounded-full shadow-lg hover:shadow-indigo-600/50">8</button>
      <button class="w-14 h-14 sm:w-16 sm:h-16 bg-gray-700   rounded-full shadow-lg hover:shadow-indigo-600/50">9</button>
      <button class="w-14 h-14 sm:w-16 sm:h-16 bg-violet-800 rounded-full shadow-lg hover:shadow-indigo-600/50">×</button>
      <button class="w-14 h-14 sm:w-16 sm:h-16 bg-gray-700   rounded-full shadow-lg hover:shadow-indigo-600/50">4</button>
      <button class="w-14 h-14 sm:w-16 sm:h-16 bg-gray-700   rounded-full shadow-lg hover:shadow-indigo-600/50">5</button>
      <button class="w-14 h-14 sm:w-16 sm:h-16 bg-gray-700   rounded-full shadow-lg hover:shadow-indigo-600/50">6</button>
      <button class="w-14 h-14 sm:w-16 sm:h-16 bg-violet-800 rounded-full shadow-lg hover:shadow-indigo-600/50">-</button>
      <button class="w-14 h-14 sm:w-16 sm:h-16 bg-gray-700   rounded-full shadow-lg hover:shadow-indigo-600/50">1</button>
      <button class="w-14 h-14 sm:w-16 sm:h-16 bg-gray-700   rounded-full shadow-lg hover:shadow-indigo-600/50">2</button>
      <button class="w-14 h-14 sm:w-16 sm:h-16 bg-gray-700   rounded-full shadow-lg hover:shadow-indigo-600/50">3</button>
      <button class="w-14 h-14 sm:w-16 sm:h-16 bg-violet-800 rounded-full shadow-lg hover:shadow-indigo-600/50">+</button>
      <button class="w-14 h-14 sm:w-16 sm:h-16 bg-gray-700   rounded-full shadow-lg hover:shadow-indigo-600/50">±</button>
      <button class="w-14 h-14 sm:w-16 sm:h-16 bg-gray-700   rounded-full shadow-lg hover:shadow-indigo-600/50">0</button>
      <button class="w-14 h-14 sm:w-16 sm:h-16 bg-gray-700   rounded-full shadow-lg hover:shadow-indigo-600/50">,</button>
      <button class="w-14 h-14 sm:w-16 sm:h-16 bg-violet-500 rounded-full shadow-lg hover:shadow-indigo-600/50">=</button>
    </form>
  </main>
  <?php echo $result ?>
</body>

</html>