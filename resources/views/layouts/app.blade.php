<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Comics</title>


    <!-- Styles -->
    @vite('resources/js/app.js')
    
</head>

<body>
    <header>
        <div class="bg-primary p-3"></div>
    </header>

    <main class="mt-5 mb-5">
        @yield('content')
    </main>

    <footer>
        <div class="bg-primary p-3"></div>
    </footer>

    
</body>

</html>