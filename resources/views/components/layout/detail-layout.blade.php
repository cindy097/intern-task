<!-- resources/views/components/layout/detail-layout.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? 'Detail Berita' }}</title>
  @vite('resources/css/app.css')
</head>
<body class="font-sans text-gray-800 bg-white">

  <X-navbar/>

  {{-- Konten Halaman --}}
  <main class="px-4 md:px-10 max-w-6xl mx-auto py-10">
    {{ $slot }}
  </main>

  {{-- Footer tetap sama --}}
  <x-footer/>

</body>
</html>
