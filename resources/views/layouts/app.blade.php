<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 12px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px 12px;
            text-align: left;
        }

        th {
            background: #f0f0f0;
        }
    </style>
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