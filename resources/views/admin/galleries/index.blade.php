<x-layout.admin-layout>
  <div class="p-4">
    <div class="bg-white rounded-lg shadow p-6">

      {{-- SLIDESHOW --}}
      <div class="mb-12">
        <div class="flex justify-between items-center mb-6">
          <h1 class="text-2xl font-bold">Data Slideshow</h1>
          <a href="{{ route('admin.slideshows.create') }}" class="bg-yellow-300 hover:bg-yellow-400 text-black font-semibold px-5 py-2 rounded-lg transition">
            + Tambah Slideshow
          </a>
        </div>

        @if(session('success_slideshow'))
          <div class="bg-green-100 border border-green-300 text-green-700 p-3 rounded mb-6 text-sm">
            {{ session('success_slideshow') }}
          </div>
        @endif

        <div class="overflow-x-auto">
          <table class="w-full table-auto text-sm border rounded-lg overflow-hidden">
            <thead class="bg-gray-100 text-left">
              <tr>
                <th class="p-3 border text-center">ID</th>
                <th class="p-3 border text-center">Judul</th>
                <th class="p-3 border text-center">Gambar</th>
                <th class="p-3 border text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($slideshows as $slideshow)
                <tr class="hover:bg-gray-50">
                  <td class="p-3 border text-center">{{ $loop->iteration }}</td>
                  <td class="p-3 border">{{ $slideshow->title }}</td>
                  <td class="p-3 border text-center">
                    <img src="{{ asset('storage/' . $slideshow->image) }}" class="mx-auto h-16 w-28 object-cover rounded shadow">
                  </td>
                  <td class="p-3 border text-center">
                    <a href="{{ route('admin.slideshows.edit', $slideshow->id) }}" class="text-blue-600 hover:underline font-medium">Edit</a>
                    <form action="{{ route('admin.slideshows.destroy', $slideshow->id) }}" method="POST" class="inline">
                      @csrf @method('DELETE')
                      <button onclick="return confirm('Yakin hapus slideshow ini?')" class="text-red-600 hover:underline font-medium ml-3">Hapus</button>
                    </form>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="4" class="text-center py-6 text-gray-500">Belum ada slideshow.</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>

        <div class="mt-6">
          {{ $slideshows->links() }}
        </div>
      </div>

      {{-- GALLERY --}}
      <div>
        <div class="flex justify-between items-center mb-6">
          <h1 class="text-2xl font-bold">Data Galeri</h1>
          <a href="{{ route('admin.galleries.create') }}" class="bg-yellow-300 hover:bg-yellow-400 text-black font-semibold px-5 py-2 rounded-lg transition">
            + Tambah Galeri
          </a>
        </div>

        @if(session('success_gallery'))
          <div class="bg-green-100 border border-green-300 text-green-700 p-3 rounded mb-6 text-sm">
            {{ session('success_gallery') }}
          </div>
        @endif

        <div class="overflow-x-auto">
          <table class="w-full table-auto text-sm border rounded-lg overflow-hidden">
            <thead class="bg-gray-100 text-left">
              <tr>
                <th class="p-3 border text-center">ID</th>
                <th class="p-3 border text-center">Judul</th>
                <th class="p-3 border text-center">Gambar</th>
                <th class="p-3 border text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($gallery as $item)
                <tr class="hover:bg-gray-50">
                  <td class="p-3 border text-center">{{ $loop->iteration }}</td>
                  <td class="p-3 border">{{ $item->title }}</td>
                  <td class="p-3 border text-center">
                    <img src="{{ asset('storage/' . $item->image) }}" class="mx-auto h-16 w-28 object-cover rounded shadow">
                  </td>
                  <td class="p-3 border text-center">
                    <a href="{{ route('admin.galleries.edit', $item->id) }}" class="text-blue-600 hover:underline font-medium">Edit</a>
                    <form action="{{ route('admin.galleries.destroy', $item->id) }}" method="POST" class="inline">
                      @csrf @method('DELETE')
                      <button onclick="return confirm('Yakin hapus galeri ini?')" class="text-red-600 hover:underline font-medium ml-3">Hapus</button>
                    </form>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="4" class="text-center py-6 text-gray-500">Belum ada gambar galeri.</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>

        <div class="mt-6">
          {{ $gallery->links() }}
        </div>
      </div>

    </div>
  </div>
</x-layout.admin-layout>
