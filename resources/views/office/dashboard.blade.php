<x-app-layout>
    <div class="container mx-auto py-11 sm:px-6 lg:px-8 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="ps-6 pt-6">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        <a href="{{ route('department.index') }}" class="btn btn-outline text-blue-600 hover:text-white">
                            {{ __('Ke List Department') }}
                        </a>
                    </h2>
                </div>
                <div class="p-6 text-gray-900">
                    {{ __('Selamat datang ') }} <strong> {{ Auth::user()->name }}</strong>
                    <p>{{ __('Division kamu adalah ') }}
                        <strong>{{ Auth::user()->division->division_name }}</strong>
                    </p>
                    <p>{{ __('Department kamu adalah ') }}
                        <strong>{{ Auth::user()->department->department_name }}</strong>
                    </p>

                    <p>{{ __('Min grade kamu adalah ') }}
                        <strong>{{ Auth::user()->grade->min_grade }}</strong>
                    </p>
                    <p>{{ __('Max grade kamu adalah ') }}
                        <strong>{{ Auth::user()->grade->max_grade }}</strong>
                    </p>
                    <p>{{ __('Nama jabatan kamu adalah ') }}
                        <strong>{{ Auth::user()->grade->position->position_name }}</strong>
                    </p>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
