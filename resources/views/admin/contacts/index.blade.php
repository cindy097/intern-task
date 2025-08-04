<x-layout.admin-layout>
  <div class="max-w-4xl mx-auto">
    @if (session('success'))
      <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
        {{ session('success') }}
      </div>
    @endif

    <form action="{{ route('admin.contacts.update', $contact) }}" method="POST" class="bg-white shadow rounded-lg p-6">
      @csrf
      @method('PUT')
    <h1 class="text-2xl font-bold mb-6">Informasi Kontak</h1>
      <div class="mb-4">
        <label class="block font-medium mb-1">Email</label>
        <input type="email" name="email" value="{{ old('email', $contact->email) }}"
               class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-2 focus:ring-blue-500">
        @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
      </div>

      <div class="mb-4">
        <label class="block font-medium mb-1">No. Telepon</label>
        <input type="text" name="phone" value="{{ old('phone', $contact->phone) }}"
               class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-2 focus:ring-blue-500">
        @error('phone') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
      </div>

      <div class="mb-6">
        <label class="block font-medium mb-1">Alamat</label>
        <textarea name="address" rows="4"
                  class="w-full border border-gray-300 rounded px-3 py-2 focus:ring-2 focus:ring-blue-500">{{ old('address', $contact->address) }}</textarea>
        @error('address') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
      </div>

        <!-- Google Maps Embed Section -->
  <section>
    <div class="max-w-7xl mx-auto w-full">
      <div class="px-2 pb-8">
        <div class="rounded-xl overflow-hidden shadow-md">
          <div class="relative h-[300px] w-full">
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

      <button type="submit" class="font-semibold bg-yellow-300 text-black px-4 py-2 rounded hover:bg-yellow-400 transition">
        Simpan Perubahan
      </button>
    </form>
  </div>
</x-layout.admin-layout>
