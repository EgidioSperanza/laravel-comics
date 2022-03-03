@php
$links=[
'characters',
'comics',
'movies',
'tv',
'games',
'collectibles',
'videos',
'fans',
'news',
'shop' ];
@endphp
@include ('partials.topbar')
<nav>
  <div class="container">
    <a href="#">
      <img src="{{asset('img/dc-logo.png')}}" alt="DC Logo" />
    </a>
      <ul>
        @foreach ($links as $link)
          <li>
            <a href="#">{{$link}}</a>
          </li>
        @endforeach
      </ul>
      <form>
        <input type="text" placeholder="Search">
        <button type="submit">Search</button>
      </form>
  </div>
</nav>
@include ('partials.jumbotron')
