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

<body class="bg-[#f4f4f4] text-gray-800 font-sans overflow-x-hidden">
  <!-- Navbar -->
  <nav class="absolute top-0 left-0 w-full z-50 px-8 py-6 bg-transparent">
    <div class="flex items-center space-x-6">
      <button onclick="toggleMenu()" class="text-3xl md:hidden text-black">
        <ion-icon name="menu-outline"></ion-icon>
      </button>
      <h1 class="font-bold text-xl text-black">TASTY FOOD</h1>
      <ul class="hidden md:flex space-x-6 text-sm font-medium text-black">
        <li><a href="{{ url('/') }}" class="hover:text-gray-500">HOME</a></li>
        <li><a href="{{ route('tentang') }}" class="hover:text-gray-500">TENTANG</a></li>
        <li><a href="{{ route('berita') }}" class="hover:text-gray-500">BERITA</a></li>
        <li><a href="{{ route('galeri') }}" class="hover:text-gray-500">GALERI</a></li>
        <li><a href="#" class="hover:text-gray-500">KONTAK</a></li>
      </ul>
    </div>
  </nav>

  <!-- Mobile Sidebar -->
  <div id="mobileMenu" class="fixed top-0 left-0 h-full w-64 bg-[#f4f4f4]/95 backdrop-blur-md shadow-lg transform -translate-x-full transition-transform duration-300 ease-in-out z-50 md:hidden flex flex-col">
    <div class="flex justify-between items-center px-6 py-4 border-b">
      <h2 class="font-bold text-lg">MENU</h2>
      <button onclick="toggleMenu()" class="text-2xl text-black">
        <ion-icon name="close-outline"></ion-icon>
      </button>
    </div>
    <div class="flex flex-col p-6 space-y-4">
      <a href="{{ url('/') }}" class="text-base hover:text-gray-500">HOME</a>
      <a href="{{ route('tentang') }}" class="hover:text-gray-500">TENTANG</a>
      <a href="{{ route('berita') }}" class="text-base hover:text-gray-500">BERITA</a>
      <a href="{{ route('galeri') }}" class="text-base hover:text-gray-500">GALERI</a>
      <a href="#" class="text-base hover:text-gray-500">KONTAK</a>
    </div>
  </div>

  <!-- Jumbotron -->
  <section class="relative min-h-[665px] overflow-hidden px-4 sm:px-6 md:px-8 pt-[100px]">
    <img src="{{ asset('img/1.png') }}" alt="Healthy Food"
         class="absolute z-0 pointer-events-none transition-all duration-500 ease-in-out
                w-[140px] top-8 right-[20px]
                sm:w-[180px] sm:top-2 sm:left-[60px]
                md:w-[355px] md:top-[-75px] md:right-[-90px] md:left-auto
                lg:w-[500px] lg:top-[-100px] lg:right-[-120px] lg:left-auto
                xl:w-[650px] xl:top-[-145px] xl:right-[-140px] xl:left-auto">
    <div class="relative z-10 max-w-2xl md:mt-13 md:ml-7 px-4 sm:px-6 md:px-0">
      <hr class="w-16 border-t-2 border-black mb-4">
      <h1 class="text-4xl tracking-widest uppercase text-gray-900">HEALTHY</h1>
      <h1 class="text-4xl md:text-5xl font-extrabold">TASTY FOOD</h1>
      <p class="text-base leading-relaxed text-gray-600 mt-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ex quaerat modi nam consectetur voluptatum, expedita nesciunt, culpa ipsum tempora inventore?
      </p>
      <a href="#" class="inline-block bg-black text-white px-6 py-2 mt-6 text-sm hover:bg-gray-800 transition-all">
        TENTANG KAMI
      </a>
    </div>
  </section>

  <!-- Tentang Kami -->
  <section class="bg-white py-20 px-4 sm:px-6 md:px-8">
    <div class="max-w-3xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-4">TENTANG KAMI</h2>
      <p class="text-gray-600 mb-6">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur eum consequuntur magni quaerat recusandae earum reprehenderit.
      </p>
      <div class="w-16 h-1 bg-gray-400 mx-auto rounded-full"></div>
    </div>
  </section>

  <!-- Card Makanan -->
  <section class="bg-cover bg-center py-24 px-4 sm:px-6 md:px-10" style="background-image: url('img/bg-card.png');">
    <div class="max-w-7xl mx-auto">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 justify-center">
        <div class="bg-white rounded-2xl shadow-xl p-4 pt-12 lg:pt-16 text-center relative overflow-visible transition-transform duration-300 hover:scale-105 mx-auto">
          <img src="img/card1.png" alt="Makanan 1" class="w-[130px] h-[130px] sm:w-[120px] sm:h-[120px] lg:w-[150px] lg:h-[150px] absolute -top-14 left-1/2 -translate-x-1/2 rounded-full object-cover">
          <h3 class="text-base sm:text-lg lg:text-xl font-bold mt-8 mb-2">LOREM IPSUM</h3>
          <p class="text-gray-600 text-sm sm:text-base lg:text-base px-4 lg:px-6 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="hidden sm:block bg-white rounded-2xl shadow-xl p-4 pt-12 lg:pt-16 text-center relative overflow-visible transition-transform duration-300 hover:scale-105 mx-auto">
          <img src="img/card2.png" alt="Makanan 2" class="w-[130px] h-[130px] sm:w-[120px] sm:h-[120px] lg:w-[150px] lg:h-[150px] absolute -top-14 left-1/2 -translate-x-1/2 rounded-full object-cover">
          <h3 class="text-base sm:text-lg lg:text-xl font-bold mt-8 mb-2">LOREM IPSUM</h3>
          <p class="text-gray-600 text-sm sm:text-base lg:text-base px-4 lg:px-6 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="hidden lg:block bg-white rounded-2xl shadow-xl p-4 pt-12 lg:pt-16 text-center relative overflow-visible transition-transform duration-300 hover:scale-105 mx-auto">
          <img src="img/card3.png" alt="Makanan 3" class="w-[130px] h-[130px] sm:w-[120px] sm:h-[120px] lg:w-[150px] lg:h-[150px] absolute -top-14 left-1/2 -translate-x-1/2 rounded-full object-cover">
          <h3 class="text-base sm:text-lg lg:text-xl font-bold mt-8 mb-2">LOREM IPSUM</h3>
          <p class="text-gray-600 text-sm sm:text-base lg:text-base px-4 lg:px-6 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="hidden lg:block bg-white rounded-2xl shadow-xl p-4 pt-12 lg:pt-16 text-center relative overflow-visible transition-transform duration-300 hover:scale-105 mx-auto">
          <img src="img/1.png" alt="Makanan 4" class="w-[130px] h-[130px] sm:w-[120px] sm:h-[120px] lg:w-[150px] lg:h-[150px] absolute -top-14 left-1/2 -translate-x-1/2 rounded-full object-cover">
          <h3 class="text-base sm:text-lg lg:text-xl font-bold mt-8 mb-2">LOREM IPSUM</h3>
          <p class="text-gray-600 text-sm sm:text-base lg:text-base px-4 lg:px-6 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
      </div>
    </div>
  </section>

