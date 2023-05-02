@extends('layouts.app')
<title>{{ config('app.name', 'Laravel') }}</title>

@section('style')
    @include('layouts.profile.css')
@endsection
    @yield('css')

  {{-- @dd(Route::current()->getName()); --}}
@section('main')
  <main>
{{--    <div class="loader-wrapper">--}}
{{--      <div class="loader-index"><span></span></div>--}}
{{--      <svg>--}}
{{--        <defs></defs>--}}
{{--        <filter id="goo">--}}
{{--          <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>--}}
{{--          <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"> </fecolormatrix>--}}
{{--        </filter>--}}
{{--      </svg>--}}
{{--    </div>--}}
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-body-wrapper">
        <div class="page-body">
          <div class="container-fluid">
              <div class="page-title">
                  <div class="row">
                      <div class="col-6">
                          @yield('breadcrumb-title')
                      </div>
                      <div class="col-6">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="{{ route('dashboard-05')}}">
                                      <svg class="stroke-icon">
                                          <use href="{{ asset('assets/admin/svg/icon-sprite.svg#stroke-home') }}"></use>
                                      </svg></a></li></li>
                              @yield('breadcrumb-items')
                          </ol>
                      </div>
                  </div>
              </div>
              @yield('content')
          </div>
        </div>
      </div>
    </div>

  </main>
@endsection
    @section('script')
        @include('layouts.profile.script')
        @yield('script')
        <!-- latest jquery-->
        <!-- Plugin used-->

{{--         <script type="text/javascript">--}}
{{--          if ($(".page-wrapper").hasClass("horizontal-wrapper")) {--}}
{{--                $(".according-menu.other" ).css( "display", "none" );--}}
{{--                $(".sidebar-submenu" ).css( "display", "block" );--}}
{{--          }--}}
{{--        </script> --}}
    @endsection
