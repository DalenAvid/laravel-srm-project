@extends('layouts.app')

@section('content')

<h3>user list </h3>

<div class="container">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th scope="row">Name</th>
                <td>{{$user->name}}</td>
            </tr>
            <tr>
                <th scope="row">Email</th>
                <td>{{$user->email}}</td>
            </tr>
            <tr>
                <th scope="row">Password</th>
                <td>*** Hidden for Security ***</td>
            </tr>
        </tbody>
    </table>
</div>


<a href="{{route('users.index')}}">Back</a>
@endsection