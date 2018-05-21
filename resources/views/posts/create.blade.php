@extends('layouts.master')

@section('content')
    <h1>Create a Post</h1>

    <form method="POST" action="/posts">

            {{ csrf_field() }}
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" name = "title">
            </div>
            <div class="form-group">
              <label for="body">body</label>
              <textarea class="form-control" id="body" name = "body"></textarea>
            </div>
            <button type="submit" class="btn btn-danger">Submit</button>
    </form>

    @if(count($errors))
      <div class="mt-5 alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

@endsection