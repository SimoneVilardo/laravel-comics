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
        @include('partials.header')
        <main>
            <img class="jumbotron" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}">
            <div class="bg-black">
                <div class="container">
                    <div class="row py-5 position">
                        @foreach($comics as $comic)
                            <div class="col-2 py-3">
                                <div class="card bg-black">
                                    <img class="dimension" src="{{ $comic['thumb'] }}">
                                    <p class="text-white">{{ $comic['series'] }}</p>
                                </div>
                            </div>
                        @endforeach
                        <div class="d-flex justify-content-center">
                            <button type="button">LOAD MORE</button>
                        </div>
                        <div class="col-2 text-center bage">CURRENT SERIES</div>
                    </div>
                </div>
            </div>
        </main>
       @include('partials.footer')
    </body>

</html>