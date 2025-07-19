<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Login & Register - Tasty Food' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-cover bg-center flex items-center justify-center px-4"
      style="background-image: url('{{ asset('img/bg-card.png') }}');">
    <div class="w-full sm:w-[95%] md:w-[500px] lg:w-[600px] bg-white rounded-2xl shadow-xl px-6 py-8">
        {{ $slot }}
    </div>
</body>
</html>
