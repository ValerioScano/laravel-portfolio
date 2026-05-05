@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 mb-4 bg-light rounded-3">
    <div class="container py-5 d-flex flex-column align-items-center">
        <div class="logo-container">
            <img src="{{Vite::asset("resources/img/web-design-portfolio-768x492.png")}}" alt="logo immagine">
        </div>
        <h1 class="display-5 fw-bold">
            Welcome to my Portfolio <i class="bi bi-box"></i>
        </h1>

        <p class="col-md-8 fs-4 text-center">
            I was born a Greek scholar, I ended up studying Laravel and Greek Papyri
        </p>
        <a href="https://packagist.org/packages/pacificdev/laravel_9_preset" class="btn btn-primary btn-lg" type="button">Documentation</a>
    </div>
</div>

<div class="content">
    <div class="container">
        <p>This page displays my projects, what I'm fond of, my tears</p>
    </div>
</div>
@endsection