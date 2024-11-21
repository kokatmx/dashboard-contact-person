<x-app-layout>
    <div class="container mx-auto py-11 sm:px-6 lg:px-8">
        <!-- User List Table -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            {{-- @if (Auth::user()->area_id === $area->area_id)
                <a href="{{ route('area.details', $area->area_id) }}" class="btn btn-outline btn-neutral mb-4 hover:bg-neutral-700 hover:text-white">
                    Kembali
                </a>
            @else --}}
                <a href="{{ route('department.index') }}" class="btn btn-outline btn-neutral mb-4 hover:bg-neutral-700 hover:text-white">
                    Kembali
                </a>
            {{-- @endif --}}
            <br>
            <h1 class="text-3xl font-bold text-gray-800 mt-9 mb-5 inline-block  hover:underline underline-offset-2">
                <a href="{{ route('department.employees', $department->uuid) }}">
                    Departemen {{ $department->department_name }}
                </a>
            </h1>

            <!-- Search User Feature -->
            <form action="{{ route('user.search', $department->uuid) }}" method="GET" class="mb-6 flex">
                <input type="text" name="query" placeholder="Cari karyawan"
                    class=" md:w-1/4 lg:w-1/4  border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-indigo-500"
                    value="{{ request('query') }}">
                <input type="hidden" name="department_id" value="{{ $department->uuid }}">
                <button type="submit" class="ml-3 btn btn-primary text-white">
                    Search
                </button>
            </form>
            @if (session('success'))
                <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)" x-show="show"
                    x-transition:leave="transition ease-in duration-300" role="alert" class="alert alert-success ">

                    <!-- Success Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    <!-- Success Message -->
                    <span class="ml-2">{{ session('success') }}</span>
                </div>
            @endif

            @if (session('error'))
                <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)" x-show="show"
                    x-transition:leave="transition ease-in duration-300" role="alert" class="alert alert-error">

                    <!-- Error Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline mr-2" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <!-- Success Message -->
                    <span class="ml-2">{{ session('error') }}</span>
                </div>
            @endif

            <h2 class="text-xl font-semibold text-gray-800 mb-4 mt-10  ">Daftar Karyawan</h2>

            <!-- User Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto border-collapse border border-gray-200 rounded-lg">
                    <thead>
                        <tr class="bg-gray-100 text-gray-600">
                            <th class="px-4 py-2 border border-gray-300 text-left">Nomor</th>
                            <th class="px-4 py-2 border border-gray-300 text-left">Nama Karyawan</th>
                            <th class="px-4 py-2 border border-gray-300 text-left">Nomor HP</th>
                            <th class="px-4 py-2 border border-gray-300 text-left">Jabatan</th>
                            <th class="px-4 py-2 border border-gray-300 text-left">Divisi</th>
                            <th class="px-4 py-2 border border-gray-300 text-left">Grade</th>
                            <th class="px-4 py-2 border border-gray-300 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($users->isEmpty())
                            <tr>
                                <td colspan="6" class="text-center p-4 text-gray-500">
                                    Tidak ada karyawan ditemukan
                                </td>
                            </tr>
                        @else
                            @foreach ($usersWithUpdateStatus as $item)
                            <tr class="hover:bg-gray-50 transition duration-150">
                                <td class="border border-gray-300 px-4 py-2">
                                    {{ $loop->index + 1 + ($users->currentPage() - 1) * $users->perPage() }}
                                </td>
                                <td class="border border-gray-300 px-4 py-2">{{ $item['user']->name }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $item['user']->no_hp }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $item['user']->position->position_name }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $item['user']->division->division_name }}</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $item['user']->position->grade->max_grade }}</td>
                                <td class="border border-gray-300 px-4 py-2">
                                    @if ($item['canUpdate'])
                                        <a href="{{ route('user.edit', $item['user']->uuid) }}" class="text-blue-600 hover:underline">
                                            Update
                                        </a>
                                        @else
                                        <span class="text-gray-500">Tidak bisa update</span>
                                        @endif
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="mt-6 flex justify-between items-center">
                <p class="text-sm text-gray-700">
                    Menampilkan <span class="font-medium">{{ $users->firstItem() }}</span> sampai <span
                        class="font-medium">{{ $users->lastItem() }}</span> dari <span
                        class="font-medium">{{ $users->total() }}</span> hasil.
                </p>
                <div class="pagination-links join" data-theme="emerald">
                    @if ($users->previousPageUrl())
                        <a href="{{ $users->previousPageUrl() }}" class="pagination-link join-item btn btn-square">
                            <i class="fa-solid fa-angles-left"></i>
                        </a>
                    @endif

                    @for ($i = 1; $i <= $users->lastPage(); $i++)
                        <a href="{{ $users->url($i) }}"
                            class="pagination-link join-item btn btn-square {{ $i == $users->currentPage() ? 'active' : '' }}">{{ $i }}</a>
                    @endfor

                    @if ($users->nextPageUrl())
                        <a href="{{ $users->nextPageUrl() }}" class="pagination-link join-item btn btn-square">
                            <i class="fa-solid fa-angles-right"></i>
                        </a>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
