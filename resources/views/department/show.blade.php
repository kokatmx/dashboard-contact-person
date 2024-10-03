<x-app-layout>
    <div class="container mx-auto py-11  sm:px-6 lg:px-8">
        <!-- User List Table -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <a href="{{ route('department.index') }}" class="btn btn-outline btn-neutral  hover:text-white">
                Kembali
            </a>
            <h1 class="text-3xl font-bold text-gray-800 my-5">Departemen {{ $department->name }}</h1>
            @if (session('error'))
                <div role="alert" class="alert alert-error">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>
                        {{ session('error') }}
                    </span>
                </div>
            @endif
            <!-- search fitur -->
            <form action="{{ route('user.search') }}" method="GET" class="my-6">
                <input type="hidden" name="department_id" value="{{ $department->department_id }}">
                <input type="text" name="query" placeholder="Cari karyawan" class="border rounded p-2">
                <button type="submit" class="bg-blue-600 text-white rounded p-2 ml-2">Search</button>
            </form>

            <h2 class="text-xl font-semibold text-gray-800 mb-4">Daftar Karyawan</h2>
            <div class="overflow-x-auto">

                <table class="min-w-full table-auto border-collapse">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border border-gray-300 px-4 py-2 text-left text-gray-600">Nomor</th>
                            <th class="border border-gray-300 px-4 py-2 text-left text-gray-600">Nama</th>
                            <th class="border border-gray-300 px-4 py-2 text-left text-gray-600">Departemen</th>
                            <th class="border border-gray-300 px-4 py-2 text-left text-gray-600">Grade</th>
                            <th class="border border-gray-300 px-4 py-2 text-left text-gray-600">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($users->isEmpty())
                            <tr>
                                <td colspan="4" class="border border-gray-300 px-4 py-2 text-gray-800 text-center">No
                                    users found</td>
                            </tr>
                        @else
                            @foreach ($users as $user)
                                <tr class="hover:bg-gray-50">
                                    <td class="border border-gray-300 px-4 py-2 text-gray-800">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="border border-gray-300 px-4 py-2 text-gray-800">{{ $user->name }}
                                    </td>
                                    <td class="border border-gray-300 px-4 py-2 text-gray-800">
                                        {{ $user->department->name }}</td>
                                    <td class="border border-gray-300 px-4 py-2 text-gray-800">{{ $user->grade }}
                                    </td>
                                    <td class="border border-gray-300 px-4 py-2 text-gray-800">
                                        @if ($canUpdate)
                                            <a href="{{ route('user.edit', $user->user_id) }}"
                                                class="text-blue-600 hover:underline">Update</a>
                                        @else
                                            <span class="text-gray-500">Kamu tidak bisa update user ini</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
