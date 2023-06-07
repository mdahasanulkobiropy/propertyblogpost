<!doctype html>
<html lang="en">

    @include('frontend.includes.head')

    <body class="pxp-dark-mode">

        @include('frontend.includes.header')

        @yield('content')

        @include('frontend.includes.footer')

        @include('frontend.includes.login')

        @include('frontend.includes.register')

        @include('frontend.includes.script')

    </body>
</html>
