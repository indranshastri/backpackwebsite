<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Back pack website - @yield('title')</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
</head>
<body>
    @include('inc.navbar')
    <div class="container">
            @yield('content')
    </div>
</body>
</html>