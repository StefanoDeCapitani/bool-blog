<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include("partials.head")
    <body>
        @include('partials.navbar')
        @include('partials.header')
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    @yield('main-content')
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    @include("partials.sidebar")
                </div>
            </div>
        </div>
        <!-- Footer-->
        @include("partials.footer")
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset("js/scripts.js")}}"></script>
    </body>
</html>