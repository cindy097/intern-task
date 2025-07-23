<x-layout>
  <!-- Hero -->
  <section class="h-[550px] bg-cover bg-center relative flex items-end pb-20" style="background-image: url('{{ asset('img/bg-card.png') }}');">
    <div class="max-w-7xl mx-auto w-full px-4 md:px-10">
      <h1 class="text-white text-2xl md:text-5xl mb-[180px] font-extrabold uppercase">BERITA KAMI</h1>
    </div>
  </section>

  <!-- Berita Utama -->
  @if($beritaUtama)
    <section class="bg-[#f4f4f4] py-20 px-4 md:px-10">
      <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-10">
        <div class="overflow-hidden rounded-xl shadow-lg lg:max-w-[400px]">
          <img src="{{ asset('storage/' . $beritaUtama->image) }}" alt="{{ $beritaUtama->title }}"
            class="w-[350px] sm:w-[300px] md:w-[700px] lg:w-[360px] xl:w-[400px] aspect-square object-cover rounded-xl">
        </div>
        <div class="w-full">
          <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-3 mt-[-18px] lg:mt-0">{{ $beritaUtama->title }}</h2>
          <p class="text-gray-700 text-base leading-relaxed mb-5">
            {{ \Illuminate\Support\Str::limit($beritaUtama->content, 150) }}
          </p>
          <a href="{{ route('berita.show', $beritaUtama->id) }}" class="inline-block bg-black text-white px-6 py-3 font-semibold hover:bg-gray-800 transition-all duration-300 active:scale-95">
            BACA SELENGKAPNYA
          </a>
        </div>
      </div>
    </section>
  @endif

  <!-- Berita Lainnya -->
  <section class="py-10 px-4 md:px-10 bg-white">
    <div class="max-w-7xl mx-auto">

      <!-- Header dan Filter -->
      <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-2 relative">
        <div class="flex items-center justify-between w-full md:w-auto">
          <h2 class="text-2xl font-bold text-gray-900">BERITA LAINNYA</h2>

          <button onclick="toggleDropdown()" class="md:hidden inline-flex items-center gap-2 px-2 py-1 text-sm text-gray-700 border border-gray-300 rounded-md bg-white hover:bg-gray-50 ml-2">
            <ion-icon name="filter-outline" class="text-lg"></ion-icon>
          </button>
        </div>

        <div class="hidden md:flex items-center gap-4">
          @if(request('category'))
            <div class="text-sm text-gray-700">
              Kategori: <span class="text-amber-600 font-medium">
                {{ $categories->firstWhere('id', request('category'))?->name ?? 'Tidak ditemukan' }}
              </span>
            </div>
          @endif

          <button onclick="toggleDropdown()" class="inline-flex items-center gap-2 px-3 py-2 text-sm text-gray-700 border border-gray-300 rounded-md bg-white hover:bg-gray-50">
            <ion-icon name="filter-outline" class="text-lg"></ion-icon> 
            <span class="hidden md:inline">Filter</span>
          </button>
        </div>

        @if(request('category'))
        <div class="md:hidden text-sm text-gray-700 mt-1">
          Kategori: <span class="text-amber-600 font-medium">
            {{ $categories->firstWhere('id', request('category'))?->name ?? 'Tidak ditemukan' }}
          </span>
        </div>
        @endif

        <!-- Filter Dropdown -->
        <div id="filterDropdown" class="origin-top-right absolute right-0 mt-2 w-44 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden z-50">
          <div class="py-1 text-sm">
            <a href="{{ route('berita') }}"
               class="block px-4 py-2 text-gray-700 hover:bg-gray-100 {{ request('category') ? '' : 'font-bold text-amber-600' }}">
              Semua Kategori
            </a>
            @foreach ($categories as $cat)
              <a href="{{ route('berita', ['category' => $cat->id]) }}"
                 class="block px-4 py-2 text-gray-700 hover:bg-gray-100 {{ request('category') == $cat->id ? 'font-bold text-amber-600' : '' }}">
                {{ $cat->name }}
              </a>
            @endforeach
          </div>
        </div>
      </div>

      <!-- Grid Berita -->
      <div id="berita-list" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-6 mt-6"></div>

      <!-- Tombol Load More -->
      <div class="text-center mt-8">
        <button id="loadMoreBtn" class="px-6 py-3 bg-black text-white font-semibold hover:scale-105 transition-transform uppercase">Lihat Lebih Banyak</button>
      </div>
    </div>
  </section>

  <!-- JS -->
  <script>
    const beritaList = document.getElementById('berita-list');
    const loadMoreBtn = document.getElementById('loadMoreBtn');
    const isMobile = /mobile/i.test(navigator.userAgent);
    const limit = isMobile ? 6 : 8;
    let offset = 0;

    // Data pertama kali dimuat
    document.addEventListener('DOMContentLoaded', () => {
      loadMore();
    });

    // Tombol load more
    loadMoreBtn.addEventListener('click', () => {
      loadMore();
    });

    function loadMore() {
      loadMoreBtn.innerText = 'Memuat...';

      let url = `{{ url('/berita-json') }}?offset=${offset}&limit=${limit}`;
      @if(request('category'))
        url += '&category={{ request('category') }}';
      @endif

      fetch(url, {
        headers: { 'X-Requested-With': 'XMLHttpRequest' }
      })
      .then(res => res.json())
      .then(data => {
        if (data.length > 0) {
          data.forEach(item => renderCard(item));
          offset += data.length;
          loadMoreBtn.innerText = 'Lihat Lebih Banyak';
        } else {
          loadMoreBtn.innerText = 'Tidak ada lagi berita';
          loadMoreBtn.disabled = true;
        }
      })
      .catch(() => {
        loadMoreBtn.innerText = 'Terjadi kesalahan';
      });
    }

    function renderCard(item) {
      const card = `
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:scale-105 transition-transform duration-300 flex flex-col h-full">
          <img src="/storage/${item.image}" alt="${item.title}" class="w-full h-[140px] object-cover">
          <div class="p-4 flex flex-col justify-between flex-grow">
            <div>
              <h3 class="text-sm font-bold text-gray-900 uppercase">${item.title}</h3>
              <p class="text-xs text-gray-600 mt-2 leading-snug">${item.content.substring(0, 100)}...</p>
            </div>
            <div class="mt-4">
              <a href="/berita/${item.id}" class="text-yellow-500 text-xs hover:underline">Baca selengkapnya</a>
            </div>
          </div>
        </div>
      `;
      beritaList.insertAdjacentHTML('beforeend', card);
    }

    // Toggle filter dropdown
    function toggleDropdown() {
      const dropdown = document.getElementById('filterDropdown');
      dropdown.classList.toggle('hidden');
    }

    document.addEventListener('click', function (e) {
      const dropdown = document.getElementById('filterDropdown');
      const button = e.target.closest('button');
      if (!dropdown.contains(e.target) && !button) {
        dropdown.classList.add('hidden');
      }
    });
  </script>
</x-layout>
