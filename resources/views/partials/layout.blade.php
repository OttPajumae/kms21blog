<!doctype html>
<html data-theme="dark" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('partials.nav')
    <div class="container mx-auto mt-3">
        @yield('content')
        @isset($slot)

            <div class="min-h-screen flex flex-col sm:justify-center items-center sm:pt-0">
                <div>
                    <a href="/">
                        <x-application-logo class="w-20 h-20 fill-current text-white-500" />
                    </a>
                </div>

                <div class="w-full sm:max-w-md px-6 py-4 bg-base-100 dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                    {{ $slot }}
                </div>
            </div>
        @endisset
    </div>
</body>
</html>
