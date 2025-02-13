@extends('layouts.app')

@section('content') 

<h1> Add Employee</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Employee Name</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>

  <div class="mb-3">
    <label for="age" class="form-label">Employee Age</label>
    <input type="number" class="form-control" id="age" name="age" required>
  </div>

  <div class="mb-3">
    <label for="address" class="form-label">Employee Address</label>
    <textarea name="address" id="address" class="form-control" rows="3" required></textarea>
  </div>

  <div class="mb-3">
    <label for="phone" class="form-label">Telephone Number</label>
    <input type="text" class="form-control" id="phone" name="phone" required>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection