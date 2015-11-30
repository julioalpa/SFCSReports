<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>



<div class="container-fluid">

    <header class="row">
        @include('includes.header')
    </header>

    <div class="row">
    <!-- main content -->
    <div id="content" class="col-md-12">
        @yield('content')
    </div>

    </div>

</div>

{{--<footer class="row">
    @include('includes.footer')
</footer>--}}

</body>
</html>