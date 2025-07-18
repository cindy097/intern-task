<x-layout.admin-layout>
  <div class="p-4">
    <div class="bg-white rounded-lg shadow p-6">

      <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Daftar Kategori</h1>
        <a href="{{ route('admin.categories.create') }}" class="bg-yellow-300 hover:bg-yellow-400 text-black font-semibold px-5 py-2 rounded-lg transition">
          + Tambah Kategori
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
              <th class="p-3 border text-center">Nama Kategori</th>
              <th class="p-3 border text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($categories as $category)
              <tr class="hover:bg-gray-50">
                <td class="p-3 border text-center">{{ $loop->iteration }}</td>
                <td class="p-3 border">{{ $category->name }}</td>
                <td class="p-3 border text-center">
                  <a href="{{ route('admin.categories.edit', $category->id) }}" class="text-blue-600 hover:underline font-medium">Edit</a>
                  <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="inline">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Yakin ingin menghapus kategori ini?')" class="text-red-600 hover:underline font-medium ml-3">Hapus</button>
                  </form>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="3" class="text-center py-6 text-gray-500">Belum ada kategori.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>

      <div class="mt-6">
        {{ $categories->links() }}
      </div>
    </div>
  </div>
</x-layout.admin-layout>
