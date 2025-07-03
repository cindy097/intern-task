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
      <!-- Hamburger icon (mobile only) -->
      <button onclick="toggleMenu()" class="text-3xl md:hidden text-black">
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <!-- Logo -->
      <h1 class="font-bold text-xl text-black">TASTY FOOD</h1>

      <!-- Menu Desktop -->
      <ul class="hidden md:flex space-x-6 text-sm font-medium text-black">
        <li><a href="#" class="hover:text-gray-500">HOME</a></li>
        <li><a href="#" class="hover:text-gray-500">TENTANG</a></li>
        <li><a href="#" class="hover:text-gray-500">BERITA</a></li>
        <li><a href="#" class="hover:text-gray-500">GALERI</a></li>
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
      <a href="#" class="text-base hover:text-gray-500">HOME</a>
      <a href="#" class="text-base hover:text-gray-500">TENTANG</a>
      <a href="#" class="text-base hover:text-gray-500">BERITA</a>
      <a href="#" class="text-base hover:text-gray-500">GALERI</a>
      <a href="#" class="text-base hover:text-gray-500">KONTAK</a>
    </div>
  </div>

  <!-- Jumbotron -->
  <section class="relative min-h-[665px] overflow-hidden px-8 pt-[100px]">
    <!-- Gambar besar kanan atas -->
    <img src="{{ asset('img/1.png') }}" alt="Healthy Food"
         class="absolute top-0 right-3 w-[220px] md:w-[650px] md:top-[-145px] md:right-[-140px] z-0 pointer-events-none transition-all duration-500 ease-in-out">

    <!-- Konten teks -->
    <div class="relative z-10 max-w-2xl">
      <p class="text-sm uppercase tracking-widest text-gray-500 mb-2">Fresh & Delicious</p>
      <hr class="w-16 border-t-2 border-black mb-4">
      <h1 class="text-4xl tracking-widest uppercase text-gray-900">HEALTHY</h1>
      <h1 class="text-4xl md:text-5xl font-extrabold">TASTY FOOD</h1>
      <p class="text-base leading-relaxed text-gray-600 mt-4">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ex quaerat modi nam consectetur voluptatum, expedita nesciunt, culpa ipsum tempora inventore? Esse quas error quidem recusandae animi quasi sit nostrum harum labore quia! Rem, non temporibus.
      </p>
      <a href="#" class="inline-block bg-black text-white px-6 py-2 mt-6 text-sm hover:bg-gray-800 transition-all">
        TENTANG KAMI
      </a>
    </div>
  </section>

  <!-- Tentang Kami -->
  <section class="bg-white py-20 px-8">
    <div class="max-w-3xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-4">TENTANG KAMI</h2>
      <p class="text-gray-600 mb-6">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.
      </p>
      <div class="w-16 h-1 bg-gray-400 mx-auto rounded-full"></div>
    </div>
  </section>

  <!-- Toggle Script -->
  <script>
    function toggleMenu() {
      const menu = document.getElementById('mobileMenu');
      menu.classList.toggle('-translate-x-full');
    }
  </script>

</body>
</html>
