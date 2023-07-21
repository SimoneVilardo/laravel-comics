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
        <footer>
            <div class="bg-icon">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-white d-flex align-items-center px-3 py-3">
                            <div>
                                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}">
                                <span>DIGITAL COMICS</span>
                            </div>
                            <div>
                                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}">
                                <span>DC MERCHANDISE</span>
                            </div>
                            <div>
                                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}">
                                <span> SUBSCRIPTION</span>
                            </div>
                            <div>
                                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}">
                                <span>COMIC SHOP LOCATOR</span>
                            </div>
                            <div>
                                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.png') }}">
                                <span>DC POWER VISA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cont">
                <div class="container">
                    <div class="row">
                        <div class="flex">
                            <ul>
                                <li><h4>DC COMICS</h4></li>
                                <li><a href="#">Characters</a></li>
                                <li><a href="#">Comics</a></li>
                                <li><a href="#">Movies</a></li>
                                <li><a href="#">TV</a></li>
                                <li><a href="#">Games</a></li>
                                <li><a href="#">Videos</a></li>
                                <li><a href="#">News</a></li>
                                <li><h4>SHOP</h4></li>
                                <li><a href="#">Shop DC</a></li>
                                <li><a href="#">Shop DC Collectibles</a></li>
                            </ul>
    
                            <ul>
                                <li><h4>DC</h4></li>
                                <li><a href="#">Terms Of Use</a></li>
                                <li><a href="#">Privacy policy (New)</a></li>
                                <li><a href="#">Ad Choices</a></li>
                                <li><a href="#">Advertising</a></li>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Subscriptions</a></li>
                                <li><a href="#">Talent Workshops</a></li>
                                <li><a href="#">CPSC Certificates</a></li>
                                <li><a href="#">Ratings</a></li>
                                <li><a href="#">Shop Help</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
    
                            <ul>
                                <li><h4>SITES</h4></li>
                                <li><a href="#">DC</a></li>
                                <li><a href="#">MAD Magazine</a></li>
                                <li><a href="#">DC Kids</a></li>
                                <li><a href="#">DC Universe</a></li>
                                <li><a href="#">DC Power Visa</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-between">
                            <button>SIGN-UP NOW!</button>
                            <div class="icone">
                                <h3>FOLLOW US</h3>
                                <a href="#"><img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="facebook"></a>
                                <a href="#"><img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="twitter"></a>
                                <a href="#"><img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="youtube"></a>
                                <a href="#"><img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="pinterest"></a>
                                <a href="#"><img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="periscope"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>

</html>