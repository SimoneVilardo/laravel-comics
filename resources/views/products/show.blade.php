@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h3>{{ $comic['title']}}</h3>
            </div>
            <div class="col-4">
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
            </div>
        </div>
    </div>
@endsection