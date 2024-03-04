@extends('layouts.app')

@section('content')

<h1>Create a new Edit</h1>

<form class="form form-horizontal" action="{{route('users.update', $user->id)}}" enctype="multipart/form-data"
    method="put">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name" class="form-label">Name user</label>
        <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}">
        @error('name')
        <div class="alert alert-danger">
            <p>{{$message}}</p>
        </div>
        @enderror
    </div>
   
    <div class="form-group">
        <label for="contact_email"  class="form-label">email</label>
        <input type="text" name="email" id="email" class="form-control" value="{{$user->email}}">
        @error('email')
        <div class="alert alert-danger">
            <p>{{$message}}</p>
        </div>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="password" class="form-label">password</label>
        <input type="text" name="password" id="password" class="form-control" value="{{$user->password}}">
        @error('password')
        <div class="alert alert-danger">
            <p>{{$message}}</p>
        </div>
        @enderror
    </div>

    <div>
        <button class="btn btn-primary" type="submit">Save user</button>
    </div>
</form>
@endsection