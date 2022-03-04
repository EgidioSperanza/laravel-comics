@php
$links=[
'characters'=>'characters',
'comics'=>'comics',
'movies'=>'movies',
'tv'=>'tv',
'games'=>'games',
'collectibles'=>'collectibles',
'videos'=>'videos',
'fans'=>'fans',
'news'=>'news',
'shop'=>'shop' ];
@endphp

@include ('partials.topbar')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{route('characters')}}"><img src="{{asset('img/dc-logo.png')}}" alt="DC Logo" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                @foreach ($links as $key=>$link)
                @if($link<>'shop')
                    <li class="nav-item">
                        <a class="nav-link {{ Request::route()->getName() === $key ? 'active' : ''}}" aria-current="page" href="{{route($key)}}">{{$link}}</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{$link}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    @endif
                    @endforeach
            </ul>
            <form class="d-flex">
                <input type="search" placeholder="Search" aria-label="Search">
                <button class="custom-btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
</nav>

@include ('partials.jumbotron')
