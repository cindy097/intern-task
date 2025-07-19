<x-layout.admin-layout>
  <div class="p-4">
    <div class="bg-white rounded-lg shadow p-6">
      <h1 class="text-2xl font-bold mb-6">Pesan Masuk</h1>

      {{-- Mobile View --}}
      <div class="space-y-4 md:hidden">
        @forelse ($messages as $message)
          <div class="border rounded-lg p-4 bg-gray-50 shadow-sm">
            <div class="mb-2">
              <p class="font-semibold">Nama:</p>
              <p class="text-sm text-gray-700">{{ $message->name }}</p>
            </div>
            <div class="mb-2">
              <p class="font-semibold">Email:</p>
              <p class="text-sm text-gray-700">{{ $message->email }}</p>
            </div>
            <div class="mb-2">
              <p class="font-semibold">Subjek:</p>
              <p class="text-sm text-gray-700">{{ $message->subject }}</p>
            </div>
            <div class="mb-3">
              <p class="font-semibold">Pesan:</p>
              <p class="text-sm text-gray-700">{{ $message->message }}</p>
            </div>
            <div class="flex justify-end">
              <form action="{{ route('admin.messages.destroy', $message->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus pesan ini?')">
                @csrf @method('DELETE')
                <button class="text-red-600 hover:underline font-medium text-sm">Hapus</button>
              </form>
            </div>
          </div>
        @empty
          <p class="text-center text-gray-500">Belum ada pesan masuk.</p>
        @endforelse

        <div class="mt-6">
          {{ $messages->links() }}
        </div>
      </div>

      {{-- Desktop View --}}
      <div class="hidden md:block overflow-x-auto">
        <table class="w-full table-auto text-sm border rounded-lg overflow-hidden">
          <thead class="bg-gray-100 text-left">
            <tr>
              <th class="p-3 border text-center">Nama</th>
              <th class="p-3 border text-center">Email</th>
              <th class="p-3 border text-center">Subjek</th>
              <th class="p-3 border text-center">Pesan</th>
              <th class="p-3 border text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($messages as $message)
              <tr class="hover:bg-gray-50">
                <td class="p-3 border">{{ $message->name }}</td>
                <td class="p-3 border">{{ $message->email }}</td>
                <td class="p-3 border">{{ $message->subject }}</td>
                <td class="p-3 border">{{ $message->message }}</td>
                <td class="p-3 border text-center">
                  <form action="{{ route('admin.messages.destroy', $message->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus pesan ini?')">
                    @csrf @method('DELETE')
                    <button class="text-red-600 hover:underline font-medium text-sm">Hapus</button>
                  </form>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="5" class="text-center py-6 text-gray-500">Belum ada pesan masuk.</td>
              </tr>
            @endforelse
          </tbody>
        </table>

        <div class="mt-6">
          {{ $messages->links() }}
        </div>
      </div>
    </div>
  </div>
</x-layout.admin-layout>
