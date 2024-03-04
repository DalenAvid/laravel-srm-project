@extends('layouts.app')


@section('content')

<style>
    table {
        width: 60%;
        border-collapse: collapse;
    }

    table th {
        background-color: #f2f2f2;
        font-weight: bold;
        text-align: left;
        padding: 8px;
    }

    table td {
        border: 1px solid #ddd;
        padding: 8px;
    }

    table td a {
        color: #007bff;
        text-decoration: none;
        margin-right: 10px;
    }

    table td form {
        display: inline-block;
    }

    table td input[type="submit"] {
        background-color: #dc3545;
        color: white;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
    }

    table td input[type="submit"]:hover {
        background-color: #bd2130;
    }
</style>

<h1>Welcome to user</h1>

<button><a href="{{route('users.create')}}">Create Useer</a></button>


<table>
    <th>name</th>
    <th>email</th>
    <th>password</th>


    @foreach ($users as $user)
    <tr>
        <td>{{ $user-> name}}</td>
        <td>{{$user->contact_email}}</td>
        <td>{{$user->password}}</td>
        <td>
            <a href="{{route('users.edit', $user->id)}}">Edit</a>/
            <a href="{{route('users.show', $user->id)}}">Show</a>
            <form action="{{route('users.destroy', $user->id)}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
            </form>
        </td>
    </tr>


    @endforeach

</table>

@endsection