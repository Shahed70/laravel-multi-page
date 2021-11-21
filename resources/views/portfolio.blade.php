@extends('layout.layout')
@section("title", "This is porfolio page")

@section('content')
<div class="container">
<h1 class="display-3 bg-dark text-light p-5 rounded text-center my-5">Portfoli</h1>
    <div class="row my-5">
        <div class="col-md-3">
            <div class="card" style="width: 100%;">
                <img src="{{asset('image/world-wide-web.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 100%;">
                <img src="{{asset('image/world-wide-web.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 100%;">
                <img src="{{asset('image/world-wide-web.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 100%;">
                <img src="{{asset('image/world-wide-web.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection