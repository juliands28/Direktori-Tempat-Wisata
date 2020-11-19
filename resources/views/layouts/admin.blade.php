<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title> @yield('title') </title>

    {{-- style --}}
    @stack('prepend-style')
        @include('includes.style')
    @stack('addon-style')
</head>

<body>
    <div class="page-dashboard">
        <div class="d-flex" id="wrapper" data-aos="fade-right">
    {{-- page content --}}
            @include('includes.sidebar-admin')
            @yield('content')
        </div>
    </div>

    {{-- script --}}
     @stack('prepend-script')
        @include('includes.script')
    @stack('addon-script')
    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>    
</body>

</html>