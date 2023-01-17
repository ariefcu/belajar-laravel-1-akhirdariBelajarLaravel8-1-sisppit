{{-- @dd($posts) --}}

@extends('layouts.main')

@section('container')
    <h1 class='mb-5'>Pondok Pesantren Ibnu Taimiyah</h1>    
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="{{ $image }}" alt="{{ $name }}" width="1500" class='img-thumbnail'>
@endsection