@extends('layouts.app')

@section('content')



<h1>Create a new role</h1>
<div class="container">
<form class="form form-horizontal" action="{{route('roles.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control">
        @error('name')
        <div class="alert alert-danger"><p>{{$message}}</p></div>
        @enderror
    </div>
    <div>
        <button class="btn btn-primary" type="submit">Create role</button>
    </div>
</form>
</div>

@endsection