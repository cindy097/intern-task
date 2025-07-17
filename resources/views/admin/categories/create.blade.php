<x-layout.admin-layout>
  <div class="p-4 max-w-lg mx-auto">
    <h1 class="text-xl font-bold mb-4">Tambah Kategori</h1>

    <form action="{{ route('admin.categories.store') }}" method="POST" class="space-y-4">
      @csrf
      <div>
        <label for="name" class="block mb-1 font-medium">Nama Kategori</label>
        <input type="text" name="name" id="name" required class="w-full border p-2 rounded">
        @error('name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
      </div>

      <button type="submit" class="font-semibold bg-amber-300 px-4 py-2 rounded hover:bg-amber-500">Simpan</button>
      <a href="{{ route('admin.categories.index') }}" class="ml-4 text-gray-500">Batal</a>
    </form>
  </div>
</x-layout.admin-layout>
