 <!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>{{ $title ?? 'Sistem Informasi Pengelolaan Karyawan' }}</title>

     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.bunny.net">
     <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

     <!-- Scripts -->
     @vite(['resources/css/app.css', 'resources/js/app.js'])
     {{-- icons --}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

     {{-- mycss --}}
     <link rel="stylesheet" href="/css/styles.css">
     {{-- alpinejs --}}
     <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>

     {{-- icon header --}}
     <link rel="icon" type="image/x-icon" href="{{ asset('img/image.png') }}">

 </head>

 <style>
    body{
            background-image: url('img/background_web.jpg');
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
    }
 </style>

 <body class="font-sans antialiased">
     <div class="min-h-screen">
         @include('layouts.navigation')

         <!-- Page Heading -->
         @isset($header)
             <header class="bg-white shadow">
                 <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                     {{ $header }}
                 </div>
             </header>
         @endisset

         <!-- Page Content -->
         <main>
             {{ $slot }}
         </main>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 </body>

 </html>
