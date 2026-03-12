<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Company Profile')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="d-flex flex-column min-vh-100">

    @include('partials.navbar')

    <main class="container mt-4 flex-shrink-0">
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>