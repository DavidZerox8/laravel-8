<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 8</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
    <header class="shadow-lg">
        <div class="bg-emerald-900 py-2"></div>
        <nav class="bg-emerald-900 py-5">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" class="h-10 mx-auto">
            </a>
        </nav>
    </header>
    <main class="py-10">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </main>   
    <footer class="py-4 text-center">
        @auth            
            <a href="{{ url('dashboard') }}" class="tex-sm text-gray-800 underline">Dashboard</a>
        @else
        <a href="{{ url('login') }}" class="tex-sm text-gray-800 underline">Login</a>

        <a href="{{ url('register') }}" class="ml-4 tex-sm text-gray-800 underline">Registro</a>
        @endif

    </footer> 
</body>
</html>