<x-layout.admin-layout>
  <div class="p-4">
    <div class="bg-white rounded-lg shadow p-6">

      {{-- === SLIDESHOW SECTION === --}}
      <div class="mb-12">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-3 sm:gap-0">
          <h1 class="text-2xl font-bold">Data Slideshow</h1>
          <a href="{{ route('admin.slideshows.create') }}"
             class="bg-yellow-300 hover:bg-yellow-400 text-black font-semibold px-5 py-2 rounded-lg transition text-sm sm:text-base">
            + Tambah Slideshow
          </a>
        </div>

        @if(session('success_slideshow'))
          <div class="bg-green-100 border border-green-300 text-green-700 p-3 rounded mb-6 text-sm">
            {{ session('success_slideshow') }}
          </div>
        @endif

{{-- Mobile View --}}
<div class="space-y-4 md:hidden">
  @forelse ($slideshows as $slideshow)
    <div class="border rounded-lg p-4 bg-gray-50 shadow-sm">
      <h3 class="text-lg font-bold mb-2">{{ $slideshow->title }}</h3>
      <img src="{{ asset('storage/' . $slideshow->image) }}" class="w-full h-40 object-cover rounded mb-3">
      <div class="flex justify-end items-center gap-3">
        <a href="{{ route('admin.slideshows.edit', $slideshow->id) }}" class="text-blue-600 text-sm hover:underline font-medium">Edit</a>
        <form action="{{ route('admin.slideshows.destroy', $slideshow->id) }}" method="POST" onsubmit="return confirm('Yakin hapus slideshow ini?')">
          @csrf
          @method('DELETE')
          <button class="text-red-600 text-sm hover:underline font-medium">Hapus</button>
        </form>
      </div>
    </div>
  @empty
    <p class="text-center text-gray-500">Belum ada slideshow.</p>
  @endforelse

  <div class="mt-6">
    {{ $slideshows->links() }}
  </div>
</div>

        {{-- Desktop View --}}
        <div class="hidden md:block overflow-x-auto">
          <table class="w-full table-auto text-sm border rounded-lg overflow-hidden">
            <thead class="bg-gray-100 text-left">
              <tr>
                <th class="p-3 border text-center">ID</th>
                <th class="p-3 border">Judul</th>
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
                    <div class="flex justify-center gap-3">
                      <a href="{{ route('admin.slideshows.edit', $slideshow->id) }}" class="text-blue-600 text-sm hover:underline font-medium">Edit</a>
                      <form action="{{ route('admin.slideshows.destroy', $slideshow->id) }}" method="POST" onsubmit="return confirm('Yakin hapus slideshow ini?')">
                        @csrf @method('DELETE')
                        <button class="text-red-600 text-sm hover:underline font-medium">Hapus</button>
                      </form>
                    </div>
                  </td>
                </tr>
              @empty
                <tr><td colspan="4" class="text-center py-6 text-gray-500">Belum ada slideshow.</td></tr>
              @endforelse
            </tbody>
          </table>
          <div class="mt-6">
            {{ $slideshows->links() }}
          </div>
        </div>
      </div>

      {{-- === GALLERY SECTION === --}}
      <div>
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-3 sm:gap-0">
          <h1 class="text-2xl font-bold">Data Galeri</h1>
          <a href="{{ route('admin.galleries.create') }}"
             class="bg-yellow-300 hover:bg-yellow-400 text-black font-semibold px-5 py-2 rounded-lg transition text-sm sm:text-base">
            + Tambah Galeri
          </a>
        </div>

        @if(session('success_gallery'))
          <div class="bg-green-100 border border-green-300 text-green-700 p-3 rounded mb-6 text-sm">
            {{ session('success_gallery') }}
          </div>
        @endif

        {{-- Mobile View --}}
<div class="space-y-4 md:hidden">
  @forelse ($gallery as $item)
    <div class="border rounded-lg p-4 bg-gray-50 shadow-sm">
      <h3 class="text-lg font-bold mb-2">{{ $item->title }}</h3>
      <img src="{{ asset('storage/' . $item->image) }}" class="w-full h-40 object-cover rounded mb-3">
      <div class="flex justify-end items-center gap-3">
        <a href="{{ route('admin.galleries.edit', $item->id) }}" class="text-blue-600 text-sm hover:underline font-medium">Edit</a>
        <form action="{{ route('admin.galleries.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin hapus galeri ini?')">
          @csrf @method('DELETE')
          <button class="text-red-600 text-sm hover:underline font-medium">Hapus</button>
        </form>
      </div>
    </div>
  @empty
    <p class="text-center text-gray-500">Belum ada gambar galeri.</p>
  @endforelse

  <div class="mt-6">
    {{ $gallery->links() }}
  </div>
</div>


        {{-- Desktop View --}}
        <div class="hidden md:block overflow-x-auto">
          <table class="w-full table-auto text-sm border rounded-lg overflow-hidden">
            <thead class="bg-gray-100 text-left">
              <tr>
                <th class="p-3 border text-center">ID</th>
                <th class="p-3 border">Judul</th>
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
                    <div class="flex justify-center gap-3">
                      <a href="{{ route('admin.galleries.edit', $item->id) }}" class="text-blue-600 text-sm hover:underline font-medium">Edit</a>
                      <form action="{{ route('admin.galleries.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin hapus galeri ini?')">
                        @csrf @method('DELETE')
                        <button class="text-red-600 text-sm hover:underline font-medium">Hapus</button>
                      </form>
                    </div>
                  </td>
                </tr>
              @empty
                <tr><td colspan="4" class="text-center py-6 text-gray-500">Belum ada gambar galeri.</td></tr>
              @endforelse
            </tbody>
          </table>
          <div class="mt-6">
            {{ $gallery->links() }}
          </div>
        </div>
      </div>

    </div>
  </div>
</x-layout.admin-layout>