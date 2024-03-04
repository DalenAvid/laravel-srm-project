@extends('layouts.app')


@section('content')

<h3>Role </h3>

<div class="container">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th scope="row">First Name</th>
                <td>{{$role->name}}</td>
            </tr>
        </tbody>
    </table>
</div>


<a href="{{route('roles.index')}}">Back</a>
@endsection