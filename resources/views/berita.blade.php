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
  <nav class="absolute top-0 left-0 w-full z-50 px-[50px] py-6">
    <div class="flex justify-between items-center">
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
        <li><a href="#" class="hover:text-gray-300">GALERI</a></li>
        <li><a href="#" class="hover:text-gray-300">KONTAK</a></li>
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
      <a href="#" class="hover:text-gray-600">GALERI</a>
      <a href="#" class="hover:text-gray-600">KONTAK</a>
    </div>
  </div>

  <!-- Hero / Jumbotron -->
<section class="h-[550px] bg-cover bg-center relative flex items-end px-8 pb-20"
           style="background-image: url('{{ asset('img/bg-card.png') }}');">
    <h1 class="text-2xl md:text-5xl mb-[180px] font-extrabold uppercase">berita kami</h1>
  </section>

    <!-- SCRIPT -->
  <script>
    function toggleMenu() {
      const menu = document.getElementById('mobileMenu');
      menu.classList.toggle('-translate-x-full');
    }
  </script>

  <!-- berita utama -->
 <section class="bg-[#f4f4f4] py-20 px-4 sm:px-6 md:px-10 lg:px-20">
  <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-10 group">

    <!-- Gambar -->
    <div class="overflow-hidden rounded-xl shadow-lg w-full lg:max-w-[520px] transform transition-transform duration-500 group-hover:scale-105">
      <img src="{{ asset('img/gallery3.jpg') }}" alt="Salad Nusantara"
     class="
        w-[280px] h-[280px]
        sm:w-[320px] sm:h-[300px]
        md:w-[360px] md:h-[320px]
        lg:w-[420px] lg:h-[360px]
        xl:w-[460px] xl:h-[380px]
        object-cover rounded-xl transition-transform duration-300 hover:scale-105">  
    </div>

    <!-- Konten -->
    <div class="w-full">
      <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-3">APA SAJA MAKANAN KHAS NUSANTARA?</h2>
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

</body>
</html>