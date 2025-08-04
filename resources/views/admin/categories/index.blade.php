<x-layout.admin-layout>
  <div>
    <div class="bg-white rounded-lg shadow p-6">

      <!-- Header -->
      <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-3 sm:gap-0">
        <h1 class="text-2xl font-bold">Daftar Kategori</h1>
        <a href="{{ route('admin.categories.create') }}"
           class="bg-yellow-300 hover:bg-yellow-400 text-black font-semibold px-5 py-2 rounded-lg transition text-sm sm:text-base">
          + Tambah Kategori
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
        @forelse ($categories as $category)
          <div class="border rounded-lg p-4 shadow-sm bg-gray-50">
            <h3 class="text-lg font-bold mb-2">{{ $category->name }}</h3>
            <div class="flex justify-end items-center gap-3">
              <a href="{{ route('admin.categories.edit', $category->id) }}"
                 class="text-blue-600 text-sm font-medium hover:underline">Edit</a>
              <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST"
                     onsubmit="return confirm('Menghapus kategori ini akan secara permanen menghapus semua berita yang terkait. Lanjutkan?')" class="contents">
                     @csrf @method('DELETE')
              <button type="submit" class="text-red-600 text-sm font-medium hover:underline">Hapus</button>
               </form>
            </div>
          </div>
        @empty
          <p class="text-center text-gray-500">Belum ada kategori.</p>
        @endforelse

        <!-- Pagination Mobile -->
        <div class="mt-6">
          {{ $categories->links() }}
        </div>
      </div>

      <!-- Desktop View -->
      <div class="hidden md:block overflow-x-auto">
        <table class="w-full text-sm border rounded-lg overflow-hidden">
          <thead class="bg-gray-100 text-left">
            <tr>
              <th class="p-3 border text-center">ID</th>
              <th class="p-3 border">Nama Kategori</th>
              <th class="p-3 border text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($categories as $category)
              <tr class="hover:bg-gray-50">
                <td class="p-3 border text-center">{{ $loop->iteration }}</td>
                <td class="p-3 border">{{ $category->name }}</td>
                <td class="p-3 border text-center">
                  <div class="flex justify-center items-center gap-3">
                    <a href="{{ route('admin.categories.edit', $category->id) }}"
                       class="text-blue-600 text-sm font-medium hover:underline">Edit</a>
                    <a href="#" onclick="deleteCategory(event, '{{ route('admin.categories.destroy', $category->id) }}')" 
   class="text-red-600 text-sm font-medium hover:underline">
   Hapus
</a>
                  </div>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="3" class="text-center py-6 text-gray-500">Belum ada kategori.</td>
              </tr>
            @endforelse
          </tbody>
        </table>

        <!-- Pagination Desktop -->
        <div class="mt-6">
          {{ $categories->links() }}
        </div>
      </div>

    </div>
  </div>
  @push('scripts')
<script>
function deleteCategory(e, url) {
    e.preventDefault();
    Swal.fire({
        title: 'Hapus Kategori?',
        text: 'Semua berita yang menggunakan kategori ini juga akan dihapus.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#aaa',
        confirmButtonText: 'Ya, hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            const form = document.createElement('form');
            form.action = url;
            form.method = 'POST';

            const token = document.createElement('input');
            token.name = '_token';
            token.value = '{{ csrf_token() }}';
            form.appendChild(token);

            const method = document.createElement('input');
            method.name = '_method';
            method.value = 'DELETE';
            form.appendChild(method);

            document.body.appendChild(form);
            form.submit();
        }
    });
}
</script>
@endpush
</x-layout.admin-layout>
