@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row">
      <div class="col">
        {{-- ricordarsi di cambiare il comics.store altrimenti non si collega alla pagina
        cambiare con il '.update', $comic --}}
        <form action="{{ route('comics.update', $comic) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="title" class="form-label">title</label>
              <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
              @error('title')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <input class="form-control" id="description" name="description" value="{{$comic->description}}">
              </div>
              <div class="mb-3">
                <label for="thumb" class="form-label">thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
              </div>
              <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
              </div>
              <div class="mb-3">
                <label for="author" class="form-label">author</label>
                <input type="text" class="form-control" id="author" name="author" value="{{$comic->author}}">
              </div>
              <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{$comic->price}}">
              </div>
            <button type="submit" class="btn btn-primary">Salva</button>
          </form>
      </div>
    </div>
  </div>
@endsection