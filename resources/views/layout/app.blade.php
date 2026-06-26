<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solu App - @yield('title', 'Elevating Business')</title>
    {{-- Import Tailwind CSS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-950 text-white flex flex-col min-h-screen">

    {{-- 1. Navbar --}}
    @include('components.navbar')

    @yield('content')

    {{-- 3. Footer --}}
    @include('components.footer')

</body>
</html>
