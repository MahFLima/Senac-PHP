<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title><?= esc($title) ?></title>
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            font-family: "Inter", sans-serif;
        }

        main {
            display: flex;
            flex-direction: column;
            gap: 1rem;
            width: 100%;
            max-width: 600px;
        }

        .container {
            width: 100%;
            padding: 1rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin-top: 2rem;
            color: white;
            background: blueviolet;
            border-radius: 1rem;
        }

        h1 {
            text-align: center;
        }

        p {
            text-indent: 3ch;
        }

        form {
            display: flex;
            gap: 1rem;
            align-items: center;
        }

        input {
            width: 100%;
            padding: 0.5rem 1rem;
        }

        button {
            width: 100px;
            background: green;
            color: whitesmoke;
            border: none;
            border-radius: 4px;
            padding: 0.5rem 1rem;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.7;
        }
    </style>
    <main>
        <div class="container">
            <h1><?= esc($heading) ?></h1>
            <p><?= esc($message) ?></p>
        </div>
        <form action="/news/create" method="post">
            <?= csrf_field() ?>
            <label for="item">Item</label>
            <input type="text" name="item" id="item" >
            <button type="submit">Criar</button>
        </form>
        <div class="content">
            <?php foreach ($todo_list as $item) : ?>
                <li><?= esc($item) ?></li>
            <?php endforeach ?>
        </div>
    </main>
</body>

</html>