<x-app-layout>
    <div class="container py-11 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                @php
                    $user = Auth::user();
                    $userDivision = $user->division->division_code ?? null;
                    $userDept = $user->department->department_code ?? null;
                    $userPosition = $user->position->position_code ?? null;
                @endphp

                <!-- Back Button -->
                <a href="
            @if ($userDivision === 'O2222' && $userDept === 'O1900') {{ route('warehouse.dashboard') }}
            @elseif ($userDivision === 'O0000' && in_array($userDept, ['O1100', 'O1200', 'O9400']))
                {{ route('store.dashboard') }}
            @elseif (in_array($userDivision, ['C0000', 'F0000', 'G0000', 'H0000', 'K0000', 'M0000', 'R0000', 'YY000']) &&
                    in_array($userDept, [
                        'C3100',
                        'F1500',
                        'F5100',
                        'G1600',
                        'H1800',
                        'H2600',
                        'K1300',
                        'M3200',
                        'R4300',
                        'R5800',
                        'YY002',
                        'YY004',
                    ]))
                {{ route('office.dashboard') }} @endif"
                    class="btn btn-outline text-black hover:text-white">
                    Kembali
                </a>

                <!-- Department Search Form -->
                <form action="{{ route('department.search') }}" method="GET" class="my-6">
                    <input type="text" name="query" placeholder="Cari department" value="{{ request('query') }}"
                        class="md:w-1/4 lg:w-1/4 border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-indigo-500">
                    <button type="submit" class="btn btn-primary btn-md text-white p-4 ml-3">Search</button>
                </form>

                <!-- Error Message -->
                @if (session('error'))
                    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 2000)" x-show="show"
                        x-transition:leave="transition ease-in duration-300" role="alert"
                        class="alert alert-error mt-5 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>{{ session('error') }}</span>
                    </div>
                @endif

                <h2 class="text-2xl font-semibold text-gray-800 mt-10  inline hover:underline underline-offset-2">
                    <a href="{{ route('area.details', ['area_id' => $area->area_id]) }}">List Departemen</a>
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:mt-3">
                    <!-- Departments in User's Division -->
                    @foreach ($departmentsInArea as $department)
                        <div
                            class="card card-normal bg-white shadow-lg border border-black rounded-lg overflow-hidden transition-transform transform hover:scale-105 m-3">
                            <div class="card-body p-5">
                                <h2 class="card-title text-lg font-semibold text-gray-800 mb-2">
                                    {{ $department->department_name }}</h2>
                                <p class="text-gray-600 mb-4">{{ $department->description }}</p>
                                <div class="card-actions flex justify-between items-center">
                                    <p class="text-gray-700 font-medium">Total Karyawan: <span
                                            class="font-bold">{{ $department->users_count }}</span></p>
                                    <a href="{{ route('department.employees', $department->uuid) }}"
                                        class="btn btn-primary btn-md">Lihat Karyawan</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
