<x-app-layout>
    <div class="max-w-4xl mx-auto p-8 bg-white rounded-lg shadow-lg mt-10">
        <!-- Tombol kembali -->
        <a href="{{ route('department.show', $department->department_id) }}"
            class="text-blue-600 hover:underline mb-6 inline-block">
            Kembali ke Departemen
        </a>

        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Update User: {{ $user->name }}</h2>

        <form action="{{ route('user.update', $user->user_id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Input Nama -->
            <div>
                <label for="name" class="block text-lg font-medium text-gray-700 mb-2">Nama</label>
                <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}"
                    class="w-full border border-gray-300 rounded-lg p-3 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    placeholder="Masukkan nama" autofocus>
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit"
                    class="inline-flex items-center px-6 py-3 bg-blue-600 text-gray-800 font-medium rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition">
                    Update User
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
