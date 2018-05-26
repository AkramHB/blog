@extends('layouts.master')

@section('content')
<h1>Registration</h1>
<div class = "mt-5 row justify-content-center">
    <div class = "col-8">
                <form method="POST" action="/register">
                    {{csrf_field()}}
                    <div class = "form-group">
                        <label for="name">Name</label>
                        <input type = "text" class="form-control" name="name" placeholder="Enter Your Name">
                    </div>
                    <div class = "form-group">
                            <label for="email">email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Your Email">
                    </div>
                    <div class = "form-group">
                            <label for="password">password</label>
                            <input type = "password" class="form-control" name="password" placeholder="Enter Your Password">
                    </div>
                    <div class = "form-group">
                            <label for="password_confirmation">password confirmation</label>
                            <input type = "password" class="form-control" name="password_confirmation" placeholder="Enter Your Password">
                    </div>
                    <div class = "form-group text-center">
                    <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                </form>
                
              @if(count($errors)>0)
                <div class="alert bg-warning">
                    <ul class = "group-list text-white">
                    @foreach($errors->all() as $error)
                        <li class="group-list-item">{{$error}}</li>
                    @endforeach
                    </ul>
                </div>
              @endif
    </div>
</div>

@endsection