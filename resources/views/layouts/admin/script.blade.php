 <!-- latest jquery-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <!-- Bootstrap js-->
<script src="{{asset('assets/admin/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
<!-- feather icon js-->
<script src="{{asset('assets/admin/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('assets/admin/js/icons/feather-icon/feather-icon.js')}}"></script>
<!-- scrollbar js-->
<script src="{{asset('assets/admin/js/scrollbar/simplebar.js')}}"></script>
<script src="{{asset('assets/admin/js/scrollbar/custom.js')}}"></script>
<!-- Sidebar jquery-->
<script src="{{asset('assets/admin/js/config.js')}}"></script>
<!-- Plugins JS start-->
<script src="{{ asset('assets/admin/js/chart/apex-chart/apex-chart.js') }}"></script>
<script src="{{ asset('assets/admin/js/chart/apex-chart/stock-prices.js') }}"></script>
<script id="menu" src="{{asset('assets/admin/js/sidebar-menu.js')}}"></script>
<script src="{{ asset('assets/admin/js/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/slick/slick.js') }}"></script>
<script src="{{ asset('assets/admin/js/header-slick.js') }}"></script>
@yield('script')

@if(Route::current()->getName() != 'popover')
	<script src="{{asset('assets/admin/js/tooltip-init.js')}}"></script>
@endif

<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{asset('assets/admin/js/script.js')}}"></script>
{{--<script src="{{asset('assets/admin/js/theme-customizer/customizer.js')}}"></script>--}}


{{-- @if(Route::current()->getName() == 'index')--}}
{{--	<script src="{{asset('assets/admin/js/layout-change.js')}}"></script>--}}
{{--@endif--}}

{{--@if(Route::currentRouteName() == 'index')--}}
{{--<script>--}}
{{--	new WOW().init();--}}
{{--</script>--}}
{{--@endif--}}
