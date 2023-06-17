@extends('template')
@section('main')
    <h1>Belajar Laravel</h1>

    <img src="{{ asset('img/download.jpeg') }}" alt="">

    @for ($i = 0; $i < 10; $i++)
        <h1>Selamat datang di pelatihan laravel</h1>
    @endfor
@endsection
