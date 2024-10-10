<x-app-layout>
    <div class="max-w-lg mx-auto p-6 bg-white rounded-lg shadow-lg mt-10 border border-gray-300">

        <!-- Back Button -->
        <a href="{{ route('department.employees', $department->uuid) }}" class="btn btn-outline mb-10">
            {{-- ← Kembali --}}
            Kembali
        </a>

        <!-- Form Header -->
        <h2 class="text-2xl font-semibold text-gray-700 mb-6 text-left">Edit Karyawan {{ $user->name }}</h2>

        <!-- Edit Form -->
        <form action="{{ route('user.update', $user->uuid) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Name Input -->
            <div class="mb-4">
                <label for="name" class="block text-gray-600 font-medium">Nama</label>
                <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}"
                    class="w-full border border-gray-300 rounded p-3 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Masukkan nama" autofocus>
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Division Input (Disabled) -->
            <div class="mb-4">
                <label for="division" class="block text-gray-600 font-medium">Divisi</label>
                <input type="text" id="division" name="division" value="{{ $user->division->division_name }}"
                    class="w-full border border-gray-300 rounded p-3 bg-gray-100 cursor-not-allowed" disabled>
            </div>
            <!-- Department Input (Disabled) -->
            <div class="mb-4">
                <label for="department" class="block text-gray-600 font-medium">Department</label>
                <input type="text" id="department" name="department" value="{{ $department->department_name }}"
                    class="w-full border border-gray-300 rounded p-3 bg-gray-100 cursor-not-allowed" disabled>
            </div>

            <!-- Submit Button -->
            <div class="text-right">
                <button type="submit"
                    class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700 transition-colors">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
