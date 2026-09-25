<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>

    <h1>Library System</h1>

    <a href="/books">Books</a> |
    <a href="/categories">Categories</a> |
    <a href="/members">Members</a>

    <hr>

    @yield('content')

    <hr>

    <p>Library System</p>

</body>
</html>