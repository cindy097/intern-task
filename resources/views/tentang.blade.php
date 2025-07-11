<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang Kami</title>
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
  <div class="max-w-7xl mx-auto w-full px-4 md:px-10 lg:px-10 xl:px-10">
    <h1 class="text-2xl md:text-5xl mb-[180px] font-extrabold uppercase">TENTANG KAMI</h1>
  </div>
</section>

<!-- Tasty Food Section -->
<section class="bg-white py-20 px-4 md:px-10 lg:px-10 xl:px-10">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 items-start gap-12">

    <!-- Gambar (Mobile & Tablet) -->
    <div class="flex md:hidden justify-center gap-4">
      <img
        src="{{ asset('img/gallery1.jpg') }}"
        alt="Salad"
        class="rounded-xl shadow-md w-[140px]"
      >
      <img
        src="{{ asset('img/berita_mini2.jpg') }}"
        alt="Chef"
        class="rounded-xl shadow-md w-[140px]"
      >
    </div>

    <!-- Text Section -->
    <div class="md:pt-6 lg:pt-16">
      <h2 class="text-2xl md:text-3xl font-bold mb-4 text-gray-900">TASTY FOOD</h2>
      <p class="font-semibold text-gray-800 mb-3 leading-relaxed">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.
      </p>
      <p class="text-gray-600 leading-relaxed">
        Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.
      </p>
    </div>

    <!-- Gambar (≥md) -->
    <div class="hidden md:flex justify-center md:justify-end gap-4">
      <img
        src="{{ asset('img/gallery1.jpg') }}"
        alt="Salad"
        class="rounded-xl shadow-md w-[160px] md:w-[160px] lg:w-[200px] xl:w-[220px]"
      >
      <img
        src="{{ asset('img/berita_mini2.jpg') }}"
        alt="Chef"
        class="rounded-xl shadow-md w-[160px] md:w-[160px] lg:w-[200px] xl:w-[220px]"
      >
    </div>

  </div>
</section>

<!-- Section VISI & MISI -->
<section class="bg-[#f4f4f4] py-20 px-4 md:px-10 lg:px-10 xl:px-10">
  <div class="max-w-7xl mx-auto space-y-20">

    <!-- VISI -->
    <div class="flex flex-col lg:flex-row items-center gap-8">
      <!-- Gambar VISI -->
      <div class="grid grid-cols-2 gap-4 w-full lg:w-1/2">
        <div class="aspect-[1/1] rounded-xl overflow-hidden shadow-lg">
          <img src="{{ asset('img/berita_utama.jpg') }}" alt="Visi 1" class="w-full h-full object-cover">
        </div>
        <div class="aspect-[1/1] rounded-xl overflow-hidden shadow-lg">
          <img src="{{ asset('img/visi2.jpg') }}" alt="Visi 2" class="w-full h-full object-cover">
        </div>
      </div>

      <!-- Teks VISI -->
      <div class="w-full lg:w-1/2 px-2">
        <h3 class="text-black text-xl font-bold mb-4">VISI</h3>
        <p class="text-gray-900 leading-relaxed">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et suscipit. Curabitur facilisis lectus vitae eros malesuada eleifend. Mauris eget tellus odio. Phasellus vestibulum turpis ac sem commodo, at posuere eros consequat. Duis nec ex at ante volutpat posuere. Morbi vel nunc tortor. Nulla facilisi.
        </p>
      </div>
    </div>

    <!-- MISI -->
    <div class="flex flex-col-reverse lg:flex-row items-center gap-8">
      <!-- Teks MISI -->
      <div class="w-full lg:w-1/2 px-2">
        <h3 class="text-black text-xl font-bold mb-4">MISI</h3>
        <p class="text-gray-900 leading-relaxed">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et suscipit. Curabitur facilisis lectus vitae eros malesuada eleifend. Mauris eget tellus odio. Phasellus vestibulum turpis ac sem commodo, at posuere eros consequat. Duis nec ex at ante volutpat posuere. Morbi vel nunc tortor. Nulla facilisi.
        </p>
      </div>

      <!-- Gambar MISI -->
      <div class="w-full lg:w-1/2">
        <div class="aspect-video rounded-xl overflow-hidden shadow-lg">
          <img src="{{ asset('img/berita_mini1.jpg') }}" alt="Misi" class="w-full h-full object-cover">
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- SCRIPT -->
  <script>
    function toggleMenu() {
      const menu = document.getElementById('mobileMenu');
      menu.classList.toggle('-translate-x-full');
    }
  </script>

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
