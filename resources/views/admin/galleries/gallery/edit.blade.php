<x-layout.admin-layout>
  <div class="p-4">
    <div class="bg-white rounded-lg shadow p-6 max-w-xl mx-auto">
      <h1 class="text-2xl font-bold mb-6">Edit Galeri</h1>

      @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6 text-sm">
          <ul class="list-disc list-inside space-y-1">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form action="{{ route('admin.galleries.update', $gallery->id) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf
        @method('PUT')

        <div>
          <label for="title" class="block mb-1 font-medium text-sm text-gray-700">Judul</label>
          <input
            type="text"
            name="title"
            id="title"
            value="{{ old('title', $gallery->title) }}"
            required
            class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-400 focus:border-amber-400"
          >
        </div>

        <div>
          <label class="block mb-1 font-medium text-sm text-gray-700">Gambar Saat Ini</label>
          <img src="{{ asset('storage/' . $gallery->image) }}" class="h-32 mb-2 rounded shadow">
        </div>

        <div>
          <label for="image" class="block mb-1 font-medium text-sm text-gray-700">Ganti Gambar</label>
          <input
            type="file"
            name="image"
            id="image"
            class="w-full text-sm border border-gray-300 p-2 rounded-lg bg-white file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-amber-100 file:text-amber-700 hover:file:bg-amber-200"
          >
        </div>

        <div class="flex items-center space-x-4">
          <button
            type="submit"
            class="bg-yellow-300 hover:bg-yellow-400 text-black font-semibold px-5 py-2 rounded-lg transition"
          >
            Perbarui
          </button>
          <a href="{{ route('admin.galleries.index') }}" class="text-gray-600 hover:underline text-md">Batal</a>
        </div>
      </form>
    </div>
  </div>
</x-layout.admin-layout>
