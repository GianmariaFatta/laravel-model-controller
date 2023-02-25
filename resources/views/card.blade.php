<div class="card" style="width: 18rem;">
  {{-- <img src="..." class="card-img-top" alt="..."> --}}
  <div class="card-body text-center">
    <h3 class="card-title">{{$movie->title}}</h3>
    <h4 class="card-title">{{$movie->original_title}}</h4>
    <h5 class="card-title">{{$movie->nationality}}</h5>
    <p class="card-text">{{$movie->date}}</p>
    <p class="card-text text-warning">{{$movie->vote}}</p>
    {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
  </div>
</div>