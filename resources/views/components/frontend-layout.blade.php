<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sajilo Bazar</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
</head>

<body>
    <!-- Changed bg to blue -->
    <header class="bg-blue-700 text-white sticky top-0 py-2 z-50">
        <x-frontend-navbar />
    </header>

    <main>
        {{ $slot }}
    </main>

    <x-footer />
</body>

</html>
