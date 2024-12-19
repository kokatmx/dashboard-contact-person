<x-app-layout>
    <div class="container py-11 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden p-6">
            <div class="flex justify-between mb-4">
                <h1 class="font-bold text-xl">Toko {{ $store->toko_name }}</h1>
                <a href="{{ route('department.area.stores.index', ['departmentUuid' => $department->uuid]) }}" class="btn btn-sm btn-outline hover:bg-blue-600">Kembali</a>
            </div>

            <form action="{{ route('department.area.stores.users.search', ['departmentUuid' => $department->uuid,'tokoId' => $store->toko_id]) }}" method="get"
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

            @if (session('error'))
                <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)" x-show="show"
                    x-transition:leave="transition ease-in duration-300" class="alert alert-error mb-4">
                    <span>{{ session('error') }}</span>
                </div>
            @endif

            <div class="overflow-x-auto rounded-lg">
                <table class="table w-full border-collapse border border-gray-200">
                    <thead class="text-base">
                        <tr class="bg-red-100 text-black text-left">
                            {{-- <th>#</th> --}}
                            <th>Nama Karyawan</th>
                            <th>Nomor HP</th>
                            <th>Kode Toko</th>
                            <th>Departemen</th>
                            <th>Divisi</th>
                            <th>Jabatan</th>
                            <th>Grade</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($usersWithUpdateStatus as $storeUser)
                            <tr class="hover:bg-red-50">
                                {{-- <td>{{ $loop->index + 1 + ($storeUser['user']->currentPage() - 1) * $storeUser['user']->perPage() }} --}}
                                </td>
                                <td>{{ $storeUser['user']->name }}</td>
                                <td>{{ $storeUser['user']->no_hp }}</td>
                                <td>{{ $store->toko_code }}</td>
                                <td>{{ $storeUser['user']->department->department_name }}</td>
                                <td>{{ $storeUser['user']->division->division_name }}</td>
                                <td>{{ $storeUser['user']->position->position_name }}</td>
                                <td>{{ $storeUser['user']->position->grade->max_grade }}</td>
                                <td>
                                    @if ($storeUser['canUpdate'])
                                        <a href="{{ route('department.area.stores.users.edit', ['departmentUuid' => optional($storeUser['user']->department)->uuid,'userUuid'=>$storeUser['user']->uuid, 'tokoId' => $store->toko_id]) }}"
                                            class="hover:underline text-blue-600">Update</a>
                                    @else
                                        <span class="text-gray-500">Tidak bisa update</span>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-4 text-gray-500">
                                    Tidak ada karyawan.
                                </td>
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
            {{-- <div class="mt-4">
                {{ $users->onEachSide(1)->links('vendor.pagination.tailwind') }}
            </div> --}}

            <!-- Pagination -->
            <div class="mt-6 flex justify-between items-center">
                <p class="text-sm">
                    Menampilkan <span class="font-bold">{{ $users->firstItem() }}</span> - <span
                        class="font-bold">{{ $users->lastItem() }}</span> dari <span
                        class="font-bold">{{ $users->total() }}</span> hasil.
                </p>
                <div class="join">
                    {{-- Tombol sebelumnya --}}
                    @if ($users->onFirstPage())
                        <button class="btn btn-sm btn-disabled"><i class="fas fa-angle-left"></i></button>
                    @else
                        <a href="{{ $users->previousPageUrl() }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-angle-left"></i>
                        </a>
                    @endif

                    {{-- Tombol halaman --}}
                    @php
                        $currentPage = $users->currentPage();
                        $lastPage = $users->lastPage();
                        $range = 2; // Jumlah halaman di sekitar halaman aktif
                    @endphp

                    {{-- Halaman pertama --}}
                    @if ($currentPage > $range + 1)
                        <a href="{{ $users->url(1) }}" class="btn btn-sm btn-outline">1</a>
                        <span class="btn btn-sm btn-disabled">...</span>
                    @endif

                    {{-- Halaman di sekitar halaman aktif --}}
                    @for ($i = max(1, $currentPage - $range); $i <= min($lastPage, $currentPage + $range); $i++)
                        <a href="{{ $users->url($i) }}"
                            class="btn btn-sm {{ $i === $currentPage ? 'btn-primary' : 'btn-outline' }}">
                            {{ $i }}
                        </a>
                    @endfor

                    {{-- Halaman terakhir --}}
                    @if ($currentPage < $lastPage - $range)
                        <span class="btn btn-sm btn-disabled">...</span>
                        <a href="{{ $users->url($lastPage) }}" class="btn btn-sm btn-outline">{{ $lastPage }}</a>
                    @endif

                    {{-- Tombol berikutnya --}}
                    @if ($users->hasMorePages())
                        <a href="{{ $users->nextPageUrl() }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-angle-right"></i>
                        </a>
                    @else
                        <button class="btn btn-sm btn-disabled"><i class="fas fa-angle-right"></i></button>
                    @endif
                </div>
            </div>


        </div>
    </div>
</x-app-layout>
