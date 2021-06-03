@extends('layouts.theme')

@section('content')
    <section class="content-section bg-primary text-white wrapper">
        <div class="container px-4 px-lg-5 text-center row h-100 justify-content-center align-items-center"  style="min-height: 100vh; margin: 0 auto">
            <a class="btn btn-xl btn-light me-4" href="{{ route('login') }}">Кiру</a>
            <a class="btn btn-xl btn-dark" href="{{ route('register') }}">Тiркелу</a>
        </div>
    </section>
@stop
