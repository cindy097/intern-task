<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tasty Food</title>
  @vite('resources/css/app.css')

  <!-- Ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  
</head>

<body class="bg-white text-white font-sans overflow-x-hidden">

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
    <h2 class="font-bold text-lg">MENU</h2>
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

<!-- Hero / Jumbotron -->
<section class="h-[550px] bg-cover bg-center relative flex items-end pb-20" style="background-image: url('{{ asset('img/bg-card.png') }}');">
  <div class="max-w-7xl mx-auto w-full px-4 md:px-10 lg:px-10">
    <h1 class="text-2xl md:text-5xl mb-[180px] font-extrabold uppercase">BERITA KAMI</h1>
  </div>
</section>

    <!-- SCRIPT -->
  <script>
    function toggleMenu() {
      const menu = document.getElementById('mobileMenu');
      menu.classList.toggle('-translate-x-full');
    }
  </script>

  <!-- berita utama -->
 <section class="bg-[#f4f4f4] py-20 px-4 md:px-10 lg:px-10 xl:px-10">
  <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-10 group">

    <!-- Gambar -->
    <div class="overflow-hidden rounded-xl shadow-lg  lg:max-w-[400px]">
    <img src="{{ asset('img/gallery3.jpg') }}" alt="Salad Nusantara"
     class="
        w-[350px] aspect-square
        sm:w-[300px]
        md:w-[700px]
        lg:w-[360px]
        xl:w-[400px]
        object-cover rounded-xl
    ">

    </div>

    <!-- Konten -->
    <div class="w-full">
      <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-3 mt-4">APA SAJA MAKANAN KHAS NUSANTARA?</h2>
      <p class="text-gray-700 text-base leading-relaxed mb-3">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus.
      </p>
      <p class="text-gray-700 text-base leading-relaxed mb-5">
        Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.
      </p>
      <a href="#" class="inline-block bg-black text-white px-6 py-3 font-semibold hover:bg-gray-800 transition-all duration-300 active:scale-95">
        BACA SELENGKAPNYA
      </a>
    </div>
  </div>
</section>

<section class="py-20 px-4 md:px-10 lg:px-10 xl:px-10 bg-white">
  <div class="max-w-7xl mx-auto">
    <h2 class="text-2xl font-bold text-gray-900 mb-8">BERITA LAINNYA</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-6">
      <!-- Card -->
      <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:scale-105 transition-transform duration-300">
        <img src="img/berita_mini1.jpg" alt="Berita 1" class="w-full h-[140px] object-cover">
        <div class="p-4">
          <h3 class="text-lg font-semibold text-gray-900">LOREM IPSUM</h3>
          <p class="text-sm text-gray-600 mt-2 mb-4 leading-snug">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellusornare, augue eu rutrum commodo,
          </p>
          <a href="#" class="text-yellow-500 text-sm hover:underline">Baca selengkapnya</a>
        </div>
      </div>

      <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:scale-105 transition-transform duration-300">
        <img src="img/berita_mini2.jpg" alt="Berita 2" class="w-full h-[140px] object-cover">
        <div class="p-4">
          <h3 class="text-lg font-semibold text-gray-900">LOREM IPSUM</h3>
          <p class="text-sm text-gray-600 mt-2 mb-4 leading-snug">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellusornare, augue eu rutrum commodo,
          </p>
          <a href="#" class="text-yellow-500 text-sm hover:underline">Baca selengkapnya</a>
        </div>
      </div>

        <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:scale-105 transition-transform duration-300">
        <img src="img/berita_mini3.jpg" alt="Berita 2" class="w-full h-[140px] object-cover">
        <div class="p-4">
          <h3 class="text-lg font-semibold text-gray-900">LOREM IPSUM</h3>
          <p class="text-sm text-gray-600 mt-2 mb-4 leading-snug">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellusornare, augue eu rutrum commodo,
          </p>
          <a href="#" class="text-yellow-500 text-sm hover:underline">Baca selengkapnya</a>
        </div>
      </div>

        <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:scale-105 transition-transform duration-300">
        <img src="img/berita_mini4.jpg" alt="Berita 2" class="w-full h-[140px] object-cover">
        <div class="p-4">
          <h3 class="text-lg font-semibold text-gray-900">LOREM IPSUM</h3>
          <p class="text-sm text-gray-600 mt-2 mb-4 leading-snug">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellusornare, augue eu rutrum commodo,
          </p>
          <a href="#" class="text-yellow-500 text-sm hover:underline">Baca selengkapnya</a>
        </div>
      </div>

        <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:scale-105 transition-transform duration-300">
        <img src="img/berita_mini1.jpg" alt="Berita 2" class="w-full h-[140px] object-cover">
        <div class="p-4">
          <h3 class="text-lg font-semibold text-gray-900">LOREM IPSUM</h3>
          <p class="text-sm text-gray-600 mt-2 mb-4 leading-snug">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellusornare, augue eu rutrum commodo,
          </p>
          <a href="#" class="text-yellow-500 text-sm hover:underline">Baca selengkapnya</a>
        </div>
      </div>

        <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:scale-105 transition-transform duration-300">
        <img src="img/berita_mini2.jpg" alt="Berita 2" class="w-full h-[140px] object-cover">
        <div class="p-4">
          <h3 class="text-lg font-semibold text-gray-900">LOREM IPSUM</h3>
          <p class="text-sm text-gray-600 mt-2 mb-4 leading-snug">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellusornare, augue eu rutrum commodo,
          </p>
          <a href="#" class="text-yellow-500 text-sm hover:underline">Baca selengkapnya</a>
        </div>
      </div>

        <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:scale-105 transition-transform duration-300">
        <img src="img/berita_mini3.jpg" alt="Berita 2" class="w-full h-[140px] object-cover">
        <div class="p-4">
          <h3 class="text-lg font-semibold text-gray-900">LOREM IPSUM</h3>
          <p class="text-sm text-gray-600 mt-2 mb-4 leading-snug">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellusornare, augue eu rutrum commodo,
          </p>
          <a href="#" class="text-yellow-500 text-sm hover:underline">Baca selengkapnya</a>
        </div>
      </div>

        <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:scale-105 transition-transform duration-300">
        <img src="img/berita_mini4.jpg" alt="Berita 2" class="w-full h-[140px] object-cover">
        <div class="p-4">
          <h3 class="text-lg font-semibold text-gray-900">LOREM IPSUM</h3>
          <p class="text-sm text-gray-600 mt-2 mb-4 leading-snug">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellusornare, augue eu rutrum commodo,
          </p>
          <a href="#" class="text-yellow-500 text-sm hover:underline">Baca selengkapnya</a>
        </div>
      </div>
  </div>
