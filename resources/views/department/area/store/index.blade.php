{{-- <x-app-layout>
    <div class="container py-11 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden p-6">
            <h1>Posisi di Departemen: {{ $department->department_name }}</h1>

            <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($positionsAM as $position)
                <div  class="bg-white shadow-md rounded-md overflow-hidden border border-gray-300">
                    @if ($positionsAM->isEmpty())
                    <p class="text-gray-800">Tidak ada posisi AM yang tersedia di departemen ini.</p>
                    @else
                        <div class="p-5">
                            <h3 class="text-lg font-bold">{{ $position->position_name }}</h3>
                            <p>Kode: {{ $position->position_code }}</p>
                            <div class="flex justify-end items-center">
                                <a href="{{ route('position.coordinator', ['uuid' => $department->uuid,'positionName' => $position->position_name]) }}" class="text-blue-500 font-semibold hover:underline">Lihat Posisi</a>
                            </div>
                        </div>
                    @endif
                </div>
                    @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
 --}}

<x-app-layout>
    <div class="container py-11 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden p-6">
            <h1>Posisi di Departemen: {{ $department->department_name }}</h1>
            <div class="overflow-hidden">
                <table class="table w-full">
                    <thead>
                        <tr class="bg-red-100 text-base text-black">
                            <th>Kode Toko</th>
                            <th>Nama Toko</th>
                            <th>Nomor Toko</th>
                            <th>Area Manager</th>
                            <th>Area Coordinator</th>
                            <th >Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($stores as $store)
                        <tr class="hover:bg-red-50">
                            <td>{{ $store->toko_code }}</td>
                            <td>{{ $store->toko_name }}</td>
                            <td>{{ $store->no_hp }}</td>
                            <td>
                                <a href="{{ route('stores.position.users', ['tokoId' => $store->toko_id, 'positionName' => 'Area Manager']) }}">
                                    AM {{ $department->positions->where('position_name', 'Area Manager')->count()}}
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('stores.position.users', ['tokoId' => $store->toko_id, 'positionName' => 'Area Coordinator']) }}">
                                    AC {{ $department->positions->where('position_name', 'Area Coordinator')->count()}}
                                </a>
                            </td>
                            <td>
                                <a href="#" class="text-blue-500 hover:underline me-3">Update</a>
                                <a href="{{ route('stores.users', ['tokoId' => $store->toko_id]) }}" class="text-blue-500 hover:underline">
                                    Lihat
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td>Tidak ada toko</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>
