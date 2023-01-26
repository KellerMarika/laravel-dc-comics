<article class="top-bunner py_l">
    <div class="container">

        <ul class="list-group-flush d-flex justify-content-around  align-items-center m-0 p-0">

            @foreach ($topBunnerLinks as $key => $link)
                <li class="list-group-item">
                    <a class="d-flex align-items-center" target="_blank" href="{{ $link['href'] }}">

                        <img class="link-img img-fluid" src="/{{ $link['img']['name'] . '.' . $link['img']['format'] }}"
                            alt="{{ $link['img']['name'] }}">

                        <h6 class="text-uppercase small">{{ $link['name'] }}</h6>
                    </a>
                </li>
            @endforeach

        </ul>
    </div>
</article>
