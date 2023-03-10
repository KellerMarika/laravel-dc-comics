<article class="cards-container py_l">
    <div class="container text-center position-relative">

        <h1 class="cards-title text-uppercase bg-primary py-2 px-4 position-absolute fs-3"> current series </h1>


        <div class="row row-cols-6">
            @foreach ($comics as $key => $comic)
                <div class="col ">

                    <div class="card-dark ">

                        <a href="/comics/{{ $comic['id'] }}" class="dc-card-img d-inline-block">
                            <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                        </a>

                        <div class="admin-options d-flex justify-content-between border-bottom border-primary" >

                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-link p-1 ">
                                <i class="fas fa-pencil" ></i>
                            </a>

                            @php        $element = $comic;   @endphp
                            @include('partials.destroyForm', $element)
                        </div>

                        <a href="/comics/{{ $comic['id'] }}" class=" d-inline-block text-decoration-none text-light">
                            <h6 class="text-uppercase small pt-2">{{ $comic['series'] }}</h6>
                        </a>
                    </div>
                </div>
            @endforeach

        </div>

        <a href="/comics/create" class="btn  btn-primary text-light text-uppercase rounded-0 fw-bold py-2 px-5">add new
            comic</a>
    </div>
</article>
