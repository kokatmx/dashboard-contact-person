<x-app-layout>
    <div class="container mx-auto py-11 sm:px-6 lg:px-8">
        <!-- User List Table -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <a href="{{ route('department.index') }}"
                class="btn btn-square btn btn-square-outline btn btn-square-neutral mb-4 hover:bg-neutral-700 hover:text-white">
                Kembali
            </a>
            <h1 class="text-3xl font-bold text-gray-800 my-5">
                Departemen {{ $department->department_name }}
            </h1>

            <!-- Search User Feature -->
            <form action="{{ route('user.search') }}" method="GET" class="mb-6 flex">
                <input type="text" name="query" placeholder="Cari karyawan"
                    class=" md:w-1/4 lg:w-1/4  border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-indigo-500"
                    value="{{ request('query') }}">
                <input type="hidden" name="department_id" value="{{ $department->department_id }}">
                <button type="submit" class="ml-3 bg-indigo-600 text-white rounded-lg px-4 py-2 hover:bg-indigo-700">
                    Search
                </button>
            </form>

            @if (session('error'))
                <div role="alert" class="alert alert-error p-4 mb-6 bg-red-100 text-red-700 rounded-lg shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline mr-2" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    {{ session('error') }}
                </div>
            @endif

            <h2 class="text-xl font-semibold text-gray-800 mb-4">Daftar Karyawan</h2>

            <!-- User Table -->
            <div class="overflow-x-auto">
                <table class="min-w-full table-auto border-collapse border border-gray-200 rounded-lg">
                    <thead>
                        <tr class="bg-gray-100 text-gray-600">
                            <th class="px-4 py-2 border border-gray-300 text-left">Nomor</th>
                            <th class="px-4 py-2 border border-gray-300 text-left">Nama Karyawan</th>
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
                            @foreach ($users as $user)
                                <tr class="hover:bg-gray-50 transition duration-150">
                                    <td class="border border-gray-300 px-4 py-2">
                                        {{ $loop->index + 1 + ($users->currentPage() - 1) * $users->perPage() }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $user->name }}</td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        {{ $user->grade->position->position_name }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $user->division->division_name }}
                                    </td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $user->grade->max_grade }}</td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        @if ($canUpdate)
                                            <a href="{{ route('user.edit', $user->user_id) }}"
                                                class="text-blue-600 hover:underline">
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
                            class="pagination-link {{ $i == $users->currentPage() ? 'active' : '' }} join-item btn btn-square">{{ $i }}</a>
                    @endfor

                    @if ($users->nextPageUrl())
                        <a href="{{ $users->nextPageUrl() }}" class="pagination-link join-item btn btn-square"><i
                                class="fa-solid fa-angles-right"></i></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
