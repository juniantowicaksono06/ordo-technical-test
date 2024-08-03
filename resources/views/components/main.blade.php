<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORDO Technical Test</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <style>
        .leaderboard-bg {
            background-image: url('{{ asset('images/bg-leaderboard.webp') }}');
            background-size: 692.51px 866.17px;
            background-repeat: no-repeat;
            background-position: right;
        }
    </style>
</head>
<body class="outfit outfit-regular">
    @include('components.header')

    @yield('content')

    @include('components.footer')

    @vite(['resources/sass/app.sass', 'resources/js/app.js'])
</body>
</html>

</body>
</html>