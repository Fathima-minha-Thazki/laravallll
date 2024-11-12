<?php
namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // Display a listing of employees
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    // Show the form for creating a new employee
    public function create()
    {
        return view('employees.create');
    }

    // Store a newly created employee in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees',
            'position' => 'required',
            'salary' => 'required|numeric',
        ]);

        Employee::create($request->all());
        return redirect()->route('employees.index');
    }

    // Display a specific employee's information
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    // Show the form for editing an employee's details
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    // Update the specified employee's information
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees,email,' . $employee->id,
            'position' => 'required',
            'salary' => 'required|numeric',
        ]);

        $employee->update($request->all());
        return redirect()->route('employees.index');
    }

    // Delete the specified employee
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index');
    }
}