</section>

<footer class="bg-black text-white px-4 md:px-10 lg:px-10 xl:px-10 pt-16 pb-10">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-10">
    
    <!-- Logo dan deskripsi -->
    <div>
      <h2 class="text-2xl font-bold mb-4">Tasty Food</h2>
      <p class="text-sm mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

      <div class="flex gap-4">
        <img src="img/fb_logo.png" alt="Facebook" class="w-6 h-6 hover:scale-110 transition-transform duration-200">
        <img src="img/twt_logo.png" alt="Twitter" class="w-6 h-6 hover:scale-110 transition-transform duration-200">
      </div>
    </div>

    <!-- Useful Links -->
    <div>
      <h3 class="font-semibold text-lg mb-4">Useful links</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="#" class="hover:underline">Blog</a></li>
        <li><a href="#" class="hover:underline">Hewan</a></li>
        <li><a href="#" class="hover:underline">Galeri</a></li>
        <li><a href="#" class="hover:underline">Testimonial</a></li>
      </ul>
    </div>

    <!-- Privacy -->
    <div>
      <h3 class="font-semibold text-lg mb-4">Privacy</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="#" class="hover:underline">Karir</a></li>
        <li><a href="#" class="hover:underline">Tentang Kami</a></li>
        <li><a href="#" class="hover:underline">Kontak Kami</a></li>
        <li><a href="#" class="hover:underline">Servis</a></li>
      </ul>
    </div>

    <!-- Contact Info -->
    <div>
      <h3 class="font-semibold text-lg mb-4">Contact Info</h3>
      <div class="space-y-4 text-sm">
        <div class="flex items-center gap-2">
          <img src="img/mail.png" class="w-4" alt="email">
          <span>tastyfood@gmail.com</span>
        </div>
        <div class="flex items-center gap-2">
          <img src="img/call.png" class="w-4 h-4" alt="phone">
          <span>+62 812 3456 7890</span>
        </div>
        <div class="flex items-center gap-2">
          <img src="img/loc.png" class="w-3" alt="location">
          <span>Kota Bandung, Jawa Barat</span>
        </div>
      </div>
    </div>
  </div>

  <div class="text-center text-sm text-gray-400 mt-12">
    Copyright &copy; 2023 All rights reserved
  </div>
</footer>

</body>
</html>