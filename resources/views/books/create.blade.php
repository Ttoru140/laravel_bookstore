@extends('layout')

@section('page-content')

<form method="post" action="{{route('books.store')}}">
    @csrf

<div class="mb-3">
  <label class="form-label">Title</label>
  <input type="text" class="form-control" name="title" placeholder="title" value="{{old('title')}}">
  @error('title')
  <div class="text-danger">{{$message}}</div>
  @enderror
</div>
<div class="mb-3">
  <label class="form-label">Author</label>
  <input type="text" class="form-control" name="author" placeholder="author" value="{{old('author')}}">
  @error('author')
  <div class="text-danger">{{$message}}</div>
  @enderror
</div>
<div class="mb-3">
  <label class="form-label">ISBN</label>
  <input type="number" class="form-control" name="isbn" placeholder="isbn-13" value="{{old('isbn')}}">
  @error('isbn')
  <div class="text-danger">{{$message}}</div>
  @enderror
</div>
<div class="mb-3">
  <label class="form-label">Price</label>
  <input type="number" class="form-control" name="price" placeholder="price" value="{{old('price')}}">
  @error('price')
  <div class="text-danger">{{$message}}</div>
  @enderror
</div>
<div class="mb-3">
  <label class="form-label">Stock</label>
  <input type="number" class="form-control" name="stock" placeholder="stock" value="{{old('stock')}}">
  @error('stock')
  <div class="text-danger">{{$message}}</div>
  @enderror
</div>
<div class="mb-3">
<button type="submit" class="btn btn-primary">Submit</button>
  <a href="{{route('books.index')}}" class="btn btn-danger">Back</a>
</div>

</form>
   
@endsection
