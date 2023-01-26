@php
    
@endphp

@extends('layout.app')

@section('main')
    {{-- devo passare il valore dell'index al click  --}}


    {{-- img top --}}
    <article class="jumbotron" style="background-image: url({{ Vite::asset('resources/img/jumbotron.jpg') }})"></article>

    <section class="blue-bunner-card bg-primary " style="height:60px"> </section>


    <article class="comic-card-overview pt-5">

        <div class="container position-relative w-75">



            <div class="img-container position-absolute border border-light">
                <div class="position-absolute text-light text-uppercase px-2 bg-primary-light">{{ $comics[$comicIndex]['type'] }}</div>
                <img src="{{ $comics[$comicIndex]['thumb'] }}" alt="{{ $comics[$comicIndex]['title'] }}" class="img-fluid">
                <div class="text-light  text-uppercase px-2 bg-primary-light">view gallery</div>
            </div>
            {{-- card-body --}}
        
            <div class="row card-body">
                <div class="col-9">
                    <h1 class="card-title fs-3 text-uppercase text-primary-dark">{{ $comics[$comicIndex]['title'] }}</h1>

                    <div class="card-price d-flex border-success bg-success-light text-light  py-3">

                        <div class="d-flex flex-fill px-3">
                            <div class="price flex-fill"><span class="text-light  opacity-50">U.S. Price:
                                </span>{{ $comics[$comicIndex]['price'] }} </div>
                            <div class=" text-uppercase opacity-50">avaiable</div>
                        </div>
                        <div class="px-3">check Availability {{-- ___________________freccetta --}}</div>
                    </div>

                    <p class="description py-3 text-secondary">{{ $comics[$comicIndex]['description'] }}</p>
                </div>


                <div class="col-3 ">
                    <div class="bunner-card ">
                        <div class="text-uppercase position-relative  w-100 text-end fw-bold text-secondary">advertisment</div>
                        <img src="/adv.jpg" alt="adv" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        {{-- table card-footer --}}
        <section class="card footer comic-info pt-3 border pb-5">
            <div class="container py-3 w-75">
                <div class="row">
                    <div class="col-6">
                        <h4 class="text-primary-dark  border-bottom pb-3">Talent</h4>

                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row" class="small text-primary-dark">Art by:</th>
                                    <td class="small text-primary-light fw-bold ps-5">
                                        {{ implode(', ', $comics[$comicIndex]['artists']) }}</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="small text-primary-dark">Written by:</th>
                                    <td class="small text-primary-light fw-bold ps-5">
                                        {{ implode(', ', $comics[$comicIndex]['writers']) }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-6">
                        <h4 class="text-primary-dark border-bottom pb-3">Specs</h4>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row" class="small text-primary-dark">Series:</th>
                                    <td class="small text-primary-light fw-bold ps-5 text-uppercase">
                                        {{ $comics[$comicIndex]['series'] }}</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="small text-primary-dark">U.S. Price:</th>
                                    <td class="small  fw-bold ps-5">{{ $comics[$comicIndex]['price'] }}</td>
                                </tr>
                                <tr>
                                    <th scope="row" class="small text-primary-dark">On Sale Date:</th>
                                    <td class="small  fw-bold ps-5">
                                        {{ date('M d Y', strtotime($comics[$comicIndex]['sale_date'])) }}</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </section>

    </article>





    <style>
        .comic-card * {
            border: 1px solid red;
        }
    </style>
@endsection
