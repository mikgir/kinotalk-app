<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @yield('style')
    </head>
    <body @if(Route::current()->getName() == 'admin') onload="startTime()" @elseif (Route::current()->getName() == 'button-builder') class="button-builder" @endif>

        @yield('header')
            <main>
               @yield('main')
            </main>
        @yield('footer')
{{--        </div>--}}
    @yield('script')


    </body>
</html>
