<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index() {
        $employee = Employee::all();
        return view('employee.index', compact('employee'));
    }

    public function create() {
        return view('employee.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|min:5|max:20',
            'age' => 'required|integer|min:21',
            'address' => 'required|string|min:10|max:40',
            'phone' => 'required|string|regex:/^08[0-9]{7,10}$/'
        ]);

        Employee::create($request->all());

        return redirect()->route('employee.index')->with('success', 'Employee created successfully.');
    }

    public function show(Employee $employee) {
        return view('employee.show', compact('employee'));
    }
}