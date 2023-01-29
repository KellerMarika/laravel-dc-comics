@extends('layout.slim')

@section('main')
    <div class="container  ">
        <fieldset
            id="edit-comic-container"class="form-container position-relative mt-5 w-75 m-auto border border-secondary border-2 px-5 py-4 rounded-5">

            <legend class=" pt-5 pb-4 text-uppercase">
                <h1 class="text-primary">Edit Comic n°: {{ $comic->id }}</h1>
            </legend>

            <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                @method('put')

                @csrf {{-- codice univoco identificativo del mio form --}}

                <fieldset class="pb-4 border-secondary border-2 border-bottom">
                    <div class="row gap-2 ">
                        <div class=" mb-3 col-5">

                            <label class="form-label text-light ">title</label>
                            <input type="text" class=" form-control bg-light" name="title" value="{{ $comic->title }}">
                        </div>

                        <div class="mb-3 col-4">
                            <label class="form-label text-light">series</label>
                            <input type="text" class=" form-control bg-light" name="series"
                                value="{{ $comic->series }}">
                        </div>

                        <div class="mb-3 col ">
                            <label class="form-label text-light">type</label>
                            <input type="text" class=" form-control bg-light" name="type" value="{{ $comic->type }}">
                        </div>
                    </div>


                    <div class="mb-3 col ">
                        <label class="form-label text-light">Description</label>
                        <input type="text" class="form-control bg-light" name="description"
                            value="{{ $comic->description }}">
                        {{-- ________________________________________________________________________INPUT TEXTAREA NO VALUE --}}
                    </div>
                    <div class="mb-3 col ">
                        <label class="form-label text-light">Url</label>
                        <input type="text" class="form-control bg-light" name="thumb" value="{{ $comic->thumb }} ">
                    </div>
                </fieldset>

                <fieldset class="p-4 border-secondary border-2 border-bottom">
                    <div class="row gap-2">

                        <div class="mb-3 col">
                            <label class="form-label text-light ">artist</label>
                            <input type="text" class=" form-control bg-light" name="artists"
                                value="{{ $comic->artists }} ">
                        </div>

                        <div class="mb-3 col">
                            <label class="form-label text-light">writers</label>
                            <input type="text" class=" form-control bg-light" name="writers"
                                value="{{ $comic->writers }} ">
                        </div>
                    </div>
                </fieldset>


                <fieldset class="p-4 ">
                    <div class="row gap-2 align-items-end">

                        <div class=" col">
                            <label class="form-label text-light ">price</label>
                            <input type="text" class=" form-control bg-light" name="price" value="{{ $comic->price }}">
                        </div>

                        <div class=" col">
                            <label class="form-label text-light">on sale from</label>
                            <input type="text" class="form-control bg-light" name="sale_date"
                                value="{{ $comic->sale_date }}">
                            {{-- ________________________________________________________________________INPUT DATE NO VALUE --}}
                            {{--  <input type="date" class="form-control bg-light" name="sale_date"
                                value="{{date('d m Y', strtotime($comic->sale_date)) }}">

                                @dump(  $comic->sale_date )
                                @dump(date('d/m/Y',strtotime($comic->sale_date)) ) --}}
                        </div>
                        <div class="col-3 d-flex justify-content-end">
                            <button class="btn btn-primary text-light fs-bold text-uppercase text-end px-3" type="submit">
                                <i class="fa-solid fa-arrows-rotate pe-1"></i>
                                EDIT </button>
                        </div>
                    </div>

                </fieldset>


            </form>
        </fieldset>


    </div>

    <style>
        #edit-comic-container::after {
            content: "";
            position: absolute;
            top: 0px;
            right: 0px;
            bottom: 0px;
            left: 0px;
            opacity: 0.1;
            background-size: cover;
            z-index: -1;
            background-image: url({{ Vite::asset('resources/img/jumbotron.jpg') }});
        }
    </style>
@endsection
