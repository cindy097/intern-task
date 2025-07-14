<x-admin-layout title="Dashboard Admin">
  <!-- Heading -->
  <div class="mb-6">
    <h1 class="text-2xl md:text-3xl font-bold text-gray-900">Dashboard Admin</h1>
    <p class="text-gray-600 mt-1 text-sm md:text-base">Kelola konten website Tasty Food.</p>
  </div>

  <!-- Card Menu -->
  <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-3">
    
    {{-- Kelola Berita --}}
    <a href="/admin/berita"
      class="bg-white border border-gray-200 hover:bg-amber-50 transition duration-300 rounded-xl px-4 py-5 flex items-center gap-4 shadow-sm hover:shadow-md transform hover:scale-[1.02]">
      <div class="bg-amber-100 text-amber-600 rounded-full p-3 text-xl">
        <ion-icon name="newspaper-outline"></ion-icon>
      </div>
      <div>
        <h2 class="text-base md:text-lg font-semibold text-gray-900">Kelola Berita</h2>
        <p class="text-xs md:text-sm text-gray-600">Tambah dan ubah berita website.</p>
      </div>
    </a>

    {{-- Kelola Galeri --}}
    <a href="/admin/galeri"
      class="bg-white border border-gray-200 hover:bg-amber-50 transition duration-300 rounded-xl px-4 py-5 flex items-center gap-4 shadow-sm hover:shadow-md transform hover:scale-[1.02]">
      <div class="bg-amber-100 text-amber-600 rounded-full p-3 text-xl">
        <ion-icon name="images-outline"></ion-icon>
      </div>
      <div>
        <h2 class="text-base md:text-lg font-semibold text-gray-900">Kelola Galeri</h2>
        <p class="text-xs md:text-sm text-gray-600">Unggah foto makanan ke galeri.</p>
      </div>
    </a>

    {{-- Kelola Kontak --}}
    <a href="/admin/kontak"
      class="bg-white border border-gray-200 hover:bg-amber-50 transition duration-300 rounded-xl px-4 py-5 flex items-center gap-4 shadow-sm hover:shadow-md transform hover:scale-[1.02]">
      <div class="bg-amber-100 text-amber-600 rounded-full p-3 text-xl">
        <ion-icon name="call-outline"></ion-icon>
      </div>
      <div>
        <h2 class="text-base md:text-lg font-semibold text-gray-900">Kontak Website</h2>
        <p class="text-xs md:text-sm text-gray-600">Atur alamat dan nomor WhatsApp.</p>
      </div>
    </a>

  </div>
</x-admin-layout>
