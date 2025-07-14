<x-layout>
<!-- Hero / Jumbotron -->
<section class="h-[550px] bg-cover bg-center relative flex items-end pb-20" style="background-image: url('{{ asset('img/bg-card.png') }}');">
  <div class="max-w-7xl mx-auto w-full px-4 md:px-10 lg:px-10 xl:px-10">
    <h1 class="text-white text-2xl md:text-5xl mb-[180px] font-extrabold uppercase">GALERI KAMI</h1>
  </div>
</section>


<!-- Swiper Section -->
<section class="py-12 bg-[#f4f4f4]">
  <div class="max-w-7xl mx-auto px-4 md:px-10 lg:px-10 xl:px-10">
    <div class="swiper myGallery relative rounded-xl">
      <div class="swiper-wrapper">

        <!-- Slide 1 -->
        <div class="swiper-slide">
          <div class="overflow-hidden aspect-square sm:aspect-[4/3] md:aspect-[3/2] lg:aspect-[16/7]">
            <img src="/img/gallery2.jpg" class="w-full h-full object-cover" alt="Slide 1">
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide">
          <div class="overflow-hidden aspect-square sm:aspect-[4/3] md:aspect-[3/2] lg:aspect-[16/7]">
            <img src="/img/berita_mini4.jpg" class="w-full h-full object-cover" alt="Slide 2">
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="swiper-slide">
          <div class="overflow-hidden aspect-square sm:aspect-[4/3] md:aspect-[3/2] lg:aspect-[16/7]">
            <img src="/img/slideshow3.jpg" class="w-full h-full object-cover" alt="Slide 3">
          </div>
        </div>

      </div>

      <!-- Prev Button -->
      <div class="swiper-button-prev-custom absolute top-1/2 left-2 md:left-4 -translate-y-1/2 z-10 
                  bg-white text-black w-8 h-8 md:w-10 md:h-10 rounded-full shadow-md 
                  flex items-center justify-center cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 md:w-5 md:h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
      </div>

      <!-- Next Button -->
      <div class="swiper-button-next-custom absolute top-1/2 right-2 md:right-4 -translate-y-1/2 z-10 
                  bg-white text-black w-8 h-8 md:w-10 md:h-10 rounded-full shadow-md 
                  flex items-center justify-center cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 md:w-5 md:h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </div>
    </div>
  </div>
</section>

<!-- Swiper Script -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    new Swiper('.myGallery', {
      loop: true,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: '.swiper-button-next-custom',
        prevEl: '.swiper-button-prev-custom',
      },
    });
  });
</script>

<!-- Galeri Kecil -->
<section id="galeri" class="bg-white py-12">
  <div class="max-w-7xl mx-auto px-4 md:px-10 lg:px-10 xl:px-10">
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
</x-layout>