<x-layout>
  <!-- Hero / Jumbotron -->
  <section class="h-[550px] bg-cover bg-center relative flex items-end pb-20" style="background-image: url('{{ asset('img/bg-card.png') }}');">
    <div class="max-w-7xl mx-auto w-full px-4 md:px-10">
      <h1 class="text-white text-2xl md:text-5xl mb-[180px] font-extrabold uppercase">GALERI KAMI</h1>
    </div>
  </section>

  <!-- Main Swiper Section -->
  <section class="py-12 bg-[#f4f4f4]">
    <div class="max-w-7xl mx-auto px-4 md:px-10">
      <div class="swiper myGallery rounded-xl" data-slide-count="{{ $slides->count() }}">
        <div class="swiper-wrapper">
          @foreach ($slides as $slide)
            <div class="swiper-slide">
              <div class="overflow-hidden aspect-square sm:aspect-[4/3] md:aspect-[3/2] lg:aspect-[16/7]">
                <img src="{{ asset('storage/' . $slide->image) }}" class="w-full h-full object-cover" alt="Slide" />
              </div>
            </div>
          @endforeach
        </div>

        <!-- Navigation -->
        <div class="swiper-button-prev-custom absolute top-1/2 left-2 md:left-4 -translate-y-1/2 z-10 bg-white text-black w-8 h-8 md:w-10 md:h-10 rounded-full shadow-md flex items-center justify-center cursor-pointer hover:scale-[1.02] transition-transform duration-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 md:w-5 md:h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
          </svg>
        </div>
        <div class="swiper-button-next-custom absolute top-1/2 right-2 md:right-4 -translate-y-1/2 z-10 bg-white text-black w-8 h-8 md:w-10 md:h-10 rounded-full shadow-md flex items-center justify-center cursor-pointer hover:scale-[1.02] transition-transform duration-300">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 md:w-5 md:h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </div>
      </div>

      <!-- Pagination OUTSIDE slider -->
      @if ($slides->count() > 8)
        <div class="swiper-pagination mt-6 flex justify-center gap-2"></div>
      @endif
    </div>
  </section>

  <!-- Mini Gallery -->
  <section id="galeri" class="bg-white py-12">
    <div class="max-w-7xl mx-auto px-4 md:px-10">
      <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4">
        @foreach ($galeri as $item)
          <div class="aspect-square rounded-xl overflow-hidden shadow hover:scale-105 transition-transform duration-300">
            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title ?? 'Foto' }}" class="w-full h-full object-cover" />
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Minimal CSS to override swiper-pagination position -->
<style>
  .swiper-pagination {
    position: relative !important;
    margin-top: 1.5rem;
    width: auto !important;
  }

  .swiper-pagination-bullet {
    background-color: black !important;
    opacity: 0.4 !important;
  }

  .swiper-pagination-bullet-active {
    opacity: 1 !important;
  }
</style>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const slider = document.querySelector('.myGallery');
      const totalSlides = parseInt(slider.dataset.slideCount);

      const swiperOptions = {
        loop: true,
        autoplay: {
          delay: 4000,
          disableOnInteraction: false,
        },
        navigation: {
          nextEl: '.swiper-button-next-custom',
          prevEl: '.swiper-button-prev-custom',
        },
      };

      if (totalSlides > 8) {
        swiperOptions.pagination = {
          el: '.swiper-pagination',
          clickable: true,
          renderBullet: (index, className) => {
            return `<span class="${className} w-3 h-3 bg-black opacity-100 rounded-full mx-1 cursor-pointer"></span>`;
          },
        };
      }

      new Swiper('.myGallery', swiperOptions);
    });
  </script>
</x-layout>
