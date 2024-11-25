<x-app-layout>
    <div class="max-w-lg mx-auto p-6 bg-gradient-to-br from-white to-gray-100 rounded-xl shadow-lg mt-10 border-t-4 border-red-600">

        <!-- Back Button -->
        <a href="{{ route('department.employees', $department->uuid) }}"
            class="flex items-center text-blue-600 hover:text-blue-800 font-semibold mb-10">
            <i class="fas fa-arrow-left mr-2"></i> Kembali
        </a>

        <!-- Form Header -->
        <h2 class="text-3xl font-extrabold text-red-600 mb-8 text-center">
            Edit Data Karyawan
        </h2>
        <p class="text-center text-gray-600 mb-6">
            Perbarui informasi karyawan untuk divisi dan jabatan tertentu.
        </p>

        <!-- Edit Form -->
        <form action="{{ route('user.update', $user->uuid) }}" method="POST" class="space-y-5">
            @csrf
            @method('PUT')

            <!-- Name Input -->
            <div>
                <label for="name" class="block text-gray-700 font-medium">Nama</label>
                <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}"
                    class="w-full border border-gray-300 rounded-lg p-3 bg-gray-100 cursor-not-allowed focus:outline-none"
                    disabled>
            </div>

            <!-- NoHP Input -->
            <div>
                <label for="no_hp" class="block text-gray-700 font-medium">No. HP</label>
                <input type="number" id="no_hp" name="no_hp" value="{{ old('no_hp', $user->no_hp) }}"
                    class="w-full border border-blue-500 rounded-lg p-3 focus:ring focus:ring-blue-300 text-3xl"
                    placeholder="Masukkan no HP" required>
                @error('no_hp')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Jabatan Input -->
            <div>
                <label for="position" class="block text-gray-700 font-medium">Jabatan</label>
                <input type="text" id="position" name="position" value="{{ $user->position->position_name }}"
                    class="w-full border border-gray-300 rounded-lg p-3 bg-gray-100 cursor-not-allowed focus:outline-none"
                    disabled>
            </div>

            <!-- Division Input -->
            <div>
                <label for="division" class="block text-gray-700 font-medium">Divisi</label>
                <input type="text" id="division" name="division" value="{{ $user->division->division_name }}"
                    class="w-full border border-gray-300 rounded-lg p-3 bg-gray-100 cursor-not-allowed focus:outline-none"
                    disabled>
            </div>

            <!-- Department Input -->
            <div>
                <label for="department" class="block text-gray-700 font-medium">Department</label>
                <input type="text" id="department" name="department" value="{{ $department->department_name }}"
                    class="w-full border border-gray-300 rounded-lg p-3 bg-gray-100 cursor-not-allowed focus:outline-none"
                    disabled>
            </div>

            <!-- Submit Button -->
            <div class="text-center mt-8">
                <button type="submit"
                    class="bg-red-600 text-white px-6 py-3 rounded-lg font-bold text-lg hover:bg-red-700 shadow-lg transform hover:scale-105 transition-transform">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
