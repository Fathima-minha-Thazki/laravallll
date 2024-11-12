<!-- resources/views/employees/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Employee Details</h1>

        <!-- Employee Details Table -->
        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <td>{{ $employee->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $employee->email }}</td>
                        </tr>
                        <tr>
                            <th>Position</th>
                            <td>{{ $employee->position }}</td>
                        </tr>
                        <tr>
                            <th>Salary</th>
                            <td>${{ number_format($employee->salary, 2) }}</td>
                        </tr>
                    </tbody>
                </table>

                <a href="{{ route('employees.index') }}" class="btn btn-primary btn-lg btn-block">Back to Employees</a>
            </div>
        </div>
    </div>
@endsection
