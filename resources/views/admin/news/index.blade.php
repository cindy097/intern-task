<x-layout.admin-layout>
  <div class="p-4">
    <div class="bg-white rounded-lg shadow p-6">
      <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Daftar Berita</h1>
        <a href="{{ route('admin.news.create') }}" class="bg-yellow-300 hover:bg-yellow-400 text-black font-semibold px-5 py-2 rounded-lg transition">
          + Tambah Berita
        </a>
      </div>

      @if(session('success'))
        <div class="bg-green-100 border border-green-300 text-green-700 p-3 rounded mb-6 text-sm">
          {{ session('success') }}
        </div>
      @endif

      <div class="overflow-x-auto">
        <table class="w-full table-auto text-sm border rounded-lg overflow-hidden">
          <thead class="bg-gray-100 text-left">
            <tr>
              <th class="p-3 border text-center">ID</th>
              <th class="p-3 border text-center">Judul</th>
              <th class="p-3 border text-center">Kategori</th>
              <th class="p-3 border text-center">Gambar</th>
              <th class="p-3 border text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($news as $item)
              <tr class="hover:bg-gray-50">
                <td class="p-3 border text-center text-center">{{ $loop->iteration }}</td>
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
                  <a href="{{ route('admin.news.edit', $item->id) }}" class="text-blue-600 hover:underline font-medium">Edit</a>
                  <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Hapus berita ini?')" class="text-red-600 hover:underline font-medium ml-3">Hapus</button>
                  </form>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="5" class="text-center py-6 text-gray-500">Belum ada berita.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>

      {{-- Optional: Pagination --}}
      {{-- <div class="mt-6">
        {{ $news->links() }}
      </div> --}}
    </div>
  </div>
</x-layout.admin-layout>
