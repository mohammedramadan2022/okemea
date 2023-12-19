<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   @include('Web::layouts.styles')
    <title>Okema | أوكيما</title>
</head>
<body>
@include('Web::layouts.navbar')
@include('sweetalert::alert')

@yield('slider')

@yield('content')

@include('Web::layouts.footer')
@include('Web::layouts.scripts')
@yield('scripts')

</body>
</html>
