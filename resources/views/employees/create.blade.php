<h1>Add/Edit Employee</h1>
<form action="{{ isset($employee) ? route('employees.update', $employee->id) : route('employees.store') }}" method="POST">
    @csrf
    @if(isset($employee))
        @method('PUT')
    @endif
    <label>Name:</label>
    <input type="text" name="name" value="{{ $employee->name ?? '' }}" required>
    <label>Email:</label>
    <input type="email" name="email" value="{{ $employee->email ?? '' }}" required>
    <label>Position:</label>
    <input type="text" name="position" value="{{ $employee->position ?? '' }}" required>
    <label>Salary:</label>
    <input type="number" step="0.01" name="salary" value="{{ $employee->salary ?? '' }}" required>
    <button type="submit">Save</button>
</form>
