@extends('layouts.base')

@section('content')

<div class="container">
    <div class="row">
      <div class="col">
        <form action="{{ route('comics.store') }}" method="post">
            @csrf
            @method('POST')
            <div class="mb-3">
              <label for="title" class="form-label">title</label>
              <input type="text" class="form-control" id="title" name="title">
              @error('title')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">description</label>
                <input class="form-control" id="description" name="description">
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                n
              </div>
              <div class="mb-3">
                <label for="thumb" class="form-label">thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
                @error('thumb')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              </div>
              <div class="mb-3">
                <label for="series" class="form-label">series</label>
                <input type="text" class="form-control" id="series" name="series">
                @error('series')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              </div>
              <div class="mb-3">
                <label for="author" class="form-label">author</label>
                <input type="text" class="form-control" id="author" name="author">
                @error('author')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              </div>
              <div class="mb-3">
                <label for="price" class="form-label">price</label>
                <input type="number" class="form-control" id="price" name="price">
                @error('price')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
    </div>
  </div>

@endsection