@extends('layouts.app')

@section('content')

<h3>stylist </h3>

<div class="container">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th scope="row">First Name</th>
                <td>{{$manager->first_name}}</td>
            </tr>
            <tr>
                <th scope="row">Last Name</th>
                <td>{{$manager->last_name}}</td>
            </tr>
            <tr>
                <th scope="row">Contact Phone</th>
                <td>{{$manager->contact_phone}}</td>
            </tr>
            <tr>
                <th scope="row">Contact Email</th>
                <td>{{$manager->contact_email}}</td>
            </tr>
        </tbody>
    </table>
</div>

<a href="{{route('stylists.index')}}">Back</a>
@endsection