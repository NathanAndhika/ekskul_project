<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory App</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Inter', sans-serif; }
        .animate-fade-in-down { animation: fadeInDown 0.5s ease-out; }
        @keyframes fadeInDown {
            0% { opacity: 0; transform: translateY(-10px); }
            100% { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-indigo-50/40 text-gray-800 min-h-screen flex flex-col">

    <nav class="bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 shadow-xl shadow-indigo-500/20 p-4 mb-8 sticky top-0 z-50">
        <div class="container mx-auto flex justify-between items-center">

            <div class="flex gap-2 sm:gap-4">
                <a href="{{ route('dashboard') }}"
                   class="px-5 py-2.5 rounded-xl font-medium transition-all duration-300 {{ request()->routeIs('dashboard') ? 'bg-white text-indigo-700 shadow-md scale-105' : 'text-indigo-50 hover:bg-white/20 hover:text-white' }}">
                    <span class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                        Dashboard
                    </span>
                </a>

                <a href="{{ route('categories.index') }}"
                   class="px-5 py-2.5 rounded-xl font-medium transition-all duration-300 {{ request()->routeIs('categories.*') ? 'bg-white text-indigo-700 shadow-md scale-105' : 'text-indigo-50 hover:bg-white/20 hover:text-white' }}">
                   <span class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
                        Kategori
                   </span>
                </a>

                <a href="{{ route('products.index') }}"
                   class="px-5 py-2.5 rounded-xl font-medium transition-all duration-300 {{ request()->routeIs('products.*') ? 'bg-white text-indigo-700 shadow-md scale-105' : 'text-indigo-50 hover:bg-white/20 hover:text-white' }}">
                    <span class="flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                        Barang
                    </span>
                </a>
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="px-5 py-2.5 bg-white/10 text-white rounded-xl font-medium hover:bg-red-500 hover:shadow-lg transition-all duration-300 border border-white/20">
                    <span class="flex items-center gap-2">
                        Logout
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                    </span>
                </button>
            </form>

        </div>
    </nav>

    <div class="container mx-auto px-4 md:px-6 flex-grow">

        @if(session('success'))
            <div class="bg-emerald-50 border border-emerald-200 text-emerald-700 px-6 py-4 rounded-xl shadow-sm mb-8 animate-fade-in-down flex items-center gap-3">
                <div class="bg-emerald-100 rounded-full p-2">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                </div>
                <span class="font-medium">{{ session('success') }}</span>
            </div>
        @endif

        @yield('content')

    </div>

</body>
</html>
