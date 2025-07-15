<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login & Register - Tasty Food</title>
    @vite('resources/css/app.css')
</head>
<body style="background-image: url('{{ asset('img/bg-card.png') }}'); background-size: cover; background-position: center;" class="min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md px-6 py-8 shadow-lg rounded-lg bg-white">
        {{ $slot }}
    </div>
</body>
</html>
