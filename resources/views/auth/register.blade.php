<x-layout.layout-auth title="Daftar | Tasty Food">
    <h2 class="text-2xl font-bold text-yellow-400 mb-2 text-center">Daftar</h2>
    <p class="text-slate-600 text-sm text-center mb-6">Buat akunmu untuk melanjutkan</p>

    <form action="{{ route('register') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="name" class="block text-sm font-semibold text-slate-700">Nama Lengkap</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required
              class="w-full mt-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-yellow-400"
              placeholder="Nama Lengkap">
            @error('name')
              <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="email" class="block text-sm font-semibold text-slate-700">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required
              class="w-full mt-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-yellow-400"
              placeholder="Email">
            @error('email')
              <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password" class="block text-sm font-semibold text-slate-700">Password</label>
            <input type="password" id="password" name="password" required
              class="w-full mt-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-yellow-400"
              placeholder="Password">
            @error('password')
              <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="password_confirmation" class="block text-sm font-semibold text-slate-700">Konfirmasi Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required
              class="w-full mt-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-yellow-400"
              placeholder="Konfirmasi Password">
        </div>

        <button type="submit"
          class="w-full mt-2 bg-yellow-300 hover:bg-yellow-400 text-white font-bold py-2 px-4 rounded">
          DAFTAR
        </button>
    </form>

    <p class="mt-4 text-sm text-slate-600 text-center">
        Sudah punya akun?
        <a href="{{ route('login') }}" class="text-yellow-400 font-semibold">Masuk</a>
    </p>
</x-layout.layout-auth>
