<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Bakuna Tracker')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col bg-[#f2f5e2] text-[#7a5534] font-sans">
    <nav class="bg-[#7a5534] text-white shadow-md">
        <div class="max-w-6xl mx-auto px-5 py-4 flex flex-wrap items-center justify-between gap-4">
            <a href="{{ url('/') }}" class="font-bold text-xl">💉 Bakuna Tracker</a>
            <div class="flex items-center flex-wrap gap-4 text-sm">
                @auth
                    <a href="{{ route('dashboard') }}" class="hover:underline">Dashboard</a>
                    <a href="{{ route('schedule') }}" class="hover:underline">Schedule</a>
                    <span>Hi, {{ explode(' ', auth()->user()->name)[0] }}</span>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="bg-[#d5954e] hover:bg-[#b97a35] px-4 py-2 rounded-lg font-semibold">Logout</button>
                    </form>
                @endauth
                @guest
                    <a href="{{ route('login') }}" class="bg-[#d5954e] px-4 py-2 rounded-lg font-semibold">Sign in</a>
                @endguest
            </div>
        </div>
    </nav>
    <main class="w-full max-w-6xl mx-auto flex-grow px-5 py-8">
        @yield('content')
    </main>
    <footer class="bg-white border-t border-[#e6ddc8] text-center py-4 text-sm text-[#816b54]">
        &copy; {{ date('Y') }} Bakuna Tracker · Purok Dimatulac
    </footer>
</body>
</html>
