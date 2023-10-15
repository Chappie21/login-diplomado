<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login en Diplomado @yield('titulo')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-200">
    <header class="p-5 border bg-white shadow">
        <div class="container mx-auto flex justify-between">
            <h1 class="text-3xl font-black">Login en Diplomado</h1>

            <nav class="flex gap-2 items-center">
                <a href="{{ route('login') }}" class="font-bold uppercase text-gray-700 text-sm">Login</a>
                <a href="{{ route('register') }}" class="font-bold uppercase text-gray-700 text-sm">Registrarse</a>
            </nav>
        </div>
    </header>

    <main class="container mx-auto mt-8">
        <h2 class="font-black text-center text-3xl">
            @yield('titulo')
        </h2>

        @yield('contenido')
    </main>

    <footer class="mt-15 text-center p-5 text-gray-700 font-bold uppercase">
        Login Diplomado - Todos los derechos reservados {{ now()->year }}
    </footer>


</body>
</html>