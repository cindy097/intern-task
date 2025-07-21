<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Login & Register - Tasty Food' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-cover bg-center flex items-center justify-center px-4" style="background-image: url('{{ asset('img/bg-card.png') }}');">
    <div class="w-[90%] max-w-[500px] bg-white rounded-2xl shadow-xl px-4 sm:px-8 py-8">
        {{ $slot }}
    </div>
</body>
</html>