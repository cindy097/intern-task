
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
<nav class="absolute top-0 left-0 w-full z-50 bg-transparent px-4 md:px-10 lg:px-10 xl:px-10 py-6">
  <div class="flex items-center space-x-6">
    <button onclick="toggleMenu()" class="text-3xl md:hidden text-black">
      <ion-icon name="menu-outline"></ion-icon>
    </button>
    <h1 class="font-bold text-xl text-black leading-none mb-[7px]">TASTY FOOD</h1>
    <ul class="hidden md:flex space-x-6 text-sm font-medium text-black mb-[7px]">
      <li><a href="{{ url('/') }}" class="hover:text-gray-500">HOME</a></li>
      <li><a href="{{ route('tentang') }}" class="hover:text-gray-500">TENTANG</a></li>
      <li><a href="{{ route('berita') }}" class="hover:text-gray-500">BERITA</a></li>
      <li><a href="{{ route('galeri') }}" class="hover:text-gray-500">GALERI</a></li>
      <li><a href="{{ route('kontak') }}" class="hover:text-gray-500">KONTAK</a></li>
    </ul>
  </div>
</nav>

<!-- Sidebar Mobile -->
<div id="mobileMenu"
     class="fixed top-0 left-0 h-full w-64 bg-white z-[999] shadow-lg transform -translate-x-full transition-transform duration-300 ease-in-out md:hidden flex flex-col text-black">
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

<!-- Jumbotron -->
<section class="relative h-[550px] overflow-hidden px-4 md:px-10 lg:px-10 xl:px-10 pt-[130px]">
  <img src="{{ asset('img/1.png') }}" alt="Healthy Food"
       class="absolute z-0 pointer-events-none transition-all duration-500 ease-in-out
              w-[140px] top-8 right-[10px]
              sm:w-[180px] sm:top-[-85] sm:right-[60px]
              md:w-[355px] md:top-[-85px] md:right-[-100px] md:left-auto
              lg:w-[500px] lg:top-[-100px] lg:right-[-120px] lg:left-auto
              xl:w-[650px] xl:top-[-145px] xl:right-[-140px] xl:left-auto">
  <div class="relative z-10 max-w-2xl">
    <hr class="w-16 border-t-2 border-black mb-4">
    <h1 class="text-4xl tracking-widest uppercase text-gray-900">HEALTHY</h1>
    <h1 class="text-4xl md:text-5xl font-extrabold">TASTY FOOD</h1>
    <p class="text-base leading-relaxed text-gray-600 mt-4">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate ex quaerat modi nam consectetur voluptatum, expedita nesciunt, culpa ipsum tempora inventore?
    </p>
    <a href="{{ route('tentang') }}" class="inline-block bg-black text-white px-6 py-2 mt-6 text-sm hover:bg-gray-800 transition-all">
      TENTANG KAMI
    </a>
  </div>
</section>


  <!-- Tentang Kami -->
  <section class="bg-white py-20 px-4 md:px-10 lg:px-10 xl:px-10">
    <div class="max-w-3xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-4">TENTANG KAMI</h2>
      <p class="text-gray-600 mb-6">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur eum consequuntur magni quaerat recusandae earum reprehenderit.
      </p>
      <div class="w-16 h-1 bg-gray-400 mx-auto rounded-full"></div>
    </div>
  </section>

<!-- Card Makanan -->
<section class="bg-cover bg-center py-24 px-4 md:px-10 lg:px-10 xl:px-10" style="background-image: url('img/bg-card.png');">
  <div class="max-w-7xl mx-auto">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-6 sm:gap-y-16">
      
      <!-- Card 1 -->
      <div class="bg-white rounded-2xl shadow-xl p-4 pt-12 lg:pt-16 text-center relative overflow-visible transition-transform duration-300 hover:scale-105 mx-auto mt-[70px] sm:mt-0">
        <img src="img/card1.png" alt="Makanan 1" class="w-[130px] h-[130px] sm:w-[120px] sm:h-[120px] lg:w-[150px] lg:h-[150px] absolute -top-14 left-1/2 -translate-x-1/2 rounded-full object-cover">
        <h3 class="text-base sm:text-lg lg:text-xl font-bold mt-8 mb-2">LOREM IPSUM</h3>
        <p class="text-gray-600 text-sm sm:text-base lg:text-base px-4 lg:px-6 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>

      <!-- Card 2 -->
      <div class="bg-white rounded-2xl shadow-xl p-4 pt-12 lg:pt-16 text-center relative overflow-visible transition-transform duration-300 hover:scale-105 mx-auto mt-[70px] sm:mt-0">
        <img src="img/card2.png" alt="Makanan 2" class="w-[130px] h-[130px] sm:w-[120px] sm:h-[120px] lg:w-[150px] lg:h-[150px] absolute -top-14 left-1/2 -translate-x-1/2 rounded-full object-cover">
        <h3 class="text-base sm:text-lg lg:text-xl font-bold mt-8 mb-2">LOREM IPSUM</h3>
        <p class="text-gray-600 text-sm sm:text-base lg:text-base px-4 lg:px-6 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>

      <!-- Card 3 -->
      <div class="bg-white rounded-2xl shadow-xl p-4 pt-12 lg:pt-16 text-center relative overflow-visible transition-transform duration-300 hover:scale-105 mx-auto mt-[70px] sm:mt-0">
        <img src="img/card3.png" alt="Makanan 3" class="w-[130px] h-[130px] sm:w-[120px] sm:h-[120px] lg:w-[150px] lg:h-[150px] absolute -top-14 left-1/2 -translate-x-1/2 rounded-full object-cover">
        <h3 class="text-base sm:text-lg lg:text-xl font-bold mt-8 mb-2">LOREM IPSUM</h3>
        <p class="text-gray-600 text-sm sm:text-base lg:text-base px-4 lg:px-6 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>

      <!-- Card 4 -->
      <div class="bg-white rounded-2xl shadow-xl p-4 pt-12 lg:pt-16 text-center relative overflow-visible transition-transform duration-300 hover:scale-105 mx-auto mt-[70px] sm:mt-0">
        <img src="img/1.png" alt="Makanan 4" class="w-[130px] h-[130px] sm:w-[120px] sm:h-[120px] lg:w-[150px] lg:h-[150px] absolute -top-14 left-1/2 -translate-x-1/2 rounded-full object-cover">
        <h3 class="text-base sm:text-lg lg:text-xl font-bold mt-8 mb-2">LOREM IPSUM</h3>
        <p class="text-gray-600 text-sm sm:text-base lg:text-base px-4 lg:px-6 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
      </div>
    </div>
  </div>
