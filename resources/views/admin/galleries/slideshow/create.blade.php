<x-layout.admin-layout>
  <div class="p-4 max-w-2xl mx-auto">
    <h1 class="text-2xl font-bold mb-4">Tambah Slideshow</h1>

    @if ($errors->any())
      <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
        <ul class="list-disc list-inside">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('admin.slideshows.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
      @csrf

      <div>
        <label class="block font-medium">Judul</label>
        <input type="text" name="title" class="w-full border rounded px-3 py-2" value="{{ old('title') }}">
      </div>

      <div>
        <label class="block font-medium">Gambar</label>
        <input type="file" name="image" class="w-full">
      </div>

      <div>
        <button class="bg-amber-400 hover:bg-amber-500 text-white font-bold px-4 py-2 rounded">Simpan</button>
        <a href="{{ route('admin.galleries.index') }}" class="ml-4 text-gray-500">Batal</a>
      </div>
    </form>
  </div>
</x-layout.admin-layout>
