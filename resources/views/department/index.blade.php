<x-app-layout>
    <div class="container py-11 mx-auto sm:px-6 lg:px-8 ">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <a href="
                @if (Auth::user()->role === \App\Models\User::ROLE_STORE) {{ route('store.dashboard') }}
                @elseif (Auth::user()->role === \App\Models\User::ROLE_OFFICE)
                {{ route('office.dashboard') }}
                @elseif (Auth::user()->role === \App\Models\User::ROLE_WAREHOUSE)
                {{ route('warehouse.dashboard') }} @endif"
                    class="btn btn-outline text-black  hover:text-white">
                    Kembali
                </a>
                <form action="{{ route('department.search') }}" method="GET" class="my-6">
                    <input type="text" name="query" placeholder="Cari department" class="border rounded p-2">
                    <button type="submit" class="bg-blue-600 text-white rounded p-2 ml-2">Search</button>
                </form>
                @if (session('error'))
                    <div role="alert" class="alert alert-error mt-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>
                            {{ session('error') }}
                        </span>
                    </div>
                @else
                    <h2 class="text-xl font-semibold text-gray-800 "></h2>
                    <h2 class="text-xl font-semibold text-gray-800 ">List Departemen</h2>

                    <div class="grid grid-cols-3 mb-8 mt-3">
                        @foreach ($departments as $department)
                            <div class="card bg-white w-50 shadow-xl border border-black m-3">
                                <div class="card-body">
                                    <h2 class="card-title text-gray-700">{{ $department->name }}</h2>
                                    <p class="text-gray-700">{{ $department->description }}</p>
                                    <div class="card-actions justify-end">
                                        <a href="{{ route('department.show', $department->department_id) }}"
                                            class="btn btn-primary">Lihat Karyawan</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
