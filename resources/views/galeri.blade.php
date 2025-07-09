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

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<body class="bg-white text-white font-sans overflow-x-hidden">

  <!-- Navbar -->
  <nav class="absolute top-0 left-0 w-full z-50 px-[50px] py-6">
    <div class="flex justify-between items-center">
      <h1 class="font-bold text-xl text-white">TASTY FOOD</h1>
      <button onclick="toggleMenu()" class="text-3xl md:hidden text-white">
        <ion-icon name="menu-outline"></ion-icon>
      </button>
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
  <section class="h-[550px] bg-cover bg-center relative flex items-end px-8 pb-20" style="background-image: url('{{ asset('img/bg-card.png') }}');">
    <h1 class="text-2xl md:text-5xl mb-[180px] font-extrabold uppercase">galeri kami</h1>
  </section>

  <!-- Swiper -->
  <section class="py-12 bg-[#f4f4f4]">
    <div class="max-w-6xl mx-auto px-4">
      <div class="swiper myGallery">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="rounded-xl overflow-hidden aspect-square sm:aspect-[4/3] md:aspect-[3/2] lg:aspect-[16/7]">
              <img src="/img/gallery2.jpg" class="w-full h-full object-cover" alt="Slide 1">
            </div>
          </div>

          <div class="swiper-slide">
            <div class="rounded-xl overflow-hidden aspect-square sm:aspect-[4/3] md:aspect-[3/2] lg:aspect-[16/7]">
              <img src="/img/berita_mini4.jpg" class="w-full h-full object-cover" alt="Slide 2">
            </div>
          </div>

          <div class="swiper-slide">
            <div class="rounded-xl overflow-hidden aspect-square sm:aspect-[4/3] md:aspect-[3/2] lg:aspect-[16/7]">
              <img src="/img/slideshow3.jpg" class="w-full h-full object-cover" alt="Slide 3">
            </div>
          </div>

        </div>

        <!-- Navigation Buttons -->
        <div class="swiper-button-prev !text-white text-3xl sm:text-4xl hover:scale-110 transition-transform"></div>
        <div class="swiper-button-next !text-white text-3xl sm:text-4xl hover:scale-110 transition-transform"></div>
      </div>
    </div>
  </section>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const swiper = new Swiper('.myGallery', {
        loop: true,
        autoplay: {
          delay: 4000,
          disableOnInteraction: false,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
    });

    function toggleMenu() {
      const menu = document.getElementById('mobileMenu');
      menu.classList.toggle('-translate-x-full');
    }
  </script>

<section id="galeri" class="bg-white py-12 px-4">
  <div class="max-w-5xl mx-auto">
    <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4">
      <!-- Gambar 1 -->
      <div class="aspect-square rounded-xl overflow-hidden shadow hover:scale-105 transition-transform duration-300">
        <img src="/img/g1.jpg" alt="Makanan 1" class="w-full h-full object-cover" />
      </div>
      <!-- Gambar 2 -->
      <div class="aspect-square rounded-xl overflow-hidden shadow hover:scale-105 transition-transform duration-300">
        <img src="/img/slideshow3.jpg" alt="Makanan 2" class="w-full h-full object-cover" />
      </div>
      <!-- Gambar 3 -->
      <div class="aspect-square rounded-xl overflow-hidden shadow hover:scale-105 transition-transform duration-300">
        <img src="/img/g3.jpg" alt="Makanan 3" class="w-full h-full object-cover" />
      </div>
      <!-- Gambar 4 -->
      <div class="aspect-square rounded-xl overflow-hidden shadow hover:scale-105 transition-transform duration-300">
        <img src="/img/g4.jpg" alt="Makanan 4" class="w-full h-full object-cover" />
      </div>
      <!-- Gambar 5 -->
      <div class="aspect-square rounded-xl overflow-hidden shadow hover:scale-105 transition-transform duration-300">
        <img src="/img/gallery1.jpg" alt="Makanan 5" class="w-full h-full object-cover" />
      </div>
      <!-- Gambar 6 -->
      <div class="aspect-square rounded-xl overflow-hidden shadow hover:scale-105 transition-transform duration-300">
        <img src="/img/gallery3.jpg" alt="Makanan 6" class="w-full h-full object-cover" />
      </div>
      <!-- Gambar 7 -->
      <div class="aspect-square rounded-xl overflow-hidden shadow hover:scale-105 transition-transform duration-300">
        <img src="/img/berita_utama.jpg" alt="Makanan 7" class="w-full h-full object-cover" />
      </div>
      <!-- Gambar 8 -->
      <div class="aspect-square rounded-xl overflow-hidden shadow hover:scale-105 transition-transform duration-300">
        <img src="/img/berita_mini3.jpg" alt="Makanan 8" class="w-full h-full object-cover" />
      </div>
      <!-- Gambar 9 -->
      <div class="aspect-square rounded-xl overflow-hidden shadow hover:scale-105 transition-transform duration-300">
        <img src="/img/berita_mini4.jpg" alt="Makanan 9" class="w-full h-full object-cover" />
      </div>
      <!-- Gambar 10 -->
      <div class="aspect-square rounded-xl overflow-hidden shadow hover:scale-105 transition-transform duration-300">
        <img src="/img/berita_mini2.jpg" alt="Makanan 10" class="w-full h-full object-cover" />
      </div>
      <!-- Gambar 11 -->
      <div class="aspect-square rounded-xl overflow-hidden shadow hover:scale-105 transition-transform duration-300">
        <img src="/img/berita_mini1.jpg" alt="Makanan 11" class="w-full h-full object-cover" />
      </div>
      <!-- Gambar 12 -->
      <div class="aspect-square rounded-xl overflow-hidden shadow hover:scale-105 transition-transform duration-300">
        <img src="/img/gallery6.jpg" alt="Makanan 12" class="w-full h-full object-cover" />
      </div>
    </div>
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

</body>
</html>
