<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $title ?? 'Dashboard' }}</title>
  @vite('resources/css/app.css')
  <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-gray-50 text-gray-800 h-screen overflow-hidden">

  <!-- Mobile Navbar -->
  <nav class="flex justify-between items-center px-4 py-4 bg-white border-b shadow md:hidden">
    <a href="{{ url('/') }}" target="_blank" rel="noopener noreferrer">
      <div class="font-bold text-xl hover:underline cursor-pointer">
        <h1>TASTY FOOD</h1>
      </div>
    </a>
    <button onclick="toggleSidebar()" class="text-3xl">
      <ion-icon name="menu-outline"></ion-icon>
    </button>
  </nav>

  <!-- Wrapper -->
  <div class="flex h-[calc(100vh-64px)] md:h-screen overflow-hidden">

<x-admin-sidebar/>

    <!-- Main Content -->
    <main class="flex-1 overflow-y-auto px-4 py-6 sm:px-6 lg:px-10 w-full">
      <div class="max-w-7xl mx-auto">
        {{ $slot }}
      </div>
    </main>
  </div>
  @stack('scripts')
</body>
</html>
