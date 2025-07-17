<x-layout.admin-layout>
  <div class="p-4">
    <h1 class="text-2xl font-bold mb-4">Daftar Kategori</h1>

    <a href="{{ route('admin.categories.create') }}" class="font-bold bg-amber-300 px-4 py-2 rounded hover:bg-amber-500">+ Tambah Kategori</a>

    <table class="w-full mt-6 table-auto border">
      <thead class="bg-gray-100">
        <tr>
          <th class="border p-2">ID</th>
          <th class="border p-2">Nama</th>
          <th class="border p-2">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($categories as $category)
          <tr>
            <td class="border p-2 text-center">{{ $category->id }}</td>
            <td class="border p-2">{{ $category->name }}</td>
            <td class="border p-2 text-center">
              <a href="{{ route('admin.categories.edit', $category->id) }}" class="text-blue-500 hover:underline">Edit</a>

              <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('Yakin ingin menghapus?')" class="text-red-500 ml-2 hover:underline">Hapus</button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="3" class="text-center py-4">Belum ada kategori.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</x-layout.admin-layout>
