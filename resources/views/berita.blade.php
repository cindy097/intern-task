<x-layout>
<!-- Hero / Jumbotron -->
<section class="h-[550px] bg-cover bg-center relative flex items-end pb-20" style="background-image: url('{{ asset('img/bg-card.png') }}');">
  <div class="max-w-7xl mx-auto w-full px-4 md:px-10 lg:px-10">
    <h1 class="text-white text-2xl md:text-5xl mb-[180px] font-extrabold uppercase">BERITA KAMI</h1>
  </div>
</section>

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
</x-layout>