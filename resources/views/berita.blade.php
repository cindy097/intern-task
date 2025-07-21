<x-layout>
<!-- Hero / Jumbotron -->
<section class="h-[550px] bg-cover bg-center relative flex items-end pb-20" style="background-image: url('{{ asset('img/bg-card.png') }}');">
  <div class="max-w-7xl mx-auto w-full px-4 md:px-10 lg:px-10">
    <h1 class="text-white text-2xl md:text-5xl mb-[180px] font-extrabold uppercase">BERITA KAMI</h1>
  </div>
</section>

<!-- berita utama -->
@if($beritaUtama)
<section class="bg-[#f4f4f4] py-20 px-4 md:px-10 lg:px-10 xl:px-10">
  <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-10 group">
    <!-- Gambar -->
    <div class="overflow-hidden rounded-xl shadow-lg lg:max-w-[400px]">
      <img src="{{ asset('storage/' . $beritaUtama->image) }}" alt="{{ $beritaUtama->title }}"
        class="w-[350px] sm:w-[300px] md:w-[700px] lg:w-[360px] xl:w-[400px] aspect-square object-cover rounded-xl">
    </div>

    <!-- Konten -->
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

<!-- berita lainnya -->
<section class="py-20 px-4 md:px-10 lg:px-10 xl:px-10 bg-white">
  <div class="max-w-7xl mx-auto">

    <!-- Judul + Filter -->
    <div class="flex justify-between items-center flex-wrap md:flex-nowrap mb-8 gap-4">
      <h2 class="text-2xl font-bold text-gray-900">BERITA LAINNYA</h2>
      
      <div class="relative inline-block text-left">
        <div class="flex items-center gap-3">
          @if(request('category'))
            <div class="text-sm font-medium text-black">
              Kategori: 
              <span class="font-semibold text-amber-500">
                {{ $categories->firstWhere('id', request('category'))?->name ?? 'Tidak ditemukan' }}
              </span>
            </div>
          @endif

          <!-- Button -->
          <button type="button" onclick="toggleDropdown()"
            class="inline-flex justify-center items-center gap-2 w-fit rounded-md border border-gray-300 shadow-sm px-3 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none"
            id="menu-button" aria-expanded="true" aria-haspopup="true">
            <ion-icon name="filter-outline" class="text-lg"></ion-icon> Filter
          </button>
        </div>

        <!-- Dropdown menu -->
        <div id="filterDropdown" class="origin-top-right absolute right-0 mt-2 w-44 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden z-10">
          <div class="py-1 text-sm" role="menu" aria-orientation="vertical" aria-labelledby="menu-button">
            <a href="{{ route('berita') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-black {{ request('category') ? '' : 'font-bold text-amber-600' }}" role="menuitem">
              Semua Kategori
            </a>
            @foreach ($categories as $cat)
              <a href="{{ route('berita', ['category' => $cat->id]) }}"
                class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-black {{ request('category') == $cat->id ? 'font-bold text-amber-600' : '' }}"
                role="menuitem">
                {{ $cat->name }}
              </a>
            @endforeach
          </div>
        </div>
      </div>
    </div>

    <!-- Grid berita -->
    @if($beritaLainnya->count() > 0)
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-6">
        @foreach($beritaLainnya as $item)
          <div class="bg-white rounded-2xl shadow-xl overflow-hidden hover:scale-105 transition-transform duration-300 flex flex-col h-full">
            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-[140px] object-cover">
            <div class="p-4 flex flex-col justify-between flex-grow">
              <div>
                <h3 class="text-sm font-bold text-gray-900 uppercase">{{ $item->title }}</h3>
                <p class="text-xs text-gray-600 mt-2 leading-snug">
                  {{ \Illuminate\Support\Str::limit($item->content, 100) }}
                </p>
              </div>
              <div class="mt-4">
                <a href="{{ route('berita.show', $item->id) }}" class="text-yellow-500 text-xs hover:underline">Baca selengkapnya</a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    @else
      <div class="text-center py-10 text-gray-600 italic">
        Belum ada berita pada kategori ini.
      </div>
    @endif

  </div>
</section>

<!-- Script untuk toggle dropdown -->
<script>
  function toggleDropdown() {
    const dropdown = document.getElementById('filterDropdown');
    dropdown.classList.toggle('hidden');
  }

  // Tutup dropdown kalau klik di luar
  document.addEventListener('click', function (e) {
    const dropdown = document.getElementById('filterDropdown');
    const button = e.target.closest('button');

    if (!dropdown.contains(e.target) && !button) {
      dropdown.classList.add('hidden');
    }
  });
</script>

</x-layout>
