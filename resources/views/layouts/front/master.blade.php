@extends('layouts.guest')

    @section('style')
        <livewire:styles />
    @endsection

    @section('header')

    @endsection
    @section('main')
        <livewire:front.main-page/>
    @endsection
    <!-- latest jquery-->
    @section('footer')

    @endsection
    @section('script')
        <livewire:scripts />
        <script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    @endsection