</section>

<!-- Section Berita -->
<section class="py-20 px-4 md:px-10 lg:px-10 xl:px-10 bg-[#f4f4f4]">
  <div class="max-w-7xl mx-auto">
    <h2 class="text-3xl font-bold mb-8 text-center">BERITA TERBARU</h2>

    <!-- Container Responsive -->
    <div class="flex flex-col lg:flex-row gap-6">
<!-- Berita Utama -->
<div class="w-full lg:w-1/2">
  @if($berita->count() > 0)
  @php $utama = $berita->first(); @endphp
  <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:scale-[1.02] transition-transform duration-300 flex flex-col h-full">
    <img src="{{ asset('storage/' . $utama->image) }}" alt="{{ $utama->title }}"
     class="w-full h-[137.9px] md:h-[200px] lg:h-[370px] object-cover"> <!-- Match tinggi mini di mobile -->
    <div class="p-3 lg:p-6 flex flex-col justify-between flex-grow">
      <div>
        <h3 class="text-sm font-bold mb-1 uppercase lg:text-2xl">{{ $utama->title }}</h3> <!-- kecilkan untuk mobile -->
        <p class="text-gray-600 text-xs leading-snug mb-2 lg:text-base lg:leading-relaxed">
          {{ \Illuminate\Support\Str::limit($utama->content, 80) }} <!-- samakan limit dengan mini -->
        </p>
      </div>
      <a href="{{ route('berita.show', $utama->id) }}" class="text-xs text-yellow-500 hover:text-yellow-600 hover:underline active:scale-95 transition-all mt-auto">
        Baca selengkapnya
      </a>
    </div>
  </div>
  @endif
</div>

<!-- Grid Mini Berita -->
<div class="w-full lg:w-1/2 grid grid-cols-1 sm:grid-cols-2 gap-6 items-start">
  @foreach($berita->skip(1) as $item)
  <div class="bg-white rounded-2xl shadow-xl hover:scale-105 transition-transform duration-300 overflow-hidden flex flex-col h-full">
    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
         class="w-full h-[137.9px] object-cover">
    <div class="p-3 sm:p-4 flex flex-col justify-between flex-grow">
      <div>
        <h4 class="text-sm font-bold mb-1 uppercase">{{ $item->title }}</h4>
        <p class="text-gray-600 text-xs leading-snug mb-2 line-clamp-2">
          {{ \Illuminate\Support\Str::limit($item->content, 80) }}
        </p>
      </div>
      <a href="{{ route('berita.show', $item->id) }}" class="text-xs text-yellow-500 hover:text-yellow-600 hover:underline active:scale-95 transition-all mt-auto">
        Baca selengkapnya
      </a>
    </div>
  </div>
  @endforeach
</div>

    </div>
  </div>
</section>

<!-- Galeri Section -->
<section class="py-20 px-4 md:px-10 lg:px-10 xl:px-10 bg-white">
  <h2 class="text-3xl font-bold text-center mb-12">GALERI KAMI</h2>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    @foreach($galeri as $item)
    <div class="overflow-hidden rounded-xl shadow-md aspect-square group hover:scale-105 transition-transform duration-300">
      <img src="{{ asset('storage/' . $item->image) }}" alt="Gallery Image"
        class="w-full h-full object-cover">
    </div>
    @endforeach
  </div>

  <div class="text-center mt-10">
    <a href="{{ route('galeri') }}" class="inline-block px-8 py-3 bg-black text-white font-semibold hover:scale-105 transition-transform">
      LIHAT LEBIH BANYAK
    </a>
  </div>
</section>

  <!-- Script -->
  <script>
    function toggleMenu() {
      const menu = document.getElementById('mobileMenu');
      menu.classList.toggle('-translate-x-full');
    }
  </script>

  <x-footer>
  </x-footer>
</body>
</html>