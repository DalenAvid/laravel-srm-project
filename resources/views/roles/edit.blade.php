@extends('layouts.app')


@section('content')


<h1>Create a new Edit</h1>

<form class="form form-horizontal" action="{{route('roles.update', $role->id)}}" enctype="multipart/form-data"
    method="put">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name" class="form-label">Name role</label>
        <input type="text" name="name" id="name" class="form-control" value="{{$role->name}}">
        @error('name')
        <div class="alert alert-danger">
            <p>{{$message}}</p>
        </div>
        @enderror
    </div>
    
    <div>
        <button class="btn btn-primary" type="submit">Save role</button>
    </div>
</form>
@endsection