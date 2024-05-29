<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home')</title>

    <meta content="" name="description">
    <meta content="" name="keywords">
    @include('layouts.inc.link')
    @include('layouts.inc.nav')
</head>
<body>
    <main id="main">
        <!-- <br> -->
        {{-- <section class="breadcrumbs" style="background-color: black">
            <div class="container">
                <ol>
                    <li><a href="{{ url ('/') }}">Home</a></li>
                    <li><a href="{{ URL::current() }}">@yield('title')</a></li>
                </ol>
            </div>
        </section>  --}}
        @yield('content')
    </main>
</body>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('layouts.inc.footer')
@include('layouts.inc.script')
</html>