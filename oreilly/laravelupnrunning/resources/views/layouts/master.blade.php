<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Site | @yield('title','Home Page')</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    @section('footer')
        <script src="app.js"></script>
    @show
</body>
</html>