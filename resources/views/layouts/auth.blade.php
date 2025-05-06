<!DOCTYPE html>
<html>
<head>
    <title>Login - Kayu Indonesia</title>
    @vite('resources/css/app.css')

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">
 @include('components.header')

    <div class="flex items-center justify-center min-h-screen pt-0">
        <div class="w-full max-w-md p-8 mx-4 mt-10 bg-white rounded-lg shadow-md">
            @yield('content')
        </div>

    </div>
</body>
@include('components.footer')
</html>
