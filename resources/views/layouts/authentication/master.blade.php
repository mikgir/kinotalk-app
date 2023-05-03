@extends('layouts.guest')

@section('style')
    @include('layouts.authentication.css')
@endsection
<!-- login page start-->
@section('main')
    @yield('content')
@endsection
<!-- latest jquery-->
@section('sctipt')
    @include('layouts.authentication.script')
@endsection
