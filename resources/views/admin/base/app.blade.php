<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    @include('admin.base.head')
</head>
<body style="padding-top: 65px">
    @include('admin.base.sidebar')
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
