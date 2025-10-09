<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Mohammed Salem | Portfolio' }}</title>
    <meta name="description" content="{{ $description ?? 'Mohammed Salem portfolio website' }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <style>
        :root {
            --primary: {{ $settings->primary_color ?? '#56DFCF' }};
            --secondary: {{ $settings->secondary_color ?? '#FDFAF6' }};
            --dark: {{ $settings->dark_color ?? '#1a1a1a' }};
            --gray: {{ $settings->gray_color ?? '#666' }};
            --light-gray: {{ $settings->light_gray_color ?? '#f5f5f5' }};
        }
    </style>

</head>

<body>
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>