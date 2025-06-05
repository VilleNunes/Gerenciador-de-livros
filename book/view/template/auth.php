<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Document</title>
</head>
<body class="grid grid-cols-2 h-screen bg-gray-200">
    <div class="bg-stone-950 flex justify-center">
        
    </div>
    <div class="flex justify-center items-center">
        <?php
            require  "view/{$view}.php"
        ?>
    </div>
</body>
</html>