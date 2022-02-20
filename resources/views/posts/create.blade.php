
@extends('site_layouts.app')
@section('content')

<form action="/posts" method="POST">
    @csrf
  
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Title</label>
    <input type="text" value="{{ old('title') }}" name="title" class="form-control" id="exampleInputName">
  </div>
  <div class="mb-3">
    <label for="exampleInputbody" class="form-label">Description</label>
    <input type="text" value="{{ old('description') }}" name="description" class="form-control" id="exampleInputbody">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>
<!-- @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
           <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif -->

@include('shared.errors')

@endsection