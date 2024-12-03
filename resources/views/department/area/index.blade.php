<x-app-layout>
    <div class="container py-11 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden p-6">
            <h1>Posisi di Departemen: {{ $department->department_name }}</h1>

            <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($positionsAM as $position)
                <div  class="bg-white shadow-md rounded-md overflow-hidden border border-gray-300">
                    @if ($positionsAM->isEmpty())
                    <p class="text-gray-800">Tidak ada posisi AM yang tersedia di departemen ini.</p>
                    @else
                        <div class="p-5">
                            <h3 class="text-lg font-bold">{{ $position->position_name }}</h3>
                            <p>Kode: {{ $position->position_code }}</p>
                            <div class="flex justify-end items-center">
                                <a href="{{ route('position.coordinator', ['uuid' => $department->uuid,'positionName' => $position->position_name]) }}" class="text-blue-500 font-semibold hover:underline">Lihat Posisi</a>
                            </div>
                        </div>
                    @endif
                </div>
                    @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

