<article class="cards-container py_l">
    <div class="container text-center position-relative">

        <h1 class="cards-title text-uppercase bg-primary py-2 px-4 position-absolute fs-3"> current series </h1>



        {{-- @dump( array_key_exists($column->COLUMN_NAME, $values)) --}}

        {{--  @dump($comicTableShema) --}}
 

        {{-- FORM DINAMICO --}}
        <form action="">

            @foreach ($comicTableShema as $column)
                {{-- escludo i valori che non mi interessano --}}
                @if (!($column->COLUMN_NAME === 'id' || $column->DATA_TYPE === 'timestamp'))
                    @foreach ($formInputguide as $inputType => $columnToMatch)
                        @foreach ($columnToMatch as $key => $values)

                            {{-- INPUT PER COLUMN NAME --}}

                            @if (($key === 'COLUMN_NAME') & in_array($column->COLUMN_NAME, $values))
                                <label class="form-label text-light "
                                for="{{ $column->COLUMN_NAME }}">
                                {{ $column->COLUMN_NAME }}

                                
                               
                                    <small>{{ $column->CHARACTER_MAXIMUM_LENGTH ? "(max $column->CHARACTER_MAXIMUM_LENGTH digits)" : '' }}</small>
                                    <small class="text-danger">{{($column->IS_NULLABLE==='YES')? "*":""}}</small>
                                </label>

                                <input type="{{ $inputType }}" class=" form-control bg-light"
                                        name="{{ $column->COLUMN_NAME }}"
                                        id="{{ $column->COLUMN_NAME }}"
                                        placeholder="add comic's {{ $column->COLUMN_NAME }}"
                                        {{ $column->CHARACTER_MAXIMUM_LENGTH ? "max= '$column->CHARACTER_MAXIMUM_LENGTH'" : '' }}>

                                {{-- INPUT PER COLUMN TYPE --}}          
                            @elseif(($key === 'COLUMN_TYPE') & in_array($column->COLUMN_TYPE, $values))

                            @if($inputType === 'checkbox')
                            <label class="form-label text-light "
                            for="{{ $column->COLUMN_NAME }}">
                            {{ $column->COLUMN_NAME }}
                            <small class="text-danger">{{($column->IS_NULLABLE==='YES')? "*":""}}</small>
                            </label>

                                <input type="{{ $inputType }}" class="bg-light"
                                        name="{{ $column->COLUMN_NAME }}"
                                        id="{{ $column->COLUMN_NAME }}">
                                
                            @endif
        


                                {{-- INPUT PER DATA TYPE --}}  

                            @elseif(($key === 'DATA_TYPE') & in_array($column->DATA_TYPE, $values))

                            {{-- textarea --}}
                                @if ($inputType === 'textarea')

                                    <label class="form-label text-light"
                                    for="{{ $column->COLUMN_NAME }}">
                                    {{ $column->COLUMN_NAME }}"

                                        
                                        <small>{{ $column->CHARACTER_MAXIMUM_LENGTH ? "(max $column->CHARACTER_MAXIMUM_LENGTH digits)" : '' }}</small>
                                        <small class="text-danger">{{($column->IS_NULLABLE==='YES')? "*":""}}</small>
                                    </label>
                                        <textarea rows="3" class="form-control bg-light"
                                                name="{{ $column->COLUMN_NAME }}"
                                                id="{{ $column->COLUMN_NAME }}"

                                                placeholder="add comic's {{ $column->COLUMN_NAME }}"
                                                {{ $column->CHARACTER_MAXIMUM_LENGTH ? "max= '$column->CHARACTER_MAXIMUM_LENGTH'" : '' }}></textarea>
        
                            {{-- radio --}}

                                @elseif ($inputType === 'radio')
                                @dump( $column->COLUMN_TYPE)


                                    <label class="form-label text-light"
                                    for="{{ $column->COLUMN_NAME }}">
                                    {{ $column->COLUMN_NAME }}
                                            
                                        <small>{{ $column->CHARACTER_MAXIMUM_LENGTH ? "(max $column->CHARACTER_MAXIMUM_LENGTH digits)" : '' }}</small>
                                        <small class="text-danger">{{($column->IS_NULLABLE==='YES')? "*":""}}</small> 
                                    </label>
                                        <input type="{{ $inputType }}" class=" bg-light"
                                            name="{{ $column->COLUMN_NAME }}"
                                            id="{{ $column->COLUMN_NAME }}">

        
                            {{-- number --}}

                                @elseif($inputType === 'number')


                                {{-- text --}}
                                @else
                                    <label class="form-label text-light "
                                    for="{{ $column->COLUMN_NAME }}">
                                    {{ $column->COLUMN_NAME }}

                                                
                                        <small>{{ $column->CHARACTER_MAXIMUM_LENGTH ? "(max $column->CHARACTER_MAXIMUM_LENGTH digits)" : '' }}</small>
                                        <small class="text-danger">{{($column->IS_NULLABLE==='YES')? "*":""}}</small>
                                    </label>

                                        <input type="text" class=" form-control bg-light"
                                                name="{{ $column->COLUMN_NAME }}"
                                                id="{{ $column->COLUMN_NAME }}"

                                                placeholder="add comic's {{ $column->COLUMN_NAME }}"
                                                {{ $column->CHARACTER_MAXIMUM_LENGTH ? "max= '$column->CHARACTER_MAXIMUM_LENGTH'" : '' }}>
                                @endif
                            @endif
                        @endforeach
                    @endforeach
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
