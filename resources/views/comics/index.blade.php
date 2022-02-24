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
              </div>
              <div class="card-footer">
                <small class="text-muted"><a class="btn btn-primary" href="{{ route('comics.edit', $comic) }}">Edit</a></small>
              </div>
            </div>
            @endforeach
          </div>
      </div>
    </div>
    <div class="row">
        <div class="col">
            {{ $comics->links() }}
        </div>
    </div>
  </div>
@endsection
