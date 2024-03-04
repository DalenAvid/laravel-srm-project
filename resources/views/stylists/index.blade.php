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

<h1>Welcome to stylist</h1>

<button><a href="{{route('stylists.create')}}">Create</a></button>


<table>
    <th>name</th>
    <th>last name</th>
    <th>contact phone</th>
    <th>contact email</th>
    

    @foreach ($stylists as $stylist)
    <tr>
    <td>{{ $stylist-> first_name}}</td>
        <td>{{$stylist->last_name}}</td>
        <td>{{$stylist->contact_phone}}</td>
        <td>{{$stylist->contact_email}}</td>
        <td>
            <a href="{{route('stylists.edit', $stylist->id)}}">Edit</a>/
            <a href="{{route('stylists.show', $stylist->id)}}">Show</a>
            <form action="{{route('stylists.destroy', $stylist->id)}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
            </form>
        </td>
    </tr>


    @endforeach

</table>

@endsection