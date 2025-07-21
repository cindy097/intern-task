  <!-- Navbar -->
<nav class="absolute top-0 left-0 w-full z-50 py-6">
  <div class="max-w-7xl mx-auto px-4 md:px-10 lg:px-10 xl:px-10 flex justify-between items-center">
    <!-- Logo -->
    <h1 class="font-bold text-xl text-white">TASTY FOOD</h1>

    <!-- Hamburger (mobile only) -->
    <button onclick="toggleMenu()" class="text-3xl md:hidden text-white">
      <ion-icon name="menu-outline"></ion-icon>
    </button>

    <!-- Menu Desktop -->
    <ul class="hidden md:flex space-x-6 text-sm font-medium text-white">
      <li><a href="{{ url('/') }}" class="hover:text-gray-300">HOME</a></li>
      <li><a href="{{ route('tentang') }}" class="hover:text-gray-300">TENTANG</a></li>
      <li><a href="{{ route('berita') }}" class="hover:text-gray-300">BERITA</a></li>
      <li><a href="{{ route('galeri') }}" class="hover:text-gray-300">GALERI</a></li>
      <li><a href="{{ route('kontak') }}" class="hover:text-gray-300">KONTAK</a></li>
    </ul>
  </div>
</nav>

<!-- Sidebar Mobile -->
<div id="mobileMenu" class="fixed top-0 left-0 h-full w-64 bg-white/95 backdrop-blur-md shadow-lg transform -translate-x-full transition-transform duration-300 ease-in-out z-50 md:hidden flex flex-col text-black">
  <div class="flex justify-between items-center px-6 py-4 border-b">
    <h2 class="font-bold text-lg">TASTY FOOD</h2>
    <button onclick="toggleMenu()" class="text-2xl">
      <ion-icon name="close-outline"></ion-icon>
    </button>
  </div>
  <div class="flex flex-col p-6 space-y-4">
    <a href="{{ url('/') }}" class="hover:text-gray-600">HOME</a>
    <a href="{{ route('tentang') }}" class="hover:text-gray-600">TENTANG</a>
    <a href="{{ route('berita') }}" class="hover:text-gray-600">BERITA</a>
    <a href="{{ route('galeri') }}" class="hover:text-gray-600">GALERI</a>
    <a href="{{ route('kontak') }}" class="hover:text-gray-600">KONTAK</a>
  </div>
</div>