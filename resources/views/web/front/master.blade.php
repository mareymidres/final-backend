<!DOCTYPE html>
<html lang="en">

@include('web.front.layout.inc.head')

<body>

@yield('section-hero')
@include('web.front.layout.inc.header')

<main id="main">

    @yield('content')
    
</main>

@include('web.front.layout.inc.footer')
</body>
</html>

