<x-app-layout>
    <div class="container py-11 mx-auto sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Welcome Card -->
            <div
                class="bg-red-500  text-black rounded-xl shadow-xl p-8 backdrop-blur-lg border border-gray-200">
                <h1 class="text-3xl font-bold">
                    Selamat datang, <span class="text-white">{{ Auth::user()->name }}</span>
                </h1>
                <div class="grid gap-4 mt-6">
                    <!-- Division Info -->
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4 border-l-4 border-blue-600">
                        <i class="fas fa-briefcase text-blue-600 text-2xl mr-4"></i>
                        <p class="text-lg font-medium">
                            Divisi: <span class="font-semibold">{{ Auth::user()->division->division_name }}</span>
                        </p>
                    </div>
                    <!-- Department Info -->
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4 border-l-4 border-yellow-400">
                        <i class="fas fa-building text-yellow-400 text-2xl mr-4"></i>
                        <p class="text-lg font-medium">
                            Department: <span class="font-semibold">{{ Auth::user()->department->department_name }}</span>
                        </p>
                    </div>
                    <!-- Position Info -->
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4 border-l-4 border-red-600">
                        <i class="fas fa-user-tie text-red-600 text-2xl mr-4"></i>
                        <p class="text-lg font-medium">
                            Jabatan: <span class="font-semibold">{{ Auth::user()->position->position_name }}</span>
                        </p>
                    </div>
                    <!-- Grade Info -->
                    <div class="flex items-center bg-white shadow-md rounded-lg p-4 border-l-4 border-gray-500">
                        <i class="fas fa-chart-line text-gray-500 text-2xl mr-4"></i>
                        <p class="text-lg font-medium">
                            Grade: <span class="font-semibold">{{ Auth::user()->position->grade->max_grade }}</span>
                        </p>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="{{ route('department.index') }}" class="btn btn-accent btn-lg shadow-md">
                        List Departemen
                    </a>
                </div>
            </div>

            <!-- Area Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
                @foreach ($areas as $area)
                    @php
                        $areaDetails = [
                            'Warehouse' => ['gradient' => 'from-blue-600 to-blue-400', 'icon' => 'fa-warehouse'],
                            'Store' => ['gradient' => 'from-yellow-500 to-yellow-300', 'icon' => 'fa-store'],
                            'Office' => ['gradient' => 'from-red-600 to-red-400', 'icon' => 'fa-building']
                        ][$area->area_name] ?? ['gradient' => 'from-gray-500 to-gray-400', 'icon' => 'fa-question-circle'];
                    @endphp
                    <div class="relative rounded-lg shadow-xl overflow-hidden transform transition-transform hover:scale-105">
                        <div
                            class="bg-gradient-to-br {{ $areaDetails['gradient'] }} p-6 h-full flex flex-col justify-between">
                            <div class="absolute top-4 right-4 text-4xl opacity-20">
                                <i class="fas {{ $areaDetails['icon'] }}"></i>
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold mb-2 text-white uppercase">
                                    {{ $area->area_name }}
                                </h2>
                                <p class="text-sm text-white opacity-80">
                                    Klik untuk melihat detail area ini.
                                </p>
                            </div>
                            <div class="mt-6">
                                <a href="{{ route('area.details', $area->area_name) }}"
                                    class="btn btn-outline btn-white">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
