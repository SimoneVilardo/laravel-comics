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

        <!-- link fortawsome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    </head>

    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center align-items-center mt-4">
                        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}">
                        <div class="navbar-nav container navbar-light">
                            <ul class="list-unstyled d-flex justify-content-center text-uppercase ">
                                <li class="nav-link px-2 py-2 {{ Route::currentRouteName() === 'homepage' ? 'fw-bold active_li' : '' }}">
                                    <a class="nav-link {{ Route::currentRouteName() === 'homepage' ? 'active_a' : '' }}" href="{{ route('homepage') }}"  href="{{ route('homepage') }}">
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
                                        shop <i class="fa-solid fa-caret-down" style="color: #0074e8;"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="height d-flex justify-content-center align-items-center">
                            <div class="col-md-8">
                                <div class="search d-flex s-control">
                                    <input type="text" class="form-control s-bar" placeholder="Search">
                                    <i class="fa fa-search align-self-center"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </body>

</html>