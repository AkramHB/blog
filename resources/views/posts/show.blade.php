@extends('layouts.master')

@section('content')
    <h1>{{$post->body}}</h1>
    <hr>

    <ul class = "list-group">
        @foreach($post->comments as $comment)
            <li class = "list-group-item">{{$comment->body}}</li>
        @endforeach
    </ul>

    <hr>

    <div class="card">
        <div class="card-block">
            <form method="POST" action="/posts/{{$post->id}}/comments">
                {{ csrf_field() }}
                <div class="form-group mt-2">
                    <textarea class="form-control" name = "body" placeholder="Your comment here."></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-danger">Submit</button>
                </div>

            </form>
        </div>
    </div>

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