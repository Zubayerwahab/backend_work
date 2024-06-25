@extends('front.master')
@section('title')
    Home Page
@endsection
@section('body')
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-inerval="1800">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('/') }}front/images/slider-image/1.jpg" style="height: 350px" alt="Category Title">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('/') }}front/images/slider-image/2.jpg" style="height: 350px" alt="Category Title">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('/') }}front/images/slider-image/3.jpg" style="height: 350px" alt="Category Title">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

@endsection