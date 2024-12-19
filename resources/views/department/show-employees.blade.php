<x-app-layout>
    <div class="container py-11 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden p-6">
            <!-- Header -->
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-black">
                    <a href="{{ route('department.employees', $department->uuid) }}" class="hover:underline">
                        Departemen {{ $department->department_name }}
                    </a>
                </h1>
                <a href="{{ request()->has('area_name') === $area->area_name ? route('area.details', $area->area_name) : route('department.index') }}"
                    class="btn btn-sm btn-outline hover:bg-blue-500">
                    Kembali
                </a>
            </div>

            <!-- Search Form -->
            <form action="{{ route('department.employees.search', $department->uuid) }}" method="GET" class="flex items-center mb-6">
                <input type="text" name="query" placeholder="Cari karyawan"
                    class="input input-bordered input-primary w-1/2 mr-2" value="{{ request('query') }}">
                <input type="hidden" name="department_id" value="{{ $department->uuid }}">
                <button type="submit" class="btn bg-blue-500">Cari</button>
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
            <!-- Employee List Table -->
            <div class="overflow-x-auto rounded-lg">
                <table class="table w-full">
                    <thead>
                        <tr class="bg-red-100 text-black text-base">
                            {{-- <th class="text-left">#</th> --}}
                            <th class="text-left">Nama Karyawan</th>
                            <th class="text-left">Nomor HP</th>
                            <th class="text-left">Jabatan</th>
                            <th class="text-left">Divisi</th>
                            <th class="text-left">Grade</th>
                            <th class="text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($usersWithUpdateStatus as $item)
                            <tr class="hover:bg-red-50">
                                {{-- <td>{{ $loop->index + 1 + ($users->currentPage() - 1) * $users->perPage() }}</td> --}}
                                <td>{{ $item['user']->name }}</td>
                                <td>{{ $item['user']->no_hp }}</td>
                                <td>{{ $item['user']->position->position_name }}</td>
                                <td>{{ $item['user']->division->division_name }}</td>
                                <td>{{ $item['user']->position->grade->max_grade }}</td>
                                <td>
                                    @if ($item['canUpdate'])
                                        <a href="{{ route('department.employees.edit', ['departmentUuid' => optional($item['user']->department)->uuid,'userUuid'=>$item['user']->uuid]) }}"
                                            class="text-blue-600 hover:underline">
                                            Update
                                        </a>
                                    @else
                                        <span class="text-gray-500">Tidak bisa update</span>
                                    @endif
                                </td>
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

            <!-- Pagination -->
            <div class="mt-6 flex justify-between items-center">
                <p class="text-sm">
                    Menampilkan <span class="font-bold">{{ $users->firstItem() }}</span> - <span
                        class="font-bold">{{ $users->lastItem() }}</span> dari <span
                        class="font-bold">{{ $users->total() }}</span> hasil.
                </p>
                <div class="join">
                    @if ($users->previousPageUrl())
                        <a href="{{ $users->previousPageUrl() }}" class="btn btn-sm bg-blue-500">
                            <i class="fas fa-angle-left"></i>
                        </a>
                    @endif

                    @foreach (range(1, $users->lastPage()) as $i)
                        <a href="{{ $users->url($i) }}"
                            class="btn btn-sm {{ $i === $users->currentPage() ? 'bg-blue-500' : 'btn-outline' }}">
                            {{ $i }}
                        </a>
                    @endforeach

                    @if ($users->nextPageUrl())
                        <a href="{{ $users->nextPageUrl() }}" class="btn btn-sm bg-blue-500">
                            <i class="fas fa-angle-right"></i>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
