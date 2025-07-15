<x-layout.layout-auth>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <h2 class="text-2xl font-bold text-yellow-600 mb-2">Selamat Datang</h2>
        <p class="text-slate-600 mb-6">Masukkan email dan password untuk masuk</p>

        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-semibold text-slate-700">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}"
                   class="w-full mt-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-yellow-400"
                   placeholder="Email" required autofocus>
            @error('email')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block text-sm font-semibold text-slate-700">Password</label>
            <input type="password" name="password" id="password"
                   class="w-full mt-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-yellow-400"
                   placeholder="Password" required>
            @error('password')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center">
    <input type="checkbox" name="remember" id="remember" class="mr-2">
    <label for="remember" class="text-sm text-slate-700">Ingat saya</label>
        </div>

        <!-- Error umum (misalnya kombinasi email & password salah) -->
        @if (session('error'))
            <p class="text-sm text-red-600 mt-1">{{ session('error') }}</p>
        @endif

        <button type="submit"
                class="w-full mt-4 bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">
            MASUK
        </button>

        <p class="mt-4 text-sm text-slate-600">
            Belum punya akun?
            <a href="{{ route('register') }}" class="text-yellow-600 font-semibold">Daftar</a>
        </p>
    </form>
</x-layout.layout-auth>
