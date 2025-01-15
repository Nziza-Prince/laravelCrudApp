<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
</head>
<body class="m-5">
    <h1 class="mb-5 font-bold text-4xl">Edit Post</h1>
    <form action="/edit-post/{{ $post->id }}" method="POST" class="border gap-5 p-4 flex flex-col w-1/2 justify-center">
        @csrf
        @method('PUT')
        <input class="border h-10 rounded-md indent-2 focus:outline-none" type="text"  name="title" value="{{ $post->title }}">
        <textarea class="border h-32 rounded-md indent-2 focus:outline-none" name="body" id="" cols="10" rows="10" >{{ $post->body }}</textarea>
        <button type="submit" class="bg-blue-400 text-white text-center p-3">Edit Post</button>
    </form>
</body>
</html>
