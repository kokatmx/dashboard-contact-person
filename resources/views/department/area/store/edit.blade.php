<x-app-layout>
    <div
        class="max-w-lg mx-auto p-6 bg-gradient-to-br from-white to-gray-100 rounded-xl shadow-lg mt-10 border-t-4 border-red-600">

        <!-- Back Button -->
        <a href="{{ route('department.stores', ['uuid' => $department->uuid]) }}"
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

        <form action="{{ route('stores.update', ['tokoId' => $store->toko_id, 'uuid' => $department->uuid]) }}"
            method="POST" class="space-y-5">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="toko_code" class="block text-sm font-medium text-gray-700">Nama Toko</label>
                <input type="text" name="toko_code" id="toko_code" value="{{ old('toko_code', $store->toko_code) }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm bg-gray-200 text-gray-600 sm:text-sm cursor-not-allowed"
                    disabled>
                @error('toko_code')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="toko_name" class="block text-sm font-medium text-gray-700">Nama Toko</label>
                <input type="text" name="toko_name" id="toko_name" value="{{ old('toko_name', $store->toko_name) }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm bg-gray-200 text-gray-600 sm:text-sm cursor-not-allowed"
                    disabled>
                @error('toko_name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="no_hp" class="block text-lg font-medium text-gray-700">Nomor HP</label>
                <input type="text" name="no_hp" id="no_hp" value="{{ old('no_hp', $store->no_hp) }}"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm md:text-lg"
                    required>
                @error('no_hp')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-center items-center">
                <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
        </form>
    </div>
</x-app-layout>
