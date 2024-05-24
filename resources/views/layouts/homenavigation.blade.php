<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>

    </head>

    <body class="font-sans antialiased">
        <nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200">
            <div class=" max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-5">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span class="self-center md:text-2xl text-sm font-semibold whitespace-nowrap text-gray-600">DIVISIONAL SECRETARIAT <br/> KOTAPOLA</span>
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="text-white bg-green-600 hover:bg-green-800 focus:ring-2 focus:outline-none focus:ring-green-300 font-semibold rounded-lg text-sm md:px-5 md:py-3 px-3 py-1 text-center">
                            Login
                        </a>
                    @endif
                </div>
            </div>
        </nav>
        @if (Route::has('login'))
            <nav class="-mx-3 flex flex-1 justify-end">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
        </header>
        <main>
            @yield('home-content')
        </main>
    </body>

</html>
