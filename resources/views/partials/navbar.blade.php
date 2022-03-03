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
<nav>
    <div class="container">
        <a href="#">
            <img src="{{asset('img/dc-logo.png')}}" alt="DC Logo" />
        </a>
        <ul>
            @foreach ($links as $key=>$link)
            @if($link<>'shop')
                <li>
                    <a href="{{route($key)}}">{{$link}}</a>
                </li>
                @else
                <li class="dropdown">
                    <p class="dropshop">{{$link}} <i class="fa-solid fa-caret-down"></i></p>
                    <div class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </li>
                @endif
                @endforeach
        </ul>
        <form>
            <input type="text" placeholder="Search">
            <button type="submit">Search</button>
        </form>
    </div>
</nav>
@include ('partials.jumbotron')
