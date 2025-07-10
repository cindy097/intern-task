<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tasty Food</title>
  @vite('resources/css/app.css')

  <!-- Ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  
</head>

<body class="bg-white text-white font-sans overflow-x-hidden">

 <!-- Navbar -->
<nav class="absolute top-0 left-0 w-full z-50 py-6">
  <div class="max-w-7xl mx-auto px-4 md:px-10 flex justify-between items-center">
    <!-- Logo -->
    <h1 class="font-bold text-xl text-white">TASTY FOOD</h1>

    <!-- Hamburger (mobile only) -->
    <button onclick="toggleMenu()" class="text-3xl md:hidden text-white">
      <ion-icon name="menu-outline"></ion-icon>
    </button>

    <!-- Menu Desktop -->
    <ul class="hidden md:flex space-x-6 text-sm font-medium text-white">
      <li><a href="{{ url('/') }}" class="hover:text-gray-300">HOME</a></li>
      <li><a href="{{ route('tentang') }}" class="hover:text-gray-300">TENTANG</a></li>
      <li><a href="{{ route('berita') }}" class="hover:text-gray-300">BERITA</a></li>
      <li><a href="{{ route('galeri') }}" class="hover:text-gray-300">GALERI</a></li>
      <li><a href="{{ route('kontak') }}" class="hover:text-gray-300">KONTAK</a></li>
    </ul>
  </div>
</nav>

<!-- Sidebar Mobile -->
<div id="mobileMenu" class="fixed top-0 left-0 h-full w-64 bg-white/95 backdrop-blur-md shadow-lg transform -translate-x-full transition-transform duration-300 ease-in-out z-50 md:hidden flex flex-col text-black">
  <div class="flex justify-between items-center px-6 py-4 border-b">
    <h2 class="font-bold text-lg">MENU</h2>
    <button onclick="toggleMenu()" class="text-2xl">
      <ion-icon name="close-outline"></ion-icon>
    </button>
  </div>
  <div class="flex flex-col p-6 space-y-4">
    <a href="{{ url('/') }}" class="hover:text-gray-600">HOME</a>
    <a href="{{ route('tentang') }}" class="hover:text-gray-600">TENTANG</a>
    <a href="{{ route('berita') }}" class="hover:text-gray-600">BERITA</a>
    <a href="{{ route('galeri') }}" class="hover:text-gray-600">GALERI</a>
    <a href="{{ route('kontak') }}" class="hover:text-gray-600">KONTAK</a>
  </div>
</div>

<!-- Hero / Jumbotron -->
<section class="h-[550px] bg-cover bg-center relative flex items-end pb-20" style="background-image: url('{{ asset('img/bg-card.png') }}');">
  <div class="max-w-7xl mx-auto w-full px-4 md:px-10">
    <h1 class="text-2xl md:text-5xl mb-[180px] font-extrabold uppercase">KONTAK KAMI</h1>
  </div>
</section>

    <!-- SCRIPT -->
  <script>
    function toggleMenu() {
      const menu = document.getElementById('mobileMenu');
      menu.classList.toggle('-translate-x-full');
    }
  </script>

<!-- kontak-->
<!-- Kontak -->
<section id="kontak" class="bg-white py-16 px-4 md:px-10">
  <div class="max-w-5xl mx-auto">
    <!-- Judul -->
    <h2 class="text-2xl font-bold mb-8 text-black">KONTAK KAMI</h2>

    <!-- Alert Box -->
    <div id="alertBox"
      class="hidden mb-6 bg-white text-black text-sm font-medium border border-black rounded-lg px-4 py-3 shadow-md transition duration-500 ease-in-out transform opacity-0 -translate-y-2">
      Terima kasih telah mengontak kami!
    </div>

    <!-- Formulir -->
    <form id="contactForm" onsubmit="handleSubmit(event)" class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-12">
      <input type="text" id="subject" placeholder="Subject" class="w-full border border-black rounded-lg px-4 py-3 text-sm text-black placeholder-gray-500 focus:outline-none"/>
      <textarea id="message" placeholder="Message" class="w-full h-full min-h-[120px] md:row-span-3 border border-black rounded-lg px-4 py-3 text-sm text-black placeholder-gray-500 focus:outline-none"></textarea>
      <input type="text" id="name" placeholder="Name" class="w-full border border-black rounded-lg px-4 py-3 text-sm text-black placeholder-gray-500 focus:outline-none"/>
      <input type="email" id="email" placeholder="Email" class="w-full border border-black rounded-lg px-4 py-3 text-sm text-black placeholder-gray-500 focus:outline-none"/>
      <button type="submit" class="col-span-1 md:col-span-2 bg-black text-white font-semibold py-4 rounded-lg hover:opacity-90 transition">KIRIM</button>
    </form>

    <!-- Info Kontak -->
    <div class="grid grid-cols-1 sm:grid-cols-3 text-center gap-10">
      <div>
        <div class="w-14 h-14 mx-auto rounded-full bg-black flex items-center justify-center mb-3">
          <img src="img/mail.png" alt="Email Icon" class="w-[25px]" />
        </div>
        <p class="font-bold text-sm mb-1">EMAIL</p>
        <p class="text-sm text-gray-800">tastyfood@gmail.com</p>
      </div>
      <div>
        <div class="w-14 h-14 mx-auto rounded-full bg-black flex items-center justify-center mb-3">
          <img src="img/call.png" alt="Phone Icon" class="w-[20px]" />
        </div>
        <p class="font-bold text-sm mb-1">PHONE</p>
        <p class="text-sm text-gray-800">+62 812 3456 7890</p>
      </div>
      <div>
        <div class="w-14 h-14 mx-auto rounded-full bg-black flex items-center justify-center mb-3">
          <img src="img/loc.png" alt="Location Icon" class="w-4" />
        </div>
        <p class="font-bold text-sm mb-1">LOCATION</p>
        <p class="text-sm text-gray-800">Kota Bandung, Jawa Barat</p>
      </div>
    </div>
  </div>
