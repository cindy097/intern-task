<x-layout.admin-layout>
  <div>
    <div class="bg-white rounded-lg shadow p-4">
      
      <!-- Header -->
      <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-3 sm:gap-0">
        <h1 class="text-2xl font-bold">Daftar Berita</h1>
        <a href="{{ route('admin.news.create') }}"
           class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold px-5 py-2 rounded-lg transition text-sm sm:text-base">
          + Tambah Berita
        </a>
      </div>

      <!-- Alert -->
      @if(session('success'))
        <div class="bg-green-100 border border-green-300 text-green-700 p-3 rounded mb-6 text-sm">
          {{ session('success') }}
        </div>
      @endif

      <!-- Mobile View -->
      <div class="space-y-4 md:hidden">
        @forelse($news as $item)
          <div class="border rounded-lg p-4 shadow-sm bg-gray-50">
            <h3 class="text-lg font-bold mb-1">{{ $item->title }}</h3>
            <p class="text-sm text-gray-600 mb-2">Kategori: {{ $item->category->name ?? '-' }}</p>
            @if ($item->image)
              <img src="{{ asset('storage/' . $item->image) }}" alt="gambar"
                   class="h-40 w-full object-cover rounded mb-3">
            @endif
            <div class="flex justify-end items-center gap-3 flex-wrap">
              <a href="{{ route('admin.news.edit', $item->id) }}"
                 class="text-blue-600 text-sm font-medium hover:underline">Edit</a>
              <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST"
                    onsubmit="return confirm('Hapus berita ini?')" class="contents">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-600 text-sm font-medium hover:underline">Hapus</button>
              </form>
            </div>
          </div>
        @empty
          <p class="text-center text-gray-500">Belum ada berita.</p>
        @endforelse

        <!-- Pagination Mobile -->
        <div class="mt-6">
          {{ $news->links() }}
        </div>
      </div>

      <!-- Desktop View -->
      <div class="hidden md:block overflow-x-auto">
        <table class="w-full text-sm border rounded-lg overflow-hidden">
          <thead class="bg-gray-100 text-left text-gray-800">
            <tr>
              <th class="p-3 border text-center">ID</th>
              <th class="p-3 border">Judul</th>
              <th class="p-3 border text-center">Kategori</th>
              <th class="p-3 border text-center">Gambar</th>
              <th class="p-3 border text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse($news as $item)
              <tr class="hover:bg-gray-50">
                <td class="p-3 border text-center">{{ $loop->iteration }}</td>
                <td class="p-3 border">{{ $item->title }}</td>
                <td class="p-3 border text-center">{{ $item->category->name ?? '-' }}</td>
                <td class="p-3 border text-center">
                  @if($item->image)
                    <img src="{{ asset('storage/' . $item->image) }}" class="mx-auto h-16 w-28 object-cover rounded shadow">
                  @else
                    <span class="text-gray-400 italic">Tidak ada</span>
                  @endif
                </td>
                <td class="p-3 border text-center">
                  <div class="flex justify-center items-center gap-3">
                    <a href="{{ route('admin.news.edit', $item->id) }}"
                       class="text-blue-600 text-sm font-medium hover:underline">Edit</a>
                    <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST"
                          onsubmit="return confirm('Hapus berita ini?')" class="contents">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="text-red-600 text-sm font-medium hover:underline">Hapus</button>
                    </form>
                  </div>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="5" class="text-center py-6 text-gray-500">Belum ada berita.</td>
              </tr>
            @endforelse
          </tbody>
        </table>

        <!-- Pagination Desktop -->
        <div class="mt-6">
          {{ $news->links() }}
        </div>
      </div>
    </div>
  </div>
</x-layout.admin-layout>