@extends('layouts.app')

@section('content')

<h1>Edit Employee</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('employee.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Employee Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}" required>
    </div>

    <div class="mb-3">
        <label for="age" class="form-label">Employee Age</label>
        <input type="number" class="form-control" id="age" name="age" value="{{ $employee->age }}" required>
    </div>

    <div class="mb-3">
        <label for="address" class="form-label">Employee Address</label>
        <textarea name="address" id="address" class="form-control" rows="3" required>{{ $employee->address }}</textarea>
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Telephone Number</label>
        <input type="text" class="form-control" id="phone" name="phone" value="{{ $employee->phone }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection