<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <title>Movie APP</title>
        <link rel="stylesheet" href="../../css/app.css">
    </head>
    <body class="font-sans bg-gray-900 text-white">
        <nav class="nav">
            <div class="nav-container">
                <ul class="nav-items-left">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/movie">Movies</a>
                    </li>
                    <li>
                        <a href="#">TV-shows</a>
                    </li>
                    <li>
                        <a href="#">Actors</a>
                    </li>
                </ul>
                    <div class="border">
                        <input class="" placeholder="search" type="text">
                    </div>
            </div>
        </nav>
    @yield('content')
    </body>
</html>
