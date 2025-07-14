<nav class="flex flex-col gap-1 p-4 text-sm font-medium text-gray-700">
  <a href="/admin/dashboard" class="flex items-center gap-3 py-2 px-3 rounded hover:bg-red-50 transition-all {{ request()->is('admin/dashboard') ? 'bg-red-100 text-red-600 font-semibold' : '' }}">
    <ion-icon name="home-outline" class="text-lg"></ion-icon>
    Dashboard
  </a>

  <a href="/admin/berita" class="flex items-center gap-3 py-2 px-3 rounded hover:bg-red-50 transition-all {{ request()->is('admin/berita*') ? 'bg-red-100 text-red-600 font-semibold' : '' }}">
    <ion-icon name="newspaper-outline" class="text-lg"></ion-icon>
    Berita
  </a>

  <a href="/admin/galeri" class="flex items-center gap-3 py-2 px-3 rounded hover:bg-red-50 transition-all {{ request()->is('admin/galeri*') ? 'bg-red-100 text-red-600 font-semibold' : '' }}">
    <ion-icon name="images-outline" class="text-lg"></ion-icon>
    Galeri
  </a>

  <a href="/admin/kontak" class="flex items-center gap-3 py-2 px-3 rounded hover:bg-red-50 transition-all {{ request()->is('admin/kontak*') ? 'bg-red-100 text-red-600 font-semibold' : '' }}">
    <ion-icon name="call-outline" class="text-lg"></ion-icon>
    Kontak
  </a>
</nav>
