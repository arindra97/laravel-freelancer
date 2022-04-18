<!doctype html>
<html x-data="data()" lang="en">
    <head>
        @include('includes.Landing.meta')

        <title>@yield('title') | Freelancer</title>

        @stack('before-style')
            @include('includes.Landing.style')
        @stack('after-style')
    </head>

    <body class="antialiased">
        <div class="relative">
            <!-- top -->
            <div class="hero-bg">
                <!-- header -->
                @include('includes.Landing.header')
                    @yield('content')
                @include('includes.Landing.footer')

                @stack('before-script')
                    @include('includes.Landing.script')
                @stack('after-script')
            </div>
        </div>
    </body>
</html>