<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="w-full">
<nav class="bg-gray-800 p-4 text-white fixed top-0 left-0 w-full z-50">
    <div class="flex justify-between items-center">
        <a href="{{route('home')}}">My Blogs</a>
        <ul class="flex gap-4 items-center">
            @props(['post' => null])

            @php
                $isShow = request()->routeIs('posts.show') && isset($post);
            @endphp

            @guest
                <li><a href="{{route('login')}}" class="hover:text-pink-400">Login</a></li>
                <li><a href="{{route('register')}}" class="hover:text-pink-400">Register</a></li>
            @endguest

            @auth
                @if(!request()->routeIs('posts.edit'))
                    @if($isShow)
                        <div class="flex gap-4">
                            <a href="{{ route('posts.edit', ['id' => $post->id]) }}"
                               class="border border-transparent text-center rounded bg-pink-600 py-0 px-2 inline-block hover:border-pink-400">
                                Edit Post
                            </a>

                            <form id="delete-form" method="POST" action="{{ route('posts.delete', $post->id) }}">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="border border-transparent text-center rounded bg-red-600 py-0 px-2 inline-block hover:border-red-400"
                                        onclick="return confirm('Are you sure you want to delete this post?');">
                                    Delete Post
                                </button>
                            </form>
                        </div>
                    @else
                        <a href="{{ route('posts.create') }}"
                           class="border border-transparent text-center rounded bg-pink-600 py-0 px-2 inline-block hover:border-pink-400">
                            + Create Post
                        </a>
                    @endif
                @endif

                <a href="#" class="hover:text-pink-400"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            @endauth
        </ul>
    </div>
</nav>

<main class="pt-16">
    {{ $slot }}
</main>
</body>

</html>