</section>

<!-- Script -->
<script>
  function handleSubmit(event) {
    event.preventDefault();

    const subject = document.getElementById('subject').value.trim();
    const message = document.getElementById('message').value.trim();
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const alertBox = document.getElementById('alertBox');

    // Validasi input kosong
    if (!subject || !message || !name || !email) {
      alert("Semua field harus diisi!");
      return;
    }

    // Tampilkan alert
    alertBox.classList.remove('hidden');
    setTimeout(() => {
      alertBox.classList.remove('opacity-0', '-translate-y-2');
      alertBox.classList.add('opacity-100', 'translate-y-0');
    }, 10);

    // Reset form
    event.target.reset();

    // Sembunyikan alert setelah 4 detik
    setTimeout(() => {
      alertBox.classList.remove('opacity-100', 'translate-y-0');
      alertBox.classList.add('opacity-0', '-translate-y-2');
    }, 4000);
    setTimeout(() => {
      alertBox.classList.add('hidden');
    }, 4500);
  }
</script>

<!-- Google Maps Embed Section -->
<section class="bg-[#f5f5f5] py-10 px-4">
  <div class="max-w-5xl mx-auto rounded-xl overflow-hidden shadow-md">
    <div class="relative h-[400px] w-full">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8200837345286!2d107.63619837575345!3d-6.911225767636712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7e0e2d9f7ab%3A0x16e22e2fc7c3f580!2sSummarecon%20Bandung!5e0!3m2!1sid!2sid!4v1720533394443!5m2!1sid!2sid"
        width="100%"
        height="100%"
        allowfullscreen=""
        loading="lazy"
        style="border:0;"
        class="absolute top-0 left-0 w-full h-full"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </div>
  </div>
</section>

<footer class="bg-black text-white px-4 md:px-10 pt-16 pb-10">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-10">
    
    <!-- Logo dan deskripsi -->
    <div>
      <h2 class="text-2xl font-bold mb-4">Tasty Food</h2>
      <p class="text-sm mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

      <div class="flex gap-4">
        <img src="img/fb_logo.png" alt="Facebook" class="w-6 h-6 hover:scale-110 transition-transform duration-200">
        <img src="img/twt_logo.png" alt="Twitter" class="w-6 h-6 hover:scale-110 transition-transform duration-200">
      </div>
    </div>

    <!-- Useful Links -->
    <div>
      <h3 class="font-semibold text-lg mb-4">Useful links</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="#" class="hover:underline">Blog</a></li>
        <li><a href="#" class="hover:underline">Hewan</a></li>
        <li><a href="#" class="hover:underline">Galeri</a></li>
        <li><a href="#" class="hover:underline">Testimonial</a></li>
      </ul>
    </div>

    <!-- Privacy -->
    <div>
      <h3 class="font-semibold text-lg mb-4">Privacy</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="#" class="hover:underline">Karir</a></li>
        <li><a href="#" class="hover:underline">Tentang Kami</a></li>
        <li><a href="#" class="hover:underline">Kontak Kami</a></li>
        <li><a href="#" class="hover:underline">Servis</a></li>
      </ul>
    </div>

    <!-- Contact Info -->
    <div>
      <h3 class="font-semibold text-lg mb-4">Contact Info</h3>
      <div class="space-y-4 text-sm">
        <div class="flex items-center gap-2">
          <img src="img/mail.png" class="w-4" alt="email">
          <span>tastyfood@gmail.com</span>
        </div>
        <div class="flex items-center gap-2">
          <img src="img/call.png" class="w-4 h-4" alt="phone">
          <span>+62 812 3456 7890</span>
        </div>
        <div class="flex items-center gap-2">
          <img src="img/loc.png" class="w-3" alt="location">
          <span>Kota Bandung, Jawa Barat</span>
        </div>
      </div>
    </div>
  </div>

  <div class="text-center text-sm text-gray-400 mt-12">
    Copyright &copy; 2023 All rights reserved
  </div>
</footer>
</body>
</html>