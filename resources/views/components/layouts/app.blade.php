<!-- components/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-900">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name') }}</title>
    {!! CookieConsent::styles() !!}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full">
    <header>
        <x-partials.navbar />
    </header>
    <main class="flex justify-center">
        {{-- <x-partials.sidebar /> --}}
            <div class="p-4 border-1 border-default border-dashed rounded-base my-2">
                {{ $slot }}
            </div>
            @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        <x-ui.alerts.danger message="{{ $error }}" />
                    </li>    
                @endforeach
            </ul>
            @endif
    </main>
    <footer>
        <x-partials.footer />
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
    {!! CookieConsent::scripts() !!}
</body>

</html>
