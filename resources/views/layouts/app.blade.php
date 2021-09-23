<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{mix("css/app.css")}}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<nav class="p-4 text-black border bg-white w-screen flex justify-between mb-6 items-center">
    <ul class="flex items-center">
        <li><a href="#" class="p-2">Home</a></li>
        <li><a href="#" class="p-2">Dashboard</a></li>
        <li><a href="#" class="p-2">Course Selection</a></li>
    </ul>

    <ul class="flex items-center">
        <li><a href="#" class="p-2">Bailey</a></li>
        <li><a href="#" class="p-2">Login</a></li>
        <li><a href="{{route("Register")}}" class="p-2">Register</a></li>
    </ul>
</nav>

@yield("content")


</body>
</html>