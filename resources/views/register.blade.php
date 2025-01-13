<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
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
        <input class="border h-10 rounded-md indent-2 focus:outline-none"  type="password" name="password " placeholder="Password" id="">
    </div>
    <button type="submit" class="text-center bg-blue-500 text-white h-10 hover:bg-blue-400">Register</button>
  </form>
</body>
</html>
