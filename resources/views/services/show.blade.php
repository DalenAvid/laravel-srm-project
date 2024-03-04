@extends('layouts.app')

@section('content')

<h3>service </h3>
<div class="container">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th scope="row">Name</th>
                <td>{{$service->name}}</td>
            </tr>
            <tr>
                <th scope="row">Description</th>
                <td>{{$service->description}}</td>
            </tr>
        </tbody>
    </table>
</div>


<a href="{{route('services.index')}}">Back</a>
@endsection