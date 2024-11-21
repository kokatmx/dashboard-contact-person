<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-red-500 text-white shadow-md rounded-lg border border-y-black">
                    <h1 class="text-2xl font-bold text-white mb-4">
                        {{ __('Selamat datang, ') }}
                        <span class="text-yellow-400">{{ Auth::user()->name }}</span>
                    </h1>
                    <div class="bg-white p-4 rounded-lg shadow-inner border-l-4 border-blue-600">
                        <p class="text-lg text-gray-900">
                            {{ __('Divisi ') }}
                            <span class="font-semibold ">{{ Auth::user()->division->division_name }}</span>
                        </p>
                    </div>

                    <div class="bg-white p-4 mt-4 rounded-lg shadow-inner border-l-4 border-yellow-400">
                        <p class="text-lg text-gray-900">
                            {{ __('Department ') }}
                            <span class="font-semibold ">{{ Auth::user()->department->department_name }}</span>
                        </p>
                    </div>

                    <div class="bg-white p-4 mt-4 rounded-lg shadow-inner border-l-4 border-red-600">
                        <p class="text-lg text-gray-900">
                            {{ __('Jabatan ') }}
                            <span class="font-semibold ">{{ Auth::user()->grade->position->position_name }}</span>
                        </p>
                    </div>
                    <div class="bg-white p-4 mt-4 rounded-lg shadow-inner border-l-4 ">
                        <p class="text-lg text-gray-900">
                            {{ __('Grade ') }}
                            <span class="font-semibold">{{ Auth::user()->grade->max_grade }}</span>
                        </p>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('department.index') }}"
                            class="inline-block bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg shadow">
                            {{ __('List Departemen') }}
                        </a>
                    </div>
                </div>

                <<<<<<< HEAD <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 my-6 mx-3">
                    <div
                        class="card card-normal bg-blue-600 shadow-lg border border-black rounded-lg overflow-hidden transition-transform transform hover:scale-105 m-3">
                        <div class="card-body p-5">
                            <i class="fa-solid fa-warehouse text-3xl"></i>
                            <h2 class="card-title text-lg font-semibold text-gray-800 mb-2">
                                Divisi</h2>

                            <p class="text-black mb-4">Total Divisi Yang Ada <br>
                                <strong class="text-2xl  text-black">{{ $totalDivisions }}</strong>
                            </p>
                        </div>
                    </div>
                    <div
                        class="card card-normal bg-yellow-400 shadow-lg border border-black rounded-lg overflow-hidden transition-transform transform hover:scale-105 m-3">
                        <div class="card-body p-5">
                            <i class="fa-solid fa-store text-3xl"></i>
                            <h2 class="card-title text-lg font-semibold text-gray-800 mb-2">
                                Departemen</h2>
                            <p class="text-black mb-4">Total departemen yang ada<br> <strong
                                    class="text-2xl  text-black">{{ $totalDepartments }}</strong></p>
                        </div>
                    </div>
                    <div
                        class="card card-normal bg-red-600 shadow-lg border border-black rounded-lg overflow-hidden transition-transform transform hover:scale-105 m-3">
                        <div class="card-body p-5">
                            <i class="fa-solid fa-office text-3xl"></i>
                            <h2 class="card-title text-lg font-semibold text-gray-800 mb-2">
                                Karyawan</h2>
                            <p class="text-black mb-4">Total Karyawan Yang Ada <br> <strong
                                    class="text-2xl text-black">{{ $totalUsers }}</strong></p>
                        </div>
                    </div>
            </div>
            =======
            {{-- area --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 my-6 mx-3">
                @foreach ($areas as $area)
                    @php
                        // Menentukan warna dan ikon berdasarkan area_name
                        $areaDetails = [
                            'Warehouse' => ['color' => 'blue-600', 'icon' => 'fa-sitemap'],
                            'Store' => ['color' => 'yellow-400', 'icon' => 'fa-store'],
                            'Office' => ['color' => 'red-600', 'icon' => 'fa-building'],
                        ][$area->area_name] ?? ['color' => 'gray-500', 'icon' => 'fa-question-circle'];
                    @endphp
                    <div
                        class="card card-normal bg-{{ $areaDetails['color'] }} shadow-lg border border-black rounded-lg overflow-hidden transition-transform transform hover:scale-105 m-3">
                        <div class="card-body p-5">
                            <div class="mb-4">
                                <i class="fas {{ $areaDetails['icon'] }} text-3xl"></i>
                            </div>
                            <h2 class="card-title text-lg font-semibold text-gray-800 mb-2 uppercase">
                                {{ $area->area_name }}
                            </h2>
                            <div class="mt-4">
                                <a href="{{ route('area.details', $area->area_id) }}"
                                    class="btn btn-sm btn-outline btn-white">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            >>>>>>> dev
        </div>
    </div>
    </div>
</x-app-layout>
