<!doctype html>
<html lang="zxx">

@include('front-template.head')

<body>
    <!--::header part start::-->
    @include('front-template.header')
    <!--::Header part end::-->

    <!-- breadcrumb start-->
    @include('front-template.breadcrumb')
    <!-- breadcrumb start-->

    <!-- Start Content Area -->
    @yield('content')
    <!-- End Content Area -->

    <!--::footer_part start::-->
    @include('front-template.footer')
    <!--::footer_part end::-->

    <!-- JavaScript -->
    @include('front-template.js')
</body>

</html>