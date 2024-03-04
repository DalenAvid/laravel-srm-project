@extends('layouts.app')


@section('content')

<h1>Create a new Edit</h1>

<form class="form form-horizontal" action="{{route('salons.update', $salon->id)}}" enctype="multipart/form-data"
    method="put">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name" class="form-label" >Name salon</label>
        <input type="text" name="name" id="name" class="form-control" value="{{$salon->name}}">
        @error('name')
        <div class="alert alert-danger">
            <p>{{$message}}</p>
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="description" class="form-label">description</label>
        <textarea name="description" id="description" class="form-control">{{$salon->description}}</textarea></label>
        @error('description')
        <div class="alert alert-danger">
            <p>{{$message}}</p>
        </div>
        @enderror
    </div>
    
    <div class="form-group">
        <label for="contact_phone" class="form-label">contact_phone</label>
        <input type="text" name="contact_phone" id="contact_phone" class="form-control" value="{{$salon->contact_phone}}">
        @error('contact_phone')
        <div class="alert alert-danger">
            <p>{{$message}}</p>
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="contact_email" class="form-label">contact_email</label>
        <input type="text" name="contact_email" id="contact_email" class="form-control" value="{{$salon->contact_email}}">
        @error('contact_email')
        <div class="alert alert-danger">
            <p>{{$message}}</p>
        </div>
        @enderror
    </div>
    <div>
        <button class="btn btn-primary" type="submit">Save salon</button>
    </div>
</form>

@endsection