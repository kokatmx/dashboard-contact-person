<x-app-layout>
    <div class="container py-11 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden p-6">
            <div class="flex justify-between">
                <h1 class="text-3xl font-bold text-black">
                    <a href="{{ route('department.area.stores.index', $department->uuid) }}" class="hover:underline">
                        Departemen {{ $department->department_name }}
                    </a>
                </h1>
                <a href="{{ route('department.index') }}" class="btn btn-outline hover:bg-blue-500 btn-sm">Kembali</a>
            </div>

            <form action="{{ route('department.area.stores.search', ['departmentUuid' => $department->uuid, 'departmentUuid' => $department->uuid]) }}" method="get"
                class="flex items-center my-6">
                <input type="text" id="search" name="search"
                    class="sm:w-1/2 md:w-1/3 lg:w-1/3 mr-2 px-3 py-2 text-gray-700 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                    placeholder="Masukkan kode toko atau nama toko">
                <button type="submit" class="btn btn-info btn-md">Cari</button>
            </form>

            <!-- Notifications -->
            <div class="fixed top-5 inset-x-0 md:inset-x-1/2 z-50 sm:w-full md:w-1/2 lg:w-1/3">
                @if (session('success'))
                    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)" x-show="show"
                        x-transition:leave="transition ease-in duration-300" class="alert alert-success mb-4 bg-green-500">
                        <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 shrink-0 stroke-current"
                        fill="none"
                        viewBox="0 0 24 24">
                        <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif

                @if (session('error'))
                    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)" x-show="show"
                        x-transition:leave="transition ease-in duration-300" class="alert alert-error mb-4 bg-red-500">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6 shrink-0 stroke-current"
                            fill="none"
                            viewBox="0 0 24 24">
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>{{ session('error') }}</span>
                    </div>
                @endif
            </div>

            <h1 class="text-2xl text-black font-medium mt-8 mb-4">
                <a href="{{ route('department.area.stores.index', $department->uuid) }}" class="hover:underline">
                    Daftar Toko
                </a>
            </h1>

            <div class="overflow-x-auto rounded-lg">
                <table class="table w-full border-collapse border border-gray-200">
                    <thead>
                        <tr class="bg-red-100 text-base text-black">
                            <th>Kode Toko</th>
                            <th>Nama Toko</th>
                            <th>Nomor Toko</th>
                            <th>Nama Area Manager</th>
                            <th>Nama Area Coordinator</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($stores as $store)
                            @if ($store->toko_code == '2MZ1')
                                @continue
                            @endif
                            <tr class="hover:bg-red-50">
                                <td>{{ $store->toko_code }}</td>
                                <td>{{ $store->toko_name }}</td>
                                <td>{{ $store->no_hp }}</td>
                                <td>
                                    @if ($store->getAreaManager())
                                        <a href="{{ route('department.area.stores.users.position', ['departmentUuid' => $department->uuid,'userName' => $store->getAreaManager()->name, 'tokoId' => $store->toko_id]) }}"
                                            class="hover:underline hover:text-blue-500">
                                            {{ $store->getAreaManager()->name }}
                                        </a>
                                    @else
                                    <p class="text-gray-500">Tidak ada karyawan</p>
                                    @endif
                                </td>
                                <td>
                                    @if ($store->getAreaCoordinator())
                                        <a href="{{ route('department.area.stores.users.position', ['departmentUuid' => $department->uuid,'userName' => $store->getAreaCoordinator()->name, 'tokoId' => $store->toko_id]) }}"
                                            class="hover:underline hover:text-blue-500">
                                            {{ $store->getAreaCoordinator()->name }}
                                        </a>
                                    @else
                                        <p class="text-gray-500">Tidak ada karyawan</p>
                                    @endif
                                </td>
                                <td class="flex items-center justify-center">
                                    @if (Auth::user()->position->position_name == 'Area Manager' || Auth::user()->position->position_name == 'Area Coordinator')
                                        <a href="{{ route('department.area.stores.edit', ['tokoId' => $store->toko_id, 'departmentUuid' => $department->uuid]) }}"
                                            class="text-blue-500 hover:underline">Update</a>
                                    @else
                                    {{-- <span class="text-gray-500">Hanya Area Manager & Area Coordinator dapat melakukan update</span> --}}
                                    <span class="text-gray-500 font-normal">Tidak bisa update</span>
                                    @endif
                                    <span class="text-black font-extrabold text-md mx-2">|</span>
                                    <a href="{{ route('department.area.stores.users.index', ['tokoId' => $store->toko_id, 'departmentUuid' => $department->uuid]) }}"
                                        class="text-blue-500 hover:underline">Lihat</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-gray-500 ">Tidak ada toko</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            <div class="mt-6 flex justify-between items-center">
                <p class="text-sm">
                    Menampilkan <span class="font-bold">{{ $stores->firstItem() }}</span> - <span
                        class="font-bold">{{ $stores->lastItem() }}</span> dari <span
                        class="font-bold">{{ $stores->total() }}</span> hasil.
                </p>
                <div class="join">
                    @if ($stores->previousPageUrl())
                        <a href="{{ $stores->previousPageUrl() }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-angle-left"></i>
                        </a>
                    @endif

                    @foreach (range(1, $stores->lastPage()) as $i)
                        <a href="{{ $stores->url($i) }}"
                            class="btn btn-sm {{ $i === $stores->currentPage() ? 'btn-primary' : 'btn-outline' }}">
                            {{ $i }}
                        </a>
                    @endforeach

                    @if ($stores->nextPageUrl())
                        <a href="{{ $stores->nextPageUrl() }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-angle-right"></i>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
