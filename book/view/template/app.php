<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body class="bg-stone-950">
    <header class=" bg-stone-900 border-b-2 border-stone-900  px-8 py-4">
        <nav class="max-w-screen-lg mx-auto flex justify-between text-stone-400">
            <div class="text-xl font-bold">Book Wise</div>
            <ul class="justify-between flex gap-5">
                <li>
                    <a href="index" class="text-green-700 underline font-medium">Explorar</a>
                </li>
                <li>
                    <a class="hover:underline" href="/">Meus Livros</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a class="underline" href="/">Fazer login</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="mx-auto max-w-screen-lg mt-12 space-y-5 p-5">
       <?php
            require  "view/{$view}.php"
       ?>
    </main>
</body>
</html>