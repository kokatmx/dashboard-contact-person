<x-app-layout>
    <div class="container py-11 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden p-6">
            <div class="flex justify-between">
                <h1 class="text-black font-medium text-3xl">Departemen {{ $department->department_name }}</h1>
                <a href="{{ route('department.index') }}" class="btn btn-outline hover:bg-blue-500 btn-sm">Kembali</a>
            </div>
            <form action="" method="get" class="flex items-center my-6">
                <input type="text" id="search" name="search"
                    class="w-1/2 mr-2 px-3 py-2 text-gray-700 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Masukkan kode toko atau nama toko">
                <button type="submit" class="btn btn-info btn-md">Cari</button>
            </form>
            <div class="overflow-x-auto rounded-lg">
                <table class="table w-full border-collapse border border-gray-200">
                    <thead>
                        <tr class="bg-red-100 text-base text-black">
                            {{-- <th>#</th> --}}
                            <th>Kode Toko</th>
                            <th>Nama Toko</th>
                            <th>Nomor Toko</th>
                            <th>Nama Area Manager</th> {{-- yang memegang toko (user AM) --}}
                            <th>Nama Area Coordinator</th> {{-- yang memegang toko (user AC) --}}
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($stores as $store)
                            <tr class="hover:bg-red-50">
                                <td>{{ $store->toko_code }}</td>
                                <td>{{ $store->toko_name }}</td>
                                <td>{{ $store->no_hp }}</td>
                                <td>
                                    @if ($store->getAreaManager())
                                        <a href="{{ route('stores.position.users', ['userName' => $store->getAreaManager()->name, 'tokoId' => $store->toko_id]) }}"
                                            class="hover:underline hover:text-blue-500">
                                            {{ $store->getAreaManager()->name }}
                                        </a>
                                    @else
                                        <p class="text-gray-500">Tidak ada</p>
                                    @endif
                                </td>
                                <td>
                                    @if ($store->getAreaCoordinator())
                                        <a href="{{ route('stores.position.users', ['userName' => $store->getAreaCoordinator()->name, 'tokoId' => $store->toko_id]) }}"
                                            class="hover:underline hover:text-blue-500">
                                            {{ $store->getAreaCoordinator()->name }}
                                        </a>
                                    @else
                                        <p class="text-gray-500">Tidak ada</p>
                                    @endif
                                </td>
                                <td class="items-center">
                                    <a href="{{ route('stores.edit', ['tokoId' => $store->toko_id, 'uuid' => $department->uuid]) }}"
                                        class="text-blue-500 hover:underline pe-1 border-r-2 border-r-black ">Update</a>
                                    <a href="{{ route('stores.users', ['tokoId' => $store->toko_id]) }}"
                                        class="text-blue-500 hover:underline ps-1 ">Lihat</a>
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
            <!-- Pagination -->
            {{-- <div class="mt-6 flex justify-between items-center">
                <p class="text-sm">
                    Menampilkan <span class="font-bold">{{ $users->firstItem() }}</span> - <span
                        class="font-bold">{{ $users->lastItem() }}</span> dari <span
                        class="font-bold">{{ $users->total() }}</span> hasil.
                </p>
                <div class="join">
                    @if ($users->previousPageUrl())
                        <a href="{{ $users->previousPageUrl() }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-angle-left"></i>
                        </a>
                    @endif

                    @foreach (range(1, $users->lastPage()) as $i)
                        <a href="{{ $users->url($i) }}"
                            class="btn btn-sm {{ $i === $users->currentPage() ? 'btn-primary' : 'btn-outline' }}">
                            {{ $i }}
                        </a>
                    @endforeach

                    @if ($users->nextPageUrl())
                        <a href="{{ $users->nextPageUrl() }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-angle-right"></i>
                        </a>
                    @endif
                </div>
            </div> --}}
        </div>
    </div>
</x-app-layout>
