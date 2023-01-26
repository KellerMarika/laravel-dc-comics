


<footer class="bg-footer" style="background-image: url({{ Vite::asset('resources/img/footer-bg.jpg') }})">
    <div class="container ">
        <div class="row">
            <div class="col-4 py_m">
                <div class="row row-cols-3">

                    @foreach ($footerLinks as $col)
                        <div class="col">

                            @foreach ($col as $colTitle => $links)
                                <h4 class="text-uppercase text-light pt-3">{{ $colTitle }}</h4>
                                <ul class="p-0">

                                    @foreach ($links as $key => $link)
                                        <li class="list-group-item">

                                            <a :href="{{ $link['href'] }}">{{ $link['name'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-6 offset-2 footer-dc-logo" style="background-image: url('/dc-logo-bg.png') }})"></div>
        </div>
    </div>
</footer>
