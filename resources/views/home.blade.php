<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sistem Informasi Pengelolaan Karyawan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Satisfy&display=swap"
        rel="stylesheet">
    <style>
        body {
            background-image: url('img/background_web.jpg');
            background-attachment: cover;
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            box-sizing: border-box;
            font-family: "Open Sans", "Helvetica Neue", Arial, Helvetica, sans-serif;
        }

        .navbar {
            background-color: transparent;
        }

        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            color: white;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
        }

        .hero p {
            font-size: 1.25rem;
            margin-bottom: 2rem;
        }

        .content-header {
            /* background-color: rgba(255, 255, 255, .6); */
        }

        .btn-custom {
            background-color: #00c8ff;
            border: none;
            padding: 0.75rem 1.5rem;
            color: white;
            font-size: 1rem;
            border-radius: 50px;
            transition: background-color 0.3s;
        }

        .btn-custom:hover {
            background-color: #009ac8;
        }

        .navbar .nav-link {
            color: white;
            font-weight: 500;
        }

        .navbar .nav-link:hover {
            color: #00c8ff;
        }

        /* Responsiveness adjustments */
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.1rem;
            }
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 1.75rem;
            }

            .hero p {
                font-size: 0.9rem;
            }

            .btn-custom {
                padding: 0.5rem 1rem;
            }
        }
    </style>
</head>

<body>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container text-center">
            <div class="content-header">
                <h1>Dashboard Contact Person</h1>
                @php
                    $user = Auth::user();
                    $userDivision = $user->division->division_code ?? null; // Ambil kode divisi
                    $userDept = $user->department->department_code ?? null; // Ambil kode departemen
                    $userPosition = $user->position->position_code ?? null;
                @endphp
                @if (Route::has('login'))
                    <div class="d-flex justify-content-center mt-4">
                        @auth
                            @if ($userDivision === 'O2222' && $userDept === 'O1900')
                                <!-- Tombol untuk Admin Dashboard -->
                                <a href="{{ route('warehouse.dashboard') }}" class="btn btn-primary me-2">
                                    Warehouse Dashboard
                                </a>
                            @elseif ($userDivision === 'O0000' && in_array($userDept, ['O1100', 'O1200', 'O9400']))
                                <!-- Tombol untuk User Dashboard -->
                                <a href="{{ route('Store.dashboard') }}" class="btn btn-primary me-2">
                                    Store Dashboard
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
                                <!-- Tombol untuk User Dashboard -->
                                <a href="{{ route('office.dashboard') }}" class="btn btn-primary me-2">
                                    Office Dashboard
                                </a>
                            @endif
                        @else
                            <!-- Tombol untuk Login -->
                            <a href="{{ route('login') }}" class="btn btn-outline-light me-2">
                                Log in
                            </a>
                        @endauth
                    </div>
                @endif
            </div>

        </div>
    </section>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
