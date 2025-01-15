<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    </head>
    <body class="ml-5">
        @auth
        @if ($username)
        <h1>Welcome, {{ $username }}!</h1>
    @else
        <h1>Welcome, Guest!</h1>
    @endif
        <form action="/logout" method="POST">
            @csrf
            <button class="text-white rounded-md hover:bg-red-400 bg-red-500 my-10 mx-3 p-2" type="submit">Log out</button>
        </form>
        <form action="/create-post" method="POST" class="border gap-5 p-4 flex flex-col w-1/2 justify-center">
            @csrf
            <input class="border h-10 rounded-md indent-2 focus:outline-none" type="text" placeholder="Title" name="title">
            <textarea class="border h-32 rounded-md indent-2 focus:outline-none" name="body" placeholder="Body here ..."  id="" cols="10" rows="10"></textarea>
            <button type="submit" class="bg-blue-400 text-white text-center p-3">Create Post</button>
        </form>
        <h1 class="mt-10 font-bold text-3xl">All Posts</h1>
        @foreach ($posts as $post )
         <div class="mt-10 bg-gray-400 p-5 w-1/2 ">
              <h1 class="text-2xl font-bold">{{ $post['title'] }}</h1>
                <p>{{ $post['body'] }}</p>
                <p><a href="/edit-post/{{ $post->id }}">Edit</a></p>
                <form action="/delete-post/{{ $post->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="bg-red-500 text-white p-3">Delete</button>
                </form>
            </div>

        @endforeach
        @else
        <div class="flex">
            <form action="register" method="POST" class="border border-gray-300 flex flex-col w-96 p-3 m-10">
                @csrf
                <div class="flex flex-col gap-2 mb-5">
                    <label class="text-gray-700 mx-1" for="name">Name</label>
                    <input class="border h-10 rounded-md indent-2 focus:outline-none" type="text" name="name" placeholder="Name" id="">
                </div>
                <div class="flex flex-col gap-2 mb-5">
                    <label class="text-gray-700 mx-1"  for="email">Email</label>
                    <input class="border h-10 rounded-md indent-2 focus:outline-none"  type="email" name="email" placeholder="Email" id="">
                </div>
                <div class="flex flex-col gap-2 mb-5">
                    <label class="text-gray-700 mx-1"  for="password">Password</label>
                    <input class="border h-10 rounded-md indent-2 focus:outline-none"  type="password" name="password" placeholder="Password" id="">
                </div>
                <button type="submit" class="text-center bg-blue-500 text-white h-10 hover:bg-blue-400">Register</button>
              </form>
              <form action="/login" method="POST" class="border border-gray-300 flex flex-col w-96 p-3 m-10">
                @csrf
                <div class="flex flex-col gap-2 mb-5">
                    <label class="text-gray-700 mx-1"  for="loginemail">Email</label>
                    <input class="border h-10 rounded-md indent-2 focus:outline-none"  type="email" name="loginemail" placeholder="Email" id="">
                </div>
                <div class="flex flex-col gap-2 mb-5">
                    <label class="text-gray-700 mx-1"  for="password">Password</label>
                    <input class="border h-10 rounded-md indent-2 focus:outline-none"  type="password" name="loginpassword" placeholder="Password" id="">
                </div>
                <button type="submit" class="text-center bg-blue-500 text-white h-10 hover:bg-blue-400">Login</button>
              </form>
        </div>
        @endauth
    </body>
</html>
