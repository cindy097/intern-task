<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Food</title>
      @vite('resources/css/app.css')

      <!-- Ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<body class="bg-white text-white font-sans overflow-x-hidden">

<x-navbar/>
{{ $slot }}
<x-footer/>
        <!-- SCRIPT -->
  <script>
    function toggleMenu() {
      const menu = document.getElementById('mobileMenu');
      menu.classList.toggle('-translate-x-full');
    }
  </script>
</body>
</html>