<x-layout.admin-layout>
  <div class="p-4">
    <h1 class="text-2xl font-bold mb-4">Tambah Berita</h1>

    @if ($errors->any())
      <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
        <ul class="list-disc list-inside">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
      @csrf

      <div>
        <label class="block font-medium">Judul</label>
        <input type="text" name="title" class="w-full border rounded px-3 py-2" value="{{ old('title') }}">
      </div>

      <div>
        <label class="block font-medium">Konten</label>
        <textarea name="content" rows="5" class="w-full border rounded px-3 py-2">{{ old('content') }}</textarea>
      </div>

      <div>
        <label class="block font-medium">Kategori</label>
        <select name="category_id" class="w-full border rounded px-3 py-2">
          <option value="">-- Pilih Kategori --</option>
          @foreach ($categories as $cat)
            <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>
              {{ $cat->name }}
            </option>
          @endforeach
        </select>
      </div>

      <div>
        <label class="block font-medium">Gambar (opsional)</label>
        <input type="file" name="image" class="w-full">
      </div>

      <div>
        <button class="bg-amber-300 text-white font-bold px-4 py-2 rounded hover:bg-amber-400">Simpan</button>
        <a href="{{ route('admin.news.index') }}" class="ml-4 text-gray-500">Batal</a>
      </div>
    </form>
  </div>
</x-layout.admin-layout>
