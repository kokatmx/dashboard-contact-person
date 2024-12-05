<x-app-layout>
    <div class="container py-11 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden p-6">
            <h1 class="mx-auto font-bold text-xl">Toko {{ $store->toko_name }}</h1>
            <div class="overflow-x-auto rounded-lg p-4">
                <table class="table w-full">
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
                        @forelse ($users as $storeUser)
                        <tr class="hover:bg-red-50">
                            {{-- <td>{{ $loop->index + 1 + ($storeUser->currentPage() - 1) * $storeUser->perPage() }}</td> --}}
                            <td>{{ $storeUser->name }}</td>
                            <td>{{ $storeUser->no_hp }}</td>
                            <td>{{ $store->toko_code }}</td>
                            <td>{{ $storeUser->position->position_name }}</td>
                            <td>{{ $storeUser->position->grade->max_grade }}</td>
                            <td>
                                @if ($storeUser['canUpdate'])
                                    <a href="{{ route('user.edit', $storeUser->uuid) }}" class="hover:underline text-blue-600">Update</a>
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
            <div class="mt-6 flex justify-between items-center">
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
            </div>
        </div>
    </div>
</x-app-layout>
