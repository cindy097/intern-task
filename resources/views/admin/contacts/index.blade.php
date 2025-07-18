<x-layout.admin-layout>
  <div class="max-w-4xl mx-auto px-4 md:px-10 py-10">
    <h1 class="text-2xl font-bold mb-6">Informasi Kontak</h1>

    @if (session('success'))
      <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
        {{ session('success') }}
      </div>
    @endif

    <form action="{{ route('admin.contacts.update', $contact) }}" method="POST" class="bg-white shadow rounded-lg p-6">
      @csrf
      @method('PUT')

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

      <button type="submit" class="font-semibold bg-yellow-300 text-black px-4 py-2 rounded hover:bg-yellow-400 transition">
        Simpan Perubahan
      </button>
    </form>
  </div>
</x-layout.admin-layout>
