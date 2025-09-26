<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Contact</title>
</head>
<body>
<header class="header bg-blue-500 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="{{ route("home") }}">Home</a>
        <a href="{{ route("about") }}">About us</a>
        <a href="{{ route("contact") }}">Contact</a>
        <a href="{{ route("our_team") }}">Our Team</a>
    </div>
</header>
</body>
</html>
