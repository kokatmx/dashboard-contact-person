<!DOCTYPE html>
<html lang="en" data-theme="synthwave">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.14.0/dist/full.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM+oY4D2a0W/9sohoZfiW9FJ8Z9j5l6MkPO6c0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    {{-- font --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <title>Sistem Informasi Pengelolaan Karyawan</title>
    <style>
        body {
            background-image: url('img/background_web.jpg');
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            font-family: 'Figtree';
        }

        .judul {
            text-shadow: 3px 4px 3px black;
        }
    </style>
</head>

<body class="min-h-screen flex flex-col">

    <!-- Hero Section -->
    <section class="hero flex items-center justify-center bg-cover bg-center min-h-screen text-white">
        <div class="container mx-auto text-center p-6">
            <h1 class="text-4xl md:text-6xl font-extrabold shadow-text judul">Dashboard Contact Person Karyawan</h1>
            <p class="text-lg md:text-xl font-medium mt-2 judul">Sistem Informasi Pengelolaan Contact Person Karyawan
                Alfamart</p>
            @php
                $user = Auth::user();
                $userDivision = $user->division->division_code ?? null; // Ambil kode divisi
                $userDept = $user->department->department_code ?? null; // Ambil kode departemen
                $userPosition = $user->position->position_code ?? null;
            @endphp
            @if (Route::has('login'))
                <div class="flex justify-center space-x-4 mt-10">
                    @auth
                        @if ($userDivision === 'O2222' && $userDept === 'O1900')
                            <a href="{{ route('warehouse.dashboard') }}" class="btn ">
                                <i class="fas fa-box mr-5"></i> Warehouse Dashboard
                            </a>
                        @elseif ($userDivision === 'O0000' && in_array($userDept, ['O1100', 'O1200', 'O9400']))
                            <a href="{{ route('store.dashboard') }}" class="btn ">
                                <i class="fas fa-store mr-5"></i> Store Dashboard
                            </a>
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
                            <a href="{{ route('office.dashboard') }}" class="btn ">
                                <i class="fas fa-building mr-5"></i> Office Dashboard
                            </a>
                        @endif
                    @else
                        <a href="{{ route('login') }}" class="btn btn-error btn-md ">
                            <i class="fas fa-sign-in-alt mr-5"></i> Log in
                        </a>
                    @endauth
                </div>
            @endif
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/daisyui@1.14.0/dist/full.js"></script>
</body>

</html>
