<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
     @vite('resources/css/app.css') 
</head>
<body class="bg-gray-100 font-sans">
    @include('components.sidebar')
    <main class="ml-64 p-6">
        @yield('content')
    </main>
</body>
</html>
