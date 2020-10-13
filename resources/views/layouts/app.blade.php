<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todo List</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('inc.navbar')
    @include('inc.messages')
    <div class="container">
        @yield('content')
    </div>
</body>
<footer class="text-center">Copyright 2020</footer>
</html>
