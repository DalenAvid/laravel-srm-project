@extends('layouts.app')

@section('content')


<h1>Create a new user</h1>
<div class="container">
<form class="form form-horizontal" action="{{route('users.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control">
        @error('name')
        <div class="alert alert-danger"><p>{{$message}}</p></div>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="email">email</label>
        <input type="text" name="email" id="email" class="form-control">
        @error('email')
        <div class="alert alert-danger">
            <p>{{$message}}</p>
        </div>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="password">password</label>
        <input type="text" name="password" id="password" class="form-control">
        @error('password')
        <div class="alert alert-danger">
            <p>{{$message}}</p>
        </div>
        @enderror
    </div>
    <div>
        <button class="btn btn-primary" type="submit">Create user</button>
    </div>
</form>
</div>
@endsection