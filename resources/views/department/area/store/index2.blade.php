<x-app-layout>
    <div class="container py-11 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <h1 class="mx-auto font-bold text-xl">{{ $positionAC->position_name }}</h1>
            <div class="overflow-x-auto rounded-lg p-4">
                <table class="table w-full">
                    <thead class="text-lg">
                        <tr class="bg-red-100">
                            <th class="text-left">Kode Toko</th>
                            <th class="text-left">Nama Toko</th>
                            <th class="text-left">Position ID</th>
                            <th class="text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($stores as $item)
                        <tr class="hover:bg-red-50">
                            <td>{{ $item->toko_name }}</td>
                            <td>{{ $item->toko_code }}</td>
                            <td>{{ $item->position->position_name }}</td>
                            <td><a href="{{ route('stores.user', ['tokoId' => $item->toko_id]) }}" class="text-blue-600 hover:underline">Lihat</a></td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center py-4 text-gray-500">
                                Tidak ada karyawan ditemukan.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
