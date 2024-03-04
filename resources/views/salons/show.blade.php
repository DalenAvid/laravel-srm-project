@extends('layouts.app')


@section('content')

<h3>salon </h3>

<div class="container">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th scope="row">Name</th>
                <td>{{$salon->name}}</td>
            </tr>
            <tr>
                <th scope="row">Description</th>
                <td>{{$salon->description}}</td>
            </tr>
            <tr>
                <th scope="row">Contact Phone</th>
                <td>{{$salon->contact_phone}}</td>
            </tr>
            <tr>
                <th scope="row">Contact Email</th>
                <td>{{$salon->contact_email}}</td>
            </tr>
        </tbody>
    </table>
</div>


<a href="{{route('salons.index')}}">Back</a>

@endsection