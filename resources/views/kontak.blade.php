<x-layout>
<!-- Hero / Jumbotron -->
<section class="h-[550px] bg-cover bg-center relative flex items-end pb-20" style="background-image: url('{{ asset('img/bg-card.png') }}');">
  <div class="max-w-7xl mx-auto w-full px-4 md:px-10 lg:px-10 xl:px-10">
    <h1 class="text-white text-2xl md:text-5xl mb-[180px] font-extrabold uppercase">KONTAK KAMI</h1>
  </div>
</section>


<!-- kontak-->
<!-- Kontak -->
<section id="kontak" class="bg-white py-16 px-4 md:px-10 lg:px-10 xl:px-10">
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
<section class="bg-[#f5f5f5] py-10 px-4 md:px-10 lg:px-10 xl:px-10">
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
</x-layout>