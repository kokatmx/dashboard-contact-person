<x-guest-layout>
    <div class="flex items-center justify-center">
        <!-- Login Card -->
        <div class="w-full max-w-md bg-white shadow-lg rounded-lg overflow-hidden border-t-4 border-red-600">
            <!-- Header -->
            <div class="bg-red-600 text-white text-center py-4">
                <h1 class="text-2xl font-bold uppercase">Login Alfamart</h1>
                <p class="text-sm mt-1">Selamat datang kembali!</p>
            </div>

            <!-- Form -->
            <div class="p-6">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-medium">Email</label>
                        <input id="email" type="email" name="email" :value="old('email')" required autofocus
                            autocomplete="username"
                            class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-red-300 focus:outline-none">
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-600" />
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 font-medium">Password</label>
                        <input id="password" type="password" name="password" required autocomplete="current-password"
                            class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:ring focus:ring-red-300 focus:outline-none">
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-600" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center mt-4">
                        <input id="remember_me" type="checkbox" name="remember"
                            class="w-4 h-4 text-red-600 border-gray-300 rounded focus:ring focus:ring-red-300">
                        <label for="remember_me" class="ml-2 text-sm text-gray-700">Ingat Saya</label>
                    </div>

                    <!-- Actions -->
                    <div class="mt-6 flex items-center justify-between">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"
                                class="text-sm text-blue-600 hover:underline focus:outline-none">
                                Lupa Password?
                            </a>
                        @endif

                        <button type="submit"
                            class="bg-red-600 text-white py-2 px-4 rounded-lg hover:bg-red-700 focus:ring focus:ring-red-300 focus:outline-none">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
