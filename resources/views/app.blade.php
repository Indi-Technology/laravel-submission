<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel || @yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="antialiased">
    <ul>
        <li>
            <a href="{{ route('home') }}">Home</a>
        </li>

        <li>
            <a href="{{ route('users.index') }}">All Users</a>
        </li>

        <li>
            <a href="{{ route('users.show', ['id' => 4]) }}">Single user</a>
        </li>

        {{-- <li>
                <a href="{{route('posts')}}">All Users</a>
            </li> --}}

        <li>
            <a href="{{ route('posts.index') }}">Post</a>
        </li>

        <li>
            <a href="{{ route('categories.index') }}">Categories</a>
        </li>

    </ul>
    @yield('content')
</body>

</html>
