<x-layout.layout>
  <!-- Hero / Jumbotron -->
  <section class="h-[550px] bg-cover bg-center relative flex items-end pb-20" style="background-image: url('{{ asset('img/bg-card.png') }}');">
    <div class="max-w-7xl mx-auto w-full px-4 md:px-10 lg::px-10 xl::px-10">
      <h1 class="text-white text-2xl md:text-5xl mb-[180px] font-extrabold uppercase">KONTAK KAMI</h1>
    </div>
  </section>

  <!-- Kontak -->
  <section id="kontak" class="bg-white py-16">
    <div class="max-w-7xl mx-auto w-full">
      <div class="px-4 md:px-10 lg::px-10 xl::px-10">
        <!-- Judul -->
        <h2 class="text-2xl font-bold mb-8 text-black">KONTAK KAMI</h2>

        <!-- Alert Box -->
        @if (session('success'))
          <div class="mb-6 bg-white text-black text-sm font-medium border border-black rounded-lg px-4 py-3 shadow-md">
            {{ session('success') }}
          </div>
        @endif

        <!-- Formulir -->
        <form action="{{ route('messages.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-12">
          @csrf
          <input type="text" name="subject" placeholder="Subject" class="w-full border border-black rounded-lg px-4 py-3 text-sm text-black placeholder-gray-500 focus:outline-none" />
          <textarea name="message" placeholder="Message" class="w-full h-full min-h-[120px] md:row-span-3 border border-black rounded-lg px-4 py-3 text-sm text-black placeholder-gray-500 focus:outline-none"></textarea>
          <input type="text" name="name" placeholder="Name" class="w-full border border-black rounded-lg px-4 py-3 text-sm text-black placeholder-gray-500 focus:outline-none" />
          <input type="email" name="email" placeholder="Email" class="w-full border border-black rounded-lg px-4 py-3 text-sm text-black placeholder-gray-500 focus:outline-none" />
          <button type="submit" class="col-span-1 md:col-span-2 bg-black text-white font-semibold py-4 rounded-lg hover:opacity-90 transition">KIRIM</button>
        </form>

        <!-- Info Kontak -->
        <div class="grid grid-cols-1 sm:grid-cols-3 text-center gap-10">
          <div>
            <div class="w-14 h-14 mx-auto rounded-full bg-black flex items-center justify-center mb-3">
              <img src="{{ asset('img/mail.png') }}" alt="Email Icon" class="w-[25px]" />
            </div>
            <p class="font-bold text-sm mb-[-15px]">EMAIL</p>
            <p class="text-sm text-gray-800 mt-[15px]">{{ $contact->email }}</p>
          </div>
          <div>
            <div class="w-14 h-14 mx-auto rounded-full bg-black flex items-center justify-center mb-3">
              <img src="{{ asset('img/call.png') }}" alt="Phone Icon" class="w-[20px]" />
            </div>
            <p class="font-bold text-sm mb-[-15px]">PHONE</p>
            <p class="text-sm text-gray-800 mt-[15px]">{{ $contact->phone }}</p>
          </div>
          <div>
            <div class="w-14 h-14 mx-auto rounded-full bg-black flex items-center justify-center mb-3">
              <img src="{{ asset('img/loc.png') }}" alt="Location Icon" class="w-4" />
            </div>
            <p class="font-bold text-sm mb-[-15px]">LOCATION</p>
            <p class="text-sm text-gray-800 mt-[15px]">{{ $contact->address }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Google Maps Embed Section -->
  <section class="bg-[#f5f5f5] py-10">
    <div class="max-w-7xl mx-auto w-full">
      <div class="px-4 md:px-10 lg:px-10 xl:px-10">
        <div class="rounded-xl overflow-hidden shadow-md">
          <div class="relative h-[460px] w-full">
            <iframe
              width="100%"
              height="100%"
              class="absolute top-0 left-0 w-full h-full"
              frameborder="0"
              style="border:0;"
              loading="lazy"
              allowfullscreen
              referrerpolicy="no-referrer-when-downgrade"
              src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCJkOJ6M1hVKZRk_xwYf5lSfVIILzPpSDM&q={{ urlencode($contact->address) }}">
            </iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-layout.layout>