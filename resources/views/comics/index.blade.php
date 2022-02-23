@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row">
      <div class="col">
          <div class="card-group">
            @foreach ($comics as $comic)
            <div class="card">
              <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><a href="{{ route('comics.show', $comic) }}">{{$comic['title']}}</a></h5>
                <p class="card-text">{{$comic['description']}}</p>
                <p class="card-text"><small class="text-muted">{{$comic['price']}}</small></p>
              </div>
            </div>
            @endforeach
          </div>
    
      </div>
    </div>
  </div>
@endsection