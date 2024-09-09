<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
</head>
<body>
<div>
    @include('components.header')
    @yield('content')
    @include('components.footer')
</div>
</body>
</html>
