@extends('layouts.app')

@section('content')

<h1>Create a new Costomer</h1>
<div class="container">
<form class="form form-horizontal" action="{{route('customers.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="first_name">First_Name</label>
        <input type="text" name="first_name" id="first_name" class="form-control">
        @error('first_name')
        <div class="alert alert-danger"><p>{{$message}}</p></div>
        @enderror
    </div>
    <div class="form-group">
        <label for="last_name">Last_name</label>
        <textarea name="last_name" id="last_name" class="form-control"></textarea>
        @error('last_name')
        <div class="alert alert-danger"><p>{{$message}}</p></div>
        @enderror
    </div>
    <div class="form-group">
        <label for="contact_phone">Contact_phone</label>
        <input type="text" name="contact_phone" id="contact_phone" class="form-control">
        @error('contact_phone')
        <div class="alert alert-danger"><p>{{$message}}</p></div>
        @enderror
    </div>
    <div class="form-group">
        <label for="contact_email">Contact_email</label>
        <input type="text" name="contact_email" id="contact_email" class="form-control">
        @error('contact_email')
        <div class="alert alert-danger"><p>{{$message}}</p></div>
        @enderror
    </div>
    <div>
        <button class="btn btn-primary" type="submit">Create customer</button>
    </div>
</form>
</div>
@endsection