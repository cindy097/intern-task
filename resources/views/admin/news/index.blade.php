<x-layout.admin-layout>
  <div class="p-4">
    <div class="flex justify-between items-center mb-4">
      <h1 class="text-2xl font-bold">Daftar Berita</h1>
      <a href="{{ route('admin.news.create') }}" class="bg-amber-300 px-4 py-2 rounded hover:bg-amber-400 font-bold">+ Tambah Berita</a>
    </div>

    @if(session('success'))
      <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
        {{ session('success') }}
      </div>
    @endif

    <table class="w-full table-auto border mt-4">
      <thead class="bg-gray-100">
        <tr>
          <th class="border p-2">#</th>
          <th class="border p-2">Judul</th>
          <th class="border p-2">Kategori</th>
          <th class="border p-2">Gambar</th>
          <th class="border p-2">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($news as $item)
          <tr>
            <td class="border p-2 text-center">{{ $loop->iteration }}</td>
            <td class="border p-2">{{ $item->title }}</td>
            <td class="border p-2">{{ $item->category->name ?? '-' }}</td>
            <td class="border p-2 text-center">
              @if($item->image)
                <img src="{{ asset('storage/' . $item->image) }}" class="w-16 h-10 object-cover mx-auto rounded">
              @else
                -
              @endif
            </td>
            <td class="border p-2 text-center">
              <a href="{{ route('admin.news.edit', $item->id) }}" class="text-blue-500 hover:underline">Edit</a>
              <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Hapus berita ini?')" class="text-red-500 ml-2 hover:underline">Hapus</button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="5" class="text-center py-4">Belum ada berita.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</x-layout.admin-layout>
