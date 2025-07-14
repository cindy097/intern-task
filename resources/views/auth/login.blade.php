<x-layouts.auth>
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="bg-white shadow-lg rounded-2xl w-full max-w-md p-8">
            <h2 class="text-2xl font-bold text-yellow-600 text-center mb-6">Login Admin</h2>

            @if(session('error'))
                <div class="bg-red-100 text-red-600 p-3 rounded mb-4 text-sm">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ url('/login') }}" method="POST" class="space-y-5">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" name="email" id="email" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none" />
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input type="password" name="password" id="password" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-yellow-400 focus:outline-none" />
                </div>

                <button type="submit"
                    class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 rounded-lg transition duration-200">
                    Login
                </button>
            </form>

            <div class="text-center mt-5 text-sm text-gray-600">
                Belum punya akun?
                <a href="{{ route('register') }}" class="text-yellow-600 font-semibold hover:underline">Daftar di sini</a>
            </div>
        </div>
    </div>
</x-layouts.auth>
