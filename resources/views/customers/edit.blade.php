@extends('layouts.app')

@section('content')

<h1>Create a new Edit</h1>

<form class="form form-horizontal" action="{{route('customers.update', $customer->id)}}" enctype="multipart/form-data"
    method="put">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="first_name"  class="form-label">Name customer</label>
        <input type="text" name="first_name" id="first_name" class="form-control" value="{{$customer->first_name}}">
        @error('first_name')
        <div class="alert alert-danger">
            <p>{{$message}}</p>
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="last_name"  class="form-label">last_name</label>
        <textarea name="last_name" id="last_name" class="form-control">{{$customer->last_name}}</textarea>
        @error('last_name')
        <div class="alert alert-danger">
            <p>{{$message}}</p>
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="contact_phone"  class="form-label">contact_phone</label>
        <input type="text" name="contact_phone" id="contact_phone" class="form-control" value="{{$customer->contact_phone}}">
        @error('contact_phone')
        <div class="alert alert-danger">
            <p>{{$message}}</p>
        </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="contact_email"  class="form-label">contact_email</label>
        <input type="text" name="contact_email" id="contact_email" class="form-control" value="{{$customer->contact_email}}">
        @error('contact_email')
        <div class="alert alert-danger">
            <p>{{$message}}</p>
        </div>
        @enderror
    </div>
    <div>
        <button class="btn btn-primary" type="submit">Save customer</button>
    </div>
</form>

@endsection