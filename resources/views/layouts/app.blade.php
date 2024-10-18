<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex flex-col min-h-screen bg-gray-100 text-gray-800 font-sans">

    <header class="bg-blue-600 text-white py-5 shadow-md">
        <h1 class="text-4xl text-center font-bold">Contact-App Website</h1>
    </header>

    @include('partials.navbar')

    <main class="flex-grow container mx-auto my-5 p-4 bg-white rounded-lg shadow-md">
        @if (session('success'))
        <div class="alert alert-success mb-4 bg-green-500 text-white p-4 rounded">
            {{ session('success') }}
        </div>
        @endif

        @yield('content')
    </main>

    <footer class="bg-blue-600 text-white py-4 mt-5">
        <p class="text-center">&copy; Tugas Pweb Contact-App</p>
    </footer>

</body>
</html>
