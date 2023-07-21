<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel DC Comics</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite('resources/js/app.js')

        <!-- link fontawesome -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>

    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-10 d-flex justify-content-center align-items-center mt-4">
                        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}">
                        <div class="navbar-nav container navbar-light">
                            <ul class="list-unstyled d-flex justify-content-center text-uppercase ">
                                <li class="nav-link px-2 py-2">
                                    <a class="nav-link {{ Route::currentRouteName() === 'homepage' ? 'fw-bold active' : '' }}" href="{{ route('homepage') }}"  href="{{ route('homepage') }}">
                                        characters
                                    </a>
                                </li>
                                <li class="nav-link px-2 py-2">
                                    <a class="nav-link">
                                        comics
                                    </a>
                                </li>
                                <li class="nav-link px-2 py-2">
                                    <a class="nav-link">
                                        movies
                                    </a>
                                </li>
                                <li class="nav-link px-2 py-2">
                                    <a class="nav-link">
                                        tv
                                    </a>
                                </li>
                                <li class="nav-link px-2 py-2">
                                    <a class="nav-link">
                                        games
                                    </a>
                                </li>
                                <li class="nav-link px-2 py-2">
                                    <a class="nav-link">
                                        collectibiles
                                    </a>
                                </li>
                                <li class="nav-link px-2 py-2">
                                    <a class="nav-link">
                                        videos
                                    </a>
                                </li>
                                <li class="nav-link px-2 py-2">
                                    <a class="nav-link">
                                        fans
                                    </a>
                                </li>
                                <li class="nav-link px-2 py-2">
                                    <a class="nav-link">
                                        news
                                    </a>
                                </li>
                                <li class="nav-link px-2 py-2">
                                    <a class="nav-link">
                                        shop 
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </body>

</html>