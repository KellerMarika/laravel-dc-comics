<article class="cards-container py_l">
    <div class="container text-center position-relative">

        <h1 class="cards-title text-uppercase bg-primary py-2 px-4 position-absolute fs-3"> current series </h1>



        @dump($comicTableShema)

        @php
            
        @endphp

        {{-- form dinamico --}}
        <form action="">
            @foreach ($comicTableShema as $column)
            <h6 class="text-primary">"{{$column->COLUMN_NAME}}"</h6>

                @if (!($column->COLUMN_NAME === 'id' || $column->DATA_TYPE === 'timestamp'))
                    <li>no id/ timestamp</li>
                   {{--  @if($column->DATA_TYPE === )
                        
                    @endif --}}
                @endif
            @endforeach


        </form>




{{-- -------------table riferimento --}}

        <table class="table" style="transform: scale(75%)">
            <tr>

                @foreach ($comicTableShema as $column)
                    @if ($loop->index === 0)
                        @foreach ($column as $key => $value)
                            <th scope="col" class="text-primary">{{ $key }}</th>
                        @endforeach
                    @endif
                @endforeach

            </tr>

            @foreach ($comicTableShema as $column)
                <tr>
                    @foreach ($column as $key => $value)
                        <td class="text-danger">{{ $value }}</td>
                    @endforeach
                </tr>
            @endforeach
        </table>

        {{-- 
        <table class="table" style="">
            <tr>

                @foreach ($comicTableShemaGRETTO as $column)
                    @if ($loop->index === 0)
                        @foreach ($column as $key => $value)
                            <th scope="col" class="text-primary">{{ $key }}</th>
                        @endforeach
                    @endif
                @endforeach

            </tr>

            @foreach ($comicTableShemaGRETTO as $column)
                <tr>
                    @foreach ($column as $key => $value)
                        <td class="text-danger">{{ $value }}</td>
                    @endforeach
                </tr>
            @endforeach
        </table>
 --}}

        <div class="row row-cols-6">
            @foreach ($comics as $key => $comic)
                <div class="col ">

                    <div class="card-dark ">

                        <a href="/comics/{{ $comic['id'] }}" class="dc-card-img d-inline-block">
                            <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                        </a>

                        <div class="admin-options d-flex justify-content-between border-bottom border-primary">

                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-link p-1 ">
                                <i class="fas fa-pencil"></i>
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
