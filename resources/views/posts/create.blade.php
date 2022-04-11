@extends('layouts.app')

@section('title')Create @endsection

@section('content')
      <form method="POST" action="{{route('posts.store')}}">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Post Creator</label>
            <select class="form-control">
                <option>Ahmed</option>
            </select>
       </div>

          <div class="mb-3">
                <button type="submit" class="btn btn-success">Create Post</button>
          </div>
        </form>
@endsection
