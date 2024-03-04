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

<h1>Welcome to Castomer</h1>

<button><a href="{{route('customers.create')}}">Create</a></button>


<table>
    <th>First name</th>
    <th>Last name</th>
    <th>contact phone</th>
    <th>contact email</th>
    

    @foreach ($customers as $customer)
    <tr>
        <td>{{ $customer-> first_name}}</td>
        <td>{{$customer->last_name}}</td>
        <td>{{$customer->contact_phone}}</td>
        <td>{{$customer->contact_email}}</td>
        <td>
            <a href="{{route('customers.edit', $customer->id)}}">Edit</a>/
            <a href="{{route('customers.show', $customer->id)}}">Show</a>
            <form action="{{route('customers.destroy', $customer->id)}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
            </form>
        </td>
    </tr>


    @endforeach

</table>

@endsection