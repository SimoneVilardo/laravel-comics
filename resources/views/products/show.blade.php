@extends('layouts.app')

@section('content')
    <div class="blue-space"></div>
    <div class="container position">
        <div class="row p-5">
            <div class="col-9">
                <h2 class="text-primary fw-bold text-uppercase">{{ $comic['title']}}</h2>
                <div class="row bg-success bg-gradient text-white mt-3 mb-3">
                    <div class="col-9 d-flex justify-content-between align-items-center border border-black p-2">
                        <h5>U.S. Price: <span class="fw-bold">{{ $comic['price'] }}</span></h5>
                        <span>AVAILABLE</span>
                    </div>
                    <div class="col-3 text-center border border-black p-2">
                        <h6 class="fw-bold mt-2">Check Availability <i class="fa-solid fa-caret-down" style="color: #fff;"></i></h6>
                    </div>
                </div>
                <p>{{ $comic['description'] }}</p>
            </div>
            <div class="col-3">
                <p class="fw-bold text-secondary text-end">ADVERTISEMENT</p>
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
            </div>
            <img class="dim-show" src="{{ $comic['thumb'] }}">
        </div>
    </div>
    <div class="bg-show">
        <div class="container">
            <div class="row p-5 text-primary">
                <div class="col-6">
                    <h4>Talent</h4>
                </div>
                <div class="col-6">
                    <h4>Specs</h4>
                </div>
            </div>
        </div>
    </div>
@endsection