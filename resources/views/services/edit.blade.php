@extends('layouts.app')

@section('content')

<h1>Create a new Edit</h1>

<form class="form form-horizontal" action="{{route('services.update', $service->id)}}" enctype="multipart/form-data"
    method="put">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name" class="form-label">Name service</label>
        <input type="text" name="name" id="name" class="form-control" value="{{$service->name}}">
        @error('name')
        <div class="alert alert-danger">
            <p>{{$message}}</p>
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="description" class="form-label">description</label>
        <textarea name="description" id="description" class="form-control">{{$service->description}}</textarea"></label>
        @error('description')
        <div class="alert alert-danger">
            <p>{{$message}}</p>
        </div>
        @enderror
    </div>
    
    <div>
        <button class="btn btn-primary" type="submit">Save service</button>
    </div>
</form>
@endsection