<!-- Section Berita -->
<section class="py-20 px-4 sm:px-6 md:px-10 bg-[#f4f4f4]">
  <div class="max-w-7xl mx-auto">
    <h2 class="text-3xl font-bold mb-8 text-center">BERITA TERBARU</h2>

    <!-- Layout utama -->
    <div class="flex flex-col md:flex-row gap-8 justify-center">

      <!-- Card Utama -->
      <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:scale-[1.02] transition-transform duration-300
                  w-full md:w-2/3 lg:w-[60%] xl:w-[40%]">
        <img src="img/berita_utama.jpg" alt="Berita Utama" class="w-full h-[240px] md:h-[280px] lg:h-[370px] object-cover">
        <div class="p-4 sm:p-6">
          <h3 class="text-xl md:text-2xl font-bold mb-2 uppercase">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
          <p class="text-gray-600 text-sm md:text-base leading-relaxed mb-3">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quis tempore harum inventore expedita.
          </p>
          <a href="/berita/1" class="text-sm text-yellow-500 font-medium hover:text-yellow-600 hover:underline transition-all duration-300 active:scale-95">
            Baca selengkapnya
          </a>
        </div>
      </div>

      <!-- Card Mini -->
      <div class="w-full md:w-1/3 lg:w-[40%] xl:w-[34%] grid gap-4
                  md:grid-cols-1 lg:grid-cols-2 lg:grid-rows-2">
        <!-- Mini 1 -->
        <div class="hidden md:block bg-white rounded-2xl shadow-xl hover:scale-105 transition-transform duration-300 overflow-hidden">
          <img src="img/berita_mini1.jpg" alt="Berita 2" class="w-full h-[110px] md:h-[120px] object-cover">
          <div class="p-3 sm:p-4">
            <h4 class="text-sm font-bold mb-1 uppercase">Lorem, ipsum.</h4>
            <p class="text-gray-600 text-xs leading-snug mb-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis commodi ea nobis?</p>
            <a href="/berita/2" class="text-xs text-yellow-500 hover:text-yellow-600 hover:underline active:scale-95 transition-all">Baca selengkapnya</a>
          </div>
        </div>

        <!-- Mini 2 -->
        <div class="hidden lg:block bg-white rounded-2xl shadow-xl hover:scale-105 transition-transform duration-300 overflow-hidden">
          <img src="img/berita_mini2.jpg" alt="Berita 3" class="w-full h-[110px] md:h-[120px] object-cover">
          <div class="p-3 sm:p-4">
            <h4 class="text-sm font-bold mb-1 uppercase">Lorem, ipsum.</h4>
            <p class="text-gray-600 text-xs leading-snug mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, voluptatem ipsa.</p>
            <a href="/berita/3" class="text-xs text-yellow-500 hover:text-yellow-600 hover:underline active:scale-95 transition-all">Baca selengkapnya</a>
          </div>
        </div>

        <!-- Mini 3 -->
        <div class="hidden md:block bg-white rounded-2xl shadow-xl hover:scale-105 transition-transform duration-300 overflow-hidden">
          <img src="img/berita_mini3.jpg" alt="Berita 4" class="w-full h-[110px] md:h-[120px] object-cover">
          <div class="p-3 sm:p-4">
            <h4 class="text-sm font-bold mb-1 uppercase">Lorem, ipsum.</h4>
            <p class="text-gray-600 text-xs leading-snug mb-1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum eaque voluptatem eum?</p>
            <a href="/berita/4" class="text-xs text-yellow-500 hover:text-yellow-600 hover:underline active:scale-95 transition-all">Baca selengkapnya</a>
          </div>
        </div>

        <!-- Mini 4 -->
        <div class="hidden lg:block bg-white rounded-2xl shadow-xl hover:scale-105 transition-transform duration-300 overflow-hidden">
          <img src="img/berita_mini4.jpg" alt="Berita 5" class="w-full h-[110px] md:h-[120px] object-cover">
          <div class="p-3 sm:p-4">
            <h4 class="text-sm font-bold mb-1 uppercase">Lorem, ipsum.</h4>
            <p class="text-gray-600 text-xs leading-snug mb-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque, unde laboriosam. Quae.</p>
            <a href="/berita/5" class="text-xs text-yellow-500 hover:text-yellow-600 hover:underline active:scale-95 transition-all">Baca selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Galeri Section -->
<section class="py-20 px-4 sm:px-6 md:px-10 lg:px-20 bg-white">
  <h2 class="text-3xl font-bold text-center mb-12">GALERI KAMI</h2>
  
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    <!-- 1: Selalu tampil -->
    <div class="overflow-hidden rounded-xl shadow-md aspect-square group">
      <img src="img/gallery1.jpg" alt="Gallery 1"
        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
    </div>

    <!-- 2: Hidden di mobile -->
    <div class="hidden sm:block overflow-hidden rounded-xl shadow-md aspect-square group">
      <img src="img/gallery2.jpg" alt="Gallery 2"
        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
    </div>

    <!-- 3 -->
    <div class="hidden sm:block overflow-hidden rounded-xl shadow-md aspect-square group">
      <img src="img/gallery3.jpg" alt="Gallery 3"
        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
    </div>

    <!-- 4 -->
    <div class="hidden sm:block overflow-hidden rounded-xl shadow-md aspect-square group">
      <img src="img/gallery4.jpg" alt="Gallery 4"
        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
    </div>

    <!-- 5 -->
    <div class="hidden sm:block overflow-hidden rounded-xl shadow-md aspect-square group">
      <img src="img/gallery5.jpg" alt="Gallery 5"
        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
    </div>

    <!-- 6 -->
    <div class="hidden sm:block overflow-hidden rounded-xl shadow-md aspect-square group">
      <img src="img/gallery6.jpg" alt="Gallery 6"
        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
    </div>
  </div>

  <div class="text-center mt-10">
    <a href="#" class="inline-block px-8 py-3 bg-black text-white font-semibold hover:scale-105 transition-transform">LIHAT LEBIH BANYAK</a>
  </div>
</section>

<footer class="bg-black text-white px-6 md:px-20 pt-16 pb-10">
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

  <!-- Script -->
  <script>
    function toggleMenu() {
      const menu = document.getElementById('mobileMenu');
      menu.classList.toggle('-translate-x-full');
    }
  </script>
</body>
</html>