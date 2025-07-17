

<!-- Sidebar -->
<aside id="sidebar"
  class="fixed md:static top-0 left-0 h-full w-64 bg-white border-r z-50 transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out flex flex-col justify-between overflow-y-auto">

  <!-- Sidebar Content -->
  <div>
    <div class="px-6 py-4 text-xl font-bold border-b">Tasty Food</div>
    <nav class="flex flex-col gap-1 p-4 text-sm">
      <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2 py-2 px-3 rounded hover:bg-gray-100">
        <ion-icon name="grid-outline" class="text-lg"></ion-icon>
        Dashboard
      </a>
      <a href="{{ route('admin.news.index') }}" class="flex items-center gap-2 py-2 px-3 rounded hover:bg-gray-100">
        <ion-icon name="newspaper-outline" class="text-lg"></ion-icon>
        Berita
      </a>
      <a href="{{ route('admin.categories.index') }}" class="flex items-center gap-2 py-2 px-3 rounded hover:bg-gray-100">
        <ion-icon name="pricetags-outline" class="text-lg"></ion-icon>
        Kategori
      </a>
      <a href="{{ route('admin.galleries.index') }}" class="flex items-center gap-2 py-2 px-3 rounded hover:bg-gray-100">
        <ion-icon name="images-outline" class="text-lg"></ion-icon>
        Galeri
      </a>
      <a href="/admin/kontak" class="flex items-center gap-2 py-2 px-3 rounded hover:bg-gray-100">
        <ion-icon name="mail-outline" class="text-lg"></ion-icon>
        Kontak Masuk
      </a>
      <a href="/admin/kontak" class="flex items-center gap-2 py-2 px-3 rounded hover:bg-gray-100">
        <ion-icon name="call-outline" class="text-lg"></ion-icon>
        Informasi Kontak
      </a>
    </nav>
  </div>

  <!-- Logout -->
  <div class="p-4 border-t text-sm">
    <form action="/logout" method="POST">
      @csrf
      <button class="flex items-center gap-2 text-red-500 hover:underline">
        <ion-icon name="log-out-outline" class="text-lg"></ion-icon>
        Logout
      </button>
    </form>
  </div>
</aside>


    <!-- Overlay -->
    <div onclick="toggleSidebar()" id="sidebarOverlay"
      class="fixed inset-0 bg-black/40 z-40 hidden md:hidden"></div>

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