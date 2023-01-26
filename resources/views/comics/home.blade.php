@php
    
@endphp

@extends('layout.app')
@section('main')
    <article class="jumbotron" style="background-image: url({{ Vite::asset('resources/img/jumbotron.jpg') }})"></article>

    @include('partials.comics')
@endsection
