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
    <div class="max-w-6xl mx-auto mb-8">
        @if (session()->has('status'))
            <div class="text-green-400 m-2 p-2 bg-green-200">{{ session()->get('status') }}</div>
        @endif
        <div class="m-2 p-2">
            <ul class="flex">
                <li class="m-2 p-2 bg-indigo-200"><a href="{{ route('posts.index') }}">Home</a></li>
                <li class="m-2 p-2 bg-indigo-200"><a href="{{ route('posts.create') }}">Create Post</a></li>
                <li class="m-2 p-2 bg-indigo-200"><a href="{{ route('categories.index') }}">Category</a></li>
                <li class="m-2 p-2 bg-indigo-200"><a href="{{ route('categories.create') }}">Create Category</a></li>
            </ul>
        </div>
        {{ $header }}
    </div>

    {{ $slot }}
    <div class="max-w-6xl mx-auto">
        {{ $footer }}
    </div>
</body>

</html>
