<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{ $page_title }}
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <ul>
            <li class="inline-block"><a class="px-4 py-1" href="/">Home</a></li>
            <li class="inline-block"><a class="px-4 py-1" href="{{ url('/about') }}">About</a></li>
            <li class="inline-block"><a class="px-4 py-1" href="{{ route('contact_us') }}">Contact Us</a></li>
        </ul>
    </header>
    

    <main class="bg-gray-50 py-4 px-6">
        {{ $slot }}
    </main>
</body>
</html>