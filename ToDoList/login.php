<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="bg-neutral-950 flex flex-col justify-center items-center h-screen">
    <style>
        body{
            font-family: "Inter", sans-serif;
        }
    </style>
    <form class="flex flex-col w-full max-w-md items-center text-gray-100 text-sm">
        <div class="flex flex-col gap-4 w-28">
            <img src="./assets/rocket.svg" />
            <img src="./assets/todo.svg" />
        </div>
        <p class="text-zinc-500 mt-4 text-lg">Faça login e comece a usar</p>
        <div class="w-full mt-12 flex flex-col gap-3">
            <label for="email">Endereço de e-mail:</label>
            <input class="px-4 py-3 rounded bg-neutral-600" required type="email" id="email" name="email" placeholder="mary@exemple.com">
            
        </div>
        <div class="w-full mt-4 flex flex-col gap-3 text-sm relative">
            <label for="password">Sua senha:</label>
            <input class="px-8 py-3 rounded bg-neutral-600" required type="password" id="password" name="password" placeholder="*************">
            <img class="w-5 h-5 absolute bottom-3 left-1" src="./assets/lock.svg"/>
        </div>



        <button class="w-full font-semibold mt-10 p-3 bg-purple-500 text-black rounded hover:opacity-70">Entrar na plataforma</button>

        <a href="#" class="underline decoration-1 text-zinc-500 mt-8 hover:text-gray-100">Esqueceu sua senha?</a>
        <a href="#" class="underline decoration-1 text-zinc-500 mt-4 hover:text-gray-100">Não possui conta? Crie uma agora</a>
    </form>
</body>

</html>