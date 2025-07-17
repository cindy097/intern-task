<x-layout.admin-layout title="Dashboard Admin">
  <!-- Heading -->
  <div class="mb-6">
    <h1 class="text-2xl md:text-3xl font-bold text-gray-900">Dashboard Admin</h1>
    <p class="text-gray-600 mt-1 text-sm md:text-base">Kelola konten website Tasty Food.</p>
  </div>

  <!-- Card Menu -->
  <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-3">
    
    <!--berita-->
    <a href="{{ route('admin.news.index') }}"
      class="bg-white border border-gray-200 hover:bg-amber-50 transition duration-300 rounded-xl px-4 py-5 flex items-center gap-4 shadow-sm hover:shadow-md transform hover:scale-[1.02]">
      <div class="bg-amber-100 text-amber-600 rounded-xl p-3 text-2xl">
        <ion-icon name="newspaper-outline"></ion-icon>
      </div>
      <div>
        <h2 class="text-base md:text-lg font-bold text-gray-900">Total Berita</h2>
        <p class="text-xs md:text-sm text-gray-900">{{ $totalNews }} Berita</p>
      </div>
    </a>

    <!--galeri-->
    <a href="{{ route('admin.galleries.index') }}"
      class="bg-white border border-gray-200 hover:bg-amber-50 transition duration-300 rounded-xl px-4 py-5 flex items-center gap-4 shadow-sm hover:shadow-md transform hover:scale-[1.02]">
      <div class="bg-amber-100 text-amber-600 rounded-xl p-3 text-2xl">
        <ion-icon name="images-outline"></ion-icon>
      </div>
      <div>
        <h2 class="text-base md:text-lg font-bold text-gray-900">Total Galeri</h2>
        <p class="text-xs md:text-sm text-gray-900">{{ $totalGallery + $totalSlideshow }} Galeri</p>
      </div>
    </a>

    <!--kontak masuk-->
    <a href="#"
      class="bg-white border border-gray-200 hover:bg-amber-50 transition duration-300 rounded-xl px-4 py-5 flex items-center gap-4 shadow-sm hover:shadow-md transform hover:scale-[1.02]">
      <div class="bg-amber-100 text-amber-600 rounded-xl p-3 text-2xl">
        <ion-icon name="mail-outline"></ion-icon>
      </div>
      <div>
        <h2 class="text-base md:text-lg font-bold text-gray-900">Kontak Masuk</h2>
        <p class="text-xs md:text-sm text-gray-900">23 Kontak Masuk</p>
      </div>
    </a>

  </div>
</x-layout.admin-layout>
