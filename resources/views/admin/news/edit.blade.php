<x-layout.admin-layout>
  <div>
    <div class="bg-white rounded-lg shadow p-6 max-w-3xl mx-auto">
      <h1 class="text-2xl font-bold mb-6">Edit Berita</h1>

      @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
          <ul class="list-disc list-inside text-sm">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf
        @method('PUT')

        <div>
          <label class="block mb-1 font-medium text-sm text-gray-700">Judul</label>
          <input type="text" name="title" class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-400" value="{{ old('title', $news->title) }}">
        </div>

        <div>
          <label class="block mb-1 font-medium text-sm text-gray-700">Konten</label>
          <textarea name="content" rows="5" class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-400">{{ old('content', $news->content) }}</textarea>
        </div>

        <div>
          <label class="block mb-1 font-medium text-sm text-gray-700">Kategori</label>
          <select name="category_id" class="w-full border border-gray-300 p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-amber-400">
            <option value="">-- Pilih Kategori --</option>
            @foreach ($categories as $cat)
              <option value="{{ $cat->id }}" {{ old('category_id', $news->category_id) == $cat->id ? 'selected' : '' }}>
                {{ $cat->name }}
              </option>
            @endforeach
          </select>
        </div>

        <div>
          <label class="block mb-1 font-medium text-sm text-gray-700">Gambar Saat Ini</label>
          @if ($news->image)
            <img src="{{ asset('storage/' . $news->image) }}" class="h-32 mb-2 rounded">
          @else
            <p class="text-sm text-gray-500">Tidak ada gambar.</p>
          @endif
        </div>

        <div>
          <label class="block mb-1 font-medium text-sm text-gray-700">Ganti Gambar</label>
          <input type="file" name="image" class="w-full text-sm">
        </div>

        <div class="flex items-center space-x-4">
          <button type="submit" class="bg-yellow-300 hover:bg-yellow-400 text-black font-semibold px-5 py-2 rounded-lg transition">
            Update
          </button>
          <a href="{{ route('admin.news.index') }}" class="text-gray-600 hover:underline text-md">Batal</a>
        </div>
      </form>
    </div>
  </div>
</x-layout.admin-layout>
