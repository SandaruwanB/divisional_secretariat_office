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
            <div class=" max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-2 py-7">
                <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span class="self-center md:text-2xl text-sm font-semibold whitespace-nowrap text-gray-600">DIVISIONAL SECRETARIAT <br/> KOTAPOLA</span>
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="text-white bg-green-500 hover:bg-green-600 focus:ring-2 focus:outline-none focus:ring-green-300 font-semibold rounded-xl text-md md:px-5 md:py-3 px-3 py-2 text-center">
                            Login
                        </a>
                    @endif
                    <button type="button" data-collapse-toggle="navbar-sticky" class=" inline-flex items-center p-2 w-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200">
                        menu
                    </button>
                </div>
            </div>

        </nav>
        <main>
            @yield('home-content')
        </main>
    </body>

</html>
