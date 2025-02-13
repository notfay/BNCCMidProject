@extends('layouts.app')

@section('content')

<div>
    <h1>Employee</h1>
</div>

@if (@session('success'))
<div class="alert alert-success">
    {{ @session('success')}}
</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Telephone Number</th>
        </tr>
    </thead>
    <tbody>
        @foreach($employee as $employee)
        <tr>
            <td>{{ $employee->id }}</td>
            <td>{{ $employee->name }}</td>
            <td>{{ $employee->age }}</td>
            <td>{{ $employee->address }}</td>
            <td>{{ $employee->phone }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<div>
    <a href="{{ route('employee.create')}}" class="btn btn-primary"> Add Employee</a>
</div>


@endsection