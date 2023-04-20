<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns:livewire="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('assets/css/vendors/bootstrap.css')}}">

        @yield('style')

    </head>
    <body>
        @yield('preloader')

{{--    @include('layouts.temp_navigation')--}}
       @yield('header')
       @yield('main')


        @yield('footer')
        @yield('script')
    </body>
</html>
