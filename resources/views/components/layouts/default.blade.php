<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-900">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mywebsite</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="h-full">
    <header>
        @yield('header')
    </header>
    <main>
        <x-layouts.sidebar />
        <div class="p-4 sm:ml-64">
            <div class="p-4 border-1 border-default border-dashed rounded-base">
                @yield('main')
            </div>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <x-layouts.alerts.danger message="{{ $error }}" />
                @endforeach
            @endif
        </div>
    </main>
    <footer>
        @yield('footer')
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
</body>

</html>
