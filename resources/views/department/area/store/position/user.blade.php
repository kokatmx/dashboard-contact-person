<x-app-layout>
    <div class="container py-11 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden p-6">
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
                                        <a href="{{ route('user.edit', $user['user']->uuid) }}"
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
        </div>
    </div>
</x-app-layout>
