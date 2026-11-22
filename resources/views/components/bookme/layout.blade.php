<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bookme</title>
        <link rel="icon" type="image/x-icon" href="imgs/favico.png">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <style>
            :root {
                font-family: 'Inter', sans-serif;
            }

            body,
            html {
                scroll-behavior: smooth !important;
            }

            .pts {
                font-family: "PT Serif", serif;
            }

            .bg-gradiant {
                background-image: linear-gradient(rgba(255, 255, 255, 0), #fff), url("data:image/svg+xml,%3Csvg width='12' height='24' viewBox='0 0 12 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23d6d6d6' fill-opacity='0.62'%3E%3Cpath d='M2 0h2v12H2V0zm1 20c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM9 8c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zm-1 4h2v12H8V12z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            }
        </style>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <x-bookme.header/>
        <x-bookme.main>
            {{ $slot }}
        </x-bookme.main>
        <x-bookme.footer/>
    </body>
</html>