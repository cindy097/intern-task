<x-layout.admin-layout>
  <div class="p-4">
    <div class="bg-white rounded-lg shadow p-6 max-w-xl mx-auto">
      <h1 class="text-2xl font-bold mb-6">Tambah Kategori</h1>

      <form action="{{ route('admin.categories.store') }}" method="POST" class="space-y-5">
        @csrf

        <div>
          <label for="name" class="block mb-1 font-medium text-sm text-gray-700">Nama Kategori</label>
          <input
            type="text"
            name="name"
            id="name"
            required
            class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-amber-400"
          >
          @error('name')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="flex items-center space-x-4">
          <button
            type="submit"
            class="bg-yellow-300 hover:bg-yellow-400 text-black font-semibold px-5 py-2 rounded-lg transition"
          >
            Simpan
          </button>
          <a href="{{ route('admin.categories.index') }}" class="text-gray-600 hover:underline text-md">Batal</a>
        </div>
      </form>
    </div>
  </div>
</x-layout.admin-layout>
