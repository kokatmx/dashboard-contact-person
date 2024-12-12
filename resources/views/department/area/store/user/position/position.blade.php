<x-app-layout>
    <div class="container py-11 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden p-6">
            <div class="mb-6 flex justify-end">
                    <a href="{{route('department.area.stores.index', ['departmentUuid' => $department->uuid])}}" class="btn btn-sm btn-outline hover:bg-blue-500">Kembali</a>
            </div>

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

            <div class="overflow-x-auto rounded-lg">
                <table class="table w-full border-collapse border-gray-500 ">
                    <thead class="text-base">
                        <tr class="bg-red-100 text-black text-left">
                            <th>Nama Karyawan</th>
                            <th>Nomor HP</th>
                            <th>Kode Toko</th>
                            <th>Jabatan</th>
                            <th>Grade</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($usersWithUpdateStatus as $user)
                            <tr class="hover:bg-red-50">
                                {{-- <td>{{ $loop->index + 1 + ($user->currentPage() - 1) * $user->perPage() }}</td> --}}
                                <td>{{ $user['user']->name }}</td>
                                <td>{{ $user['user']->no_hp }}</td>
                                <td>{{ $store->toko_code }}</td>
                                <td>{{ $user['user']->position->position_name }}</td>
                                <td>{{ $user['user']->position->grade->max_grade }}</td>
                                <td>
                                    @if ($user['canUpdate'])
                                        @if (url()->current() === route('department.area.stores.users.position', ['departmentUuid' => $user['user']->department->uuid, 'tokoId' => $store->toko_id, 'userName' => $user['user']->name]))
                                            <a href="{{ route('department.area.stores.users.position.edit', ['departmentUuid' => $user['user']->department->uuid, 'tokoId' => $store->toko_id, 'userName' => $user['user']->name]) }}"
                                                class="hover:underline text-blue-600">Update</a>
                                        @else
                                            <a href="{{ route('department.area.stores.users.edit', ['userUuid' => $user['user']->uuid, 'departmentUuid' => $user['user']->department->uuid, 'tokoId' => $store->toko_id]) }}"
                                                class="hover:underline text-blue-600">Update</a>
                                        @endif
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
        </div>
    </div>
</x-app-layout>
