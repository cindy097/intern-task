<x-layout>
<!-- Hero / Jumbotron -->
<section class="h-[550px] bg-cover bg-center relative flex items-end pb-20" style="background-image: url('{{ asset('img/bg-card.png') }}');">
  <div class="max-w-7xl mx-auto w-full px-4 md:px-10 lg:px-10 xl:px-10">
    <h1 class="text-white text-2xl md:text-5xl mb-[180px] font-extrabold uppercase">TENTANG KAMI</h1>
  </div>
</section>

<!-- Tasty Food Section -->
<section class="bg-white py-20 px-4 md:px-10 lg:px-10 xl:px-10">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 items-start gap-12">

    <!-- Gambar (Mobile & Tablet) -->
    <div class="flex md:hidden justify-center gap-4">
      <img
        src="{{ asset('img/gallery1.jpg') }}"
        alt="Salad"
        class="rounded-xl shadow-md w-[140px]"
      >
      <img
        src="{{ asset('img/berita_mini2.jpg') }}"
        alt="Chef"
        class="rounded-xl shadow-md w-[140px]"
      >
    </div>

    <!-- Text Section -->
    <div class="md:pt-6 lg:pt-16">
      <h2 class="text-2xl md:text-3xl font-bold mb-4 text-gray-900">TASTY FOOD</h2>
      <p class="font-semibold text-gray-800 mb-3 leading-relaxed">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu rutrum commodo.
      </p>
      <p class="text-gray-600 leading-relaxed">
        Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.
      </p>
    </div>

    <!-- Gambar (≥md) -->
    <div class="hidden md:flex justify-center md:justify-end gap-4">
      <img
        src="{{ asset('img/gallery1.jpg') }}"
        alt="Salad"
        class="rounded-xl shadow-md w-[160px] md:w-[160px] lg:w-[200px] xl:w-[220px]"
      >
      <img
        src="{{ asset('img/berita_mini2.jpg') }}"
        alt="Chef"
        class="rounded-xl shadow-md w-[160px] md:w-[160px] lg:w-[200px] xl:w-[220px]"
      >
    </div>

  </div>
</section>

<!-- Section VISI & MISI -->
<section class="bg-[#f4f4f4] py-20 px-4 md:px-10 lg:px-10 xl:px-10">
  <div class="max-w-7xl mx-auto space-y-20">

    <!-- VISI -->
    <div class="flex flex-col lg:flex-row items-center gap-8">
      <!-- Gambar VISI -->
      <div class="grid grid-cols-2 gap-4 w-full lg:w-1/2">
        <div class="aspect-[1/1] rounded-xl overflow-hidden shadow-lg">
          <img src="{{ asset('img/berita_utama.jpg') }}" alt="Visi 1" class="w-full h-full object-cover">
        </div>
        <div class="aspect-[1/1] rounded-xl overflow-hidden shadow-lg">
          <img src="{{ asset('img/visi2.jpg') }}" alt="Visi 2" class="w-full h-full object-cover">
        </div>
      </div>

      <!-- Teks VISI -->
      <div class="w-full lg:w-1/2 px-2">
        <h3 class="text-black text-xl font-bold mb-4">VISI</h3>
        <p class="text-gray-900 leading-relaxed">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et suscipit. Curabitur facilisis lectus vitae eros malesuada eleifend. Mauris eget tellus odio. Phasellus vestibulum turpis ac sem commodo, at posuere eros consequat. Duis nec ex at ante volutpat posuere. Morbi vel nunc tortor. Nulla facilisi.
        </p>
      </div>
    </div>

    <!-- MISI -->
    <div class="flex flex-col-reverse lg:flex-row items-center gap-8">
      <!-- Teks MISI -->
      <div class="w-full lg:w-1/2 px-2">
        <h3 class="text-black text-xl font-bold mb-4">MISI</h3>
        <p class="text-gray-900 leading-relaxed">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce scelerisque magna aliquet cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum placerat tellus et suscipit. Curabitur facilisis lectus vitae eros malesuada eleifend. Mauris eget tellus odio. Phasellus vestibulum turpis ac sem commodo, at posuere eros consequat. Duis nec ex at ante volutpat posuere. Morbi vel nunc tortor. Nulla facilisi.
        </p>
      </div>

      <!-- Gambar MISI -->
      <div class="w-full lg:w-1/2">
        <div class="aspect-video rounded-xl overflow-hidden shadow-lg">
          <img src="{{ asset('img/berita_mini1.jpg') }}" alt="Misi" class="w-full h-full object-cover">
        </div>
      </div>
    </div>
  </div>
</section>
</x-layout>