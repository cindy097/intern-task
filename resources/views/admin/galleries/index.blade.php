<x-layout.admin-layout>
  <div class="p-4 space-y-10">

    {{-- SECTION SLIDESHOW --}}
    <div>
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Data Slideshow</h2>
        <a href="{{ route('admin.slideshows.create') }}" class="bg-amber-300 px-4 py-2 rounded hover:bg-amber-400 font-bold">
          + Tambah Slideshow
        </a>
      </div>

      <table class="w-full table-auto border text-sm">
        <thead class="bg-gray-100">
          <tr>
            <th class="border p-2">ID</th>
            <th class="border p-2">Judul</th>
            <th class="border p-2">Gambar</th>
            <th class="border p-2">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($slideshows as $slideshow)
            <tr>
              <td class="border p-2 text-center">{{ $slideshow->id }}</td>
              <td class="border p-2">{{ $slideshow->title }}</td>
              <td class="border p-2">
                <img src="{{ asset('storage/' . $slideshow->image) }}" alt="slideshow" class="h-16 rounded mx-auto">
              </td>
              <td class="border p-2 text-center">
                <a href="{{ route('admin.slideshows.edit', $slideshow->id) }}" class="text-blue-500 hover:underline">Edit</a>
                <form action="{{ route('admin.slideshows.destroy', $slideshow->id) }}" method="POST" class="inline">
                  @csrf @method('DELETE')
                  <button onclick="return confirm('Yakin hapus?')" class="text-red-500 ml-2 hover:underline">Hapus</button>
                </form>
              </td>
            </tr>
          @empty
            <tr><td colspan="4" class="text-center py-3">Belum ada slideshow.</td></tr>
          @endforelse
        </tbody>
      </table>
    </div>

    {{-- SECTION GALLERY --}}
    <div>
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Data Galeri</h2>
        <a href="{{ route('admin.galleries.create') }}" class="bg-amber-300 px-4 py-2 rounded hover:bg-amber-400 font-bold">
          + Tambah Galeri
        </a>
      </div>

      <table class="w-full table-auto border text-sm mt-4">
        <thead class="bg-gray-100">
          <tr>
            <th class="border p-2">ID</th>
            <th class="border p-2">Judul</th>
            <th class="border p-2">Gambar</th>
            <th class="border p-2">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($gallery as $item)
            <tr>
              <td class="border p-2 text-center">{{ $item->id }}</td>
              <td class="border p-2">{{ $item->title }}</td>
              <td class="border p-2">
                <img src="{{ asset('storage/' . $item->image) }}" alt="gallery" class="h-16 rounded mx-auto">
              </td>
              <td class="border p-2 text-center">
                <a href="{{ route('admin.galleries.edit', $item->id) }}" class="text-blue-500 hover:underline">Edit</a>
                <form action="{{ route('admin.galleries.destroy', $item->id) }}" method="POST" class="inline">
                  @csrf @method('DELETE')
                  <button onclick="return confirm('Yakin hapus?')" class="text-red-500 ml-2 hover:underline">Hapus</button>
                </form>
              </td>
            </tr>
          @empty
            <tr><td colspan="4" class="text-center py-3">Belum ada gambar galeri.</td></tr>
          @endforelse
        </tbody>
      </table>
    </div>

  </div>
</x-layout.admin-layout>
