<!DOCTYPE html>
<!--[if lt IE 10]> <html  lang="en" class="iex"> <![endif]-->
<!--[if (gt IE 10)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <title>@yield('title')The Allco Group </title>
    @include('frontend.layouts.header')
    @yield('cdn')
</head>

<body>

    @include('frontend.layouts.nav')
    @yield('content')
    @include('frontend.layouts.footer')

    @yield('js')
</body>

</html>
