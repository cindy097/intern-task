<footer class="bg-black text-white px-4 md:px-10 lg:px-10 xl:px-10 pt-16 pb-4">
  <!-- Grid utama footer -->
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-10">
    
    <!-- Logo dan deskripsi -->
    <div>
      <h2 class="text-2xl font-bold mb-4">Tasty Food</h2>
      <p class="text-sm mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <div class="flex gap-4">
        <img src="{{ asset('img/fb_logo.png') }}" alt="Facebook" class="w-6 h-6 hover:scale-110 transition-transform duration-200">
        <img src="{{ asset('img/twt_logo.png') }}" alt="Twitter" class="w-6 h-6 hover:scale-110 transition-transform duration-200">
      </div>
    </div>

    <!-- Useful Links -->
    <div>
      <h3 class="font-semibold text-lg mb-4">Useful links</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="#" class="hover:underline">Blog</a></li>
        <li><a href="#" class="hover:underline">Hewan</a></li>
        <li><a href="{{ route('galeri') }}" class="hover:underline">Galeri</a></li>
        <li><a href="#" class="hover:underline">Testimonial</a></li>
      </ul>
    </div>

    <!-- Privacy -->
    <div>
      <h3 class="font-semibold text-lg mb-4">Privacy</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="#" class="hover:underline">Karir</a></li>
        <li><a href="{{ route('tentang') }}" class="hover:underline">Tentang Kami</a></li>
        <li><a href="{{ route('kontak') }}" class="hover:underline">Kontak Kami</a></li>
        <li><a href="#" class="hover:underline">Servis</a></li>
      </ul>
    </div>

    <!-- Contact Info -->
    <div>
      <h3 class="font-semibold text-lg mb-4">Contact Info</h3>
      <div class="space-y-4 text-sm">
        <div class="flex items-center gap-2">
          <img src="{{ asset('img/mail.png') }}" class="w-4" alt="email">
          <span>{{ $contact->email ?? 'Email belum diatur' }}</span>
        </div>
        <div class="flex items-center gap-2">
          <img src="{{ asset('img/call.png') }}" class="w-4 h-4" alt="phone">
          <span>{{ $contact->phone ?? 'No. telepon belum diatur' }}</span>
        </div>
        <div class="flex items-center gap-2">
          <img src="{{ asset('img/loc.png') }}" class="w-3" alt="location">
          <span>{{ $contact->address ?? 'Alamat belum diatur' }}</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Copyright keluar dari grid -->
  <div class="mt-12 text-center text-sm text-gray-400">
    Copyright &copy; {{ date('Y') }} All rights reserved
  </div>
</footer>
