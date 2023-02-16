<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    @include('base.head')
</head>
<body style="padding-top: 65px">
    @include('base.sidebar')
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
