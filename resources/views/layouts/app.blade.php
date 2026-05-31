<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory App</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <nav class="bg-white shadow p-4">
        <div class="container mx-auto flex justify-between">

            <div class="flex gap-4">
                <a href="{{ route('dashboard') }}">
                    Dashboard
                </a>

                <a href="{{ route('categories.index') }}">
                    Kategori
                </a>

                <a href="{{ route('products.index') }}">
                    Barang
                </a>
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="text-red-500">
                    Logout
                </button>
            </form>

        </div>
    </nav>

    <div class="container mx-auto p-6">

        @if(session('success'))
            <div class="bg-green-200 text-green-800 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')

    </div>

</body>
</html>
