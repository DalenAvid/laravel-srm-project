@extends('layouts.app')

@section('content')
<h2>Customer Details</h2>
<div class="table-responsive">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th style="width: 30%;">First Name</th>
                <td>{{$customer->first_name}}</td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td>{{$customer->last_name}}</td>
            </tr>
            <tr>
                <th>Contact Phone</th>
                <td>{{$customer->contact_phone}}</td>
            </tr>
            <tr>
                <th>Contact Email</th>
                <td>{{$customer->contact_email}}</td>
            </tr>
        </tbody>
    </table>
</div>


<a href="{{route('customers.index')}}" class="btn btn-secondary" alt="Go back to customers list">Back</a>

@endsection