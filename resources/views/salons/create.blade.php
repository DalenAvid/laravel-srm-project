@extends('layouts.app')

@section('content')



<h1>Create a new salon</h1>

<form class="form form-horizontal" action="{{route('salons.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control">
        @error('name')
        <div class="alert alert-danger">
            <p>{{$message}}</p>
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="description">Description
            <input type="text" name="description" id="description" class="form-control"></label>
        @error('description')
        <div class="alert alert-danger">
            <p>{{$message}}</p>
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="contact_phone">Contact_phone</label>
        <input type="text" name="contact_phone" id="contact_phone" class="form-control">
        @error('contact_phone')
        <div class="alert alert-danger">
            <p>{{$message}}</p>
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="contact_email">Contact_email</label>
        <input type="text" name="contact_email" id="contact_email" class="form-control">
        @error('contact_email')
        <div class="alert alert-danger">
            <p>{{$message}}</p>
        </div>
        @enderror
    </div>
    <div>
        <button class="btn btn-primary" type="submit">Create salon</button>
    </div>
</form>

@endsection