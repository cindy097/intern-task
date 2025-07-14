<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $title ?? 'Dashboard' }}</title>
  @vite('resources/css/app.css')
  <script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body class="bg-gray-50 text-gray-800 h-screen overflow-hidden">

  <!-- Mobile Navbar -->
  <nav class="flex justify-between items-center px-4 py-4 bg-white border-b shadow md:hidden">
    <h1 class="font-bold text-xl">TASTY FOOD</h1>
    <button onclick="toggleSidebar()" class="text-3xl">
      <ion-icon name="menu-outline"></ion-icon>
    </button>
  </nav>

  <!-- Wrapper -->
  <div class="flex h-[calc(100vh-64px)] md:h-screen overflow-hidden">

    <!-- Sidebar -->
    <aside id="sidebar"
      class="fixed md:static top-0 left-0 h-full w-64 bg-white border-r z-50 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out flex flex-col justify-between overflow-y-auto">

      <!-- Sidebar Content -->
      <div>
        <div class="px-6 py-4 text-xl font-bold border-b">Tasty Food</div>
        <nav class="flex flex-col gap-1 p-4 text-sm">
          <a href="/admin/dashboard" class="py-2 px-3 rounded hover:bg-gray-100">Dashboard</a>
          <a href="/admin/berita" class="py-2 px-3 rounded hover:bg-gray-100">Berita</a>
          <a href="/admin/galeri" class="py-2 px-3 rounded hover:bg-gray-100">Galeri</a>
          <a href="/admin/kontak" class="py-2 px-3 rounded hover:bg-gray-100">Kontak</a>
        </nav>
      </div>

      <!-- Logout -->
      <div class="p-4 border-t text-sm">
        <form action="/logout" method="POST">
          @csrf
          <button class="text-red-500 hover:underline">Logout</button>
        </form>
      </div>
    </aside>

    <!-- Overlay -->
    <div onclick="toggleSidebar()" id="sidebarOverlay"
      class="fixed inset-0 bg-black/40 z-40 hidden md:hidden"></div>

    <!-- Main Content -->
    <main class="flex-1 overflow-y-auto px-4 py-6 md:px-10 lg:px-10 xl:px-10 w-full">
      <div class="max-w-7xl mx-auto">
        {{ $slot }}
      </div>
    </main>
  </div>

  <!-- Toggle Sidebar Script -->
  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById('sidebar');
      const overlay = document.getElementById('sidebarOverlay');

      const isOpen = sidebar.classList.contains('translate-x-0');

      if (isOpen) {
        sidebar.classList.remove('translate-x-0');
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
      } else {
        sidebar.classList.remove('-translate-x-full');
        sidebar.classList.add('translate-x-0');
        overlay.classList.remove('hidden');
      }
    }
  </script>
</body>
</html>
