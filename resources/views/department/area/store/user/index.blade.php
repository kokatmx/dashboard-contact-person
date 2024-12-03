<x-app-layout>
    <div class="container py-11 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <h1 class="mx-auto font-bold text-xl">Toko {{ $store->toko_name }}</h1>
            <div class="overflow-x-auto rounded-lg p-4">
                <table class="table w-full">
                    <thead class="text-lg">
                        <tr class="bg-red-100">
                            <th class="text-left">Nama Karyawan</th>
                            <th class="text-left">Nomor HP</th>
                            <th class="text-left">Kode Toko</th>
                            <th class="text-left">Jabatan</th>
                            <th class="text-left">Grade</th>
                            <th class="text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $storeUser)
                        <tr class="hover:bg-red-50">
                            <td>{{ $storeUser->name }}</td>
                            <td>{{ $storeUser->no_hp }}</td>
                            <td>{{ $store->toko_code }}</td>
                            <td>{{ $storeUser->position->position_name }}</td>
                            <td>{{ $storeUser->position->grade->max_grade }}</td>
                            <td>
                                @if ($storeUser['canUpdate'])
                                    <a href="{{ route('user.edit', $storeUser->uuid) }}" class="hover:underline text-blue-600">Update</a>
                                @else
                                    <span class="text-gray-500">Tidak bisa update</span>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center py-4 text-gray-500">
                                Tidak ada karyawan dstoreUserukan.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
