<div class="container position-relative">
  <div class="current-series align-middle"><h3>Current Series</h3></div>
  <div class="row py-5">
    @foreach ($data as $comic)
    <div  class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 my-2">
      <div class="card bg-transparent">
        <div class="preview">
          <img class="img-fluid" src="{{$comic['thumb']}}" alt="Cover by{{$comic['series']}}" />
        </div>
        <div class="card-body">
          <p class="card-title">{{$comic['series']}}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
  <span class="more-comics">Load More</span>