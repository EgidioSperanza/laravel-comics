<div class="main-inner">
    <div class="current-series"><h3>Current Series</h3></div>
    @foreach ($data as $comic)
    <div class="comic-card">
        <div class="comic-cover">
            <img src="{{$comic['thumb']}}" alt="Cover by{{$comic['series']}}" />
          </div>
          <span>{{$comic['series']}}</span>
    </div>
    @endforeach
  </div>
  <span class="more-comics">Load More</span>
