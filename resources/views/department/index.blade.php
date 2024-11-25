<x-app-layout>
    <div class="container py-11 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="bg-gradient-to-r from-red-500 via-yellow-400 to-blue-500 text-white text-center py-6">
                <h1 class="text-3xl font-bold">Dashboard Departemen Alfamart</h1>
                <p class="mt-2 text-lg">Temukan departemen dan informasi karyawan dengan mudah!</p>
            </div>

            <div class="p-6 text-gray-900">
                @php
                    $user = Auth::user();
                    $userDivision = $user->division->division_code ?? null;
                    $userDept = $user->department->department_code ?? null;
                    $userPosition = $user->position->position_code ?? null;
                @endphp

                <!-- Back Button -->
                <a href="@if ($userDivision === 'O2222' && $userDept === 'O1900') {{ route('warehouse.dashboard') }}
                        @elseif ($userDivision === 'O0000' && in_array($userDept, ['O1100', 'O1200', 'O9400'])) {{ route('store.dashboard') }}
                        @elseif (in_array($userDivision, ['C0000', 'F0000', 'G0000', 'H0000', 'K0000', 'M0000', 'R0000', 'YY000']) &&
                                 in_array($userDept, ['C3100', 'F1500', 'F5100', 'G1600', 'H1800', 'H2600', 'K1300', 'M3200', 'R4300', 'R5800', 'YY002', 'YY004'])) {{ route('office.dashboard') }}
                        @endif"
                    class="inline-block bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition">
                    Kembali
                </a>

                <!-- Department Search Form -->
                <form action="{{ route('department.search') }}" method="GET" class="my-6 flex items-center gap-4">
                    <input type="text" name="query" placeholder="Cari department"
                        value="{{ request('query') }}"
                        class="w-1/2 border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-red-500">
                    <button type="submit" class="bg-blue-500 text-white px-6 py-3 rounded-md hover:bg-blue-600 transition">
                        Cari
                    </button>
                </form>

                <!-- Error Message -->
                @if (session('error'))
                    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)" x-show="show"
                        x-transition:leave="transition ease-in duration-300"
                        class="bg-red-500 text-white p-4 rounded-md mb-5">
                        <strong>Error:</strong> {{ session('error') }}
                    </div>
                @endif

                <!-- Departments Section -->
                <div class="mt-10">
                    <h2 class="text-xl font-semibold text-gray-800 mb-5"><a href="{{ route('department.index') }}">Daftar Departemen</a></h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- Departments in User's Division -->
                        @foreach ($departmentsInDivision as $department)
                            <div class="bg-white shadow-md rounded-md overflow-hidden border border-gray-300">
                                <div class="p-5">
                                    <h3 class="text-lg font-semibold text-red-500">{{ $department->department_name }}</h3>
                                    <p class="text-gray-600 mb-4">{{ $department->description }}</p>
                                    <div class="flex justify-between items-center">
                                        <p class="text-gray-700">Karyawan: <span class="font-bold">{{ $department->users_count }}</span></p>
                                        <a href="{{ route('department.employees', $department->uuid) }}"
                                            class="text-blue-500 font-semibold hover:underline">Lihat Detail</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <!-- Departments Outside User's Division -->
                        @foreach ($departmentsOutsideDivision as $department)
                            <div class="bg-white shadow-md rounded-md overflow-hidden border border-gray-300">
                                <div class="p-5">
                                    <h3 class="text-lg font-semibold text-red-500">{{ $department->department_name }}</h3>
                                    <p class="text-gray-600 mb-4">{{ $department->description }}</p>
                                    <div class="flex justify-between items-center">
                                        <p class="text-gray-700">Karyawan: <span class="font-bold">{{ $department->users_count }}</span></p>
                                        @if (strtolower($department->department_code) === 'O1200')
                                            <a href="{{ route('department.area', $department->uuid) }}"
                                                class="text-yellow-500 font-semibold hover:underline">Area Detail</a>
                                        @else
                                            <a href="{{ route('department.employees', $department->uuid) }}"
                                                class="text-blue-500 font-semibold hover:underline">Lihat Detail</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
