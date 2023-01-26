<article class="BottomBunner">
    <div class="container d-flex align-items-center py_m">

        <button class="login-btn text-uppercase text-light bg-transparent border-primary p-2"> sing-up now!</button>

        <div class="flex-fill d-flex align-items-center justify-content-end">
            <h4 class="text-uppercase text-primary m-0">follow Us</h4>
            <ul class=" d-flex justify-content-end text-uppercase m-0">

                @foreach ($bottomBunnerLinks as $key => $link)
                    <li class="list-group-item">

                        <a target="_blank" class="h-100 p-2" href="{{$link['href']}}">
                            <img src="/{{$link['name'].".".$link['format']}}" alt="{{$link['name']}}">
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>
</article>


