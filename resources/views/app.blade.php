<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
</head>

<body>
<div class="container">
    @include('partials.navigationbar')
    <div class="content">
        @yield('content')
    </div>
</div>
@yield('footer')
</body>
</html>