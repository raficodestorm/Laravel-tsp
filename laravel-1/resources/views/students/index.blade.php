@extends('layouts.app')

@section('content')
<div class="container">
  @if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Students</h2>
    <a href="{{ route('students.create') }}" class="btn btn-primary">Add Student</a>
  </div>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse($students as $student)
      <tr>
        <td>{{ $student->id }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->phone }}</td>
        <td>
          <a href="{{ route('students.show', $student) }}" class="btn btn-sm btn-info">View</a>
          <a href="{{ route('students.edit', $student) }}" class="btn btn-sm btn-warning">Edit</a>

          <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline-block;"
            onsubmit="return confirm('Are you sure to delete?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-danger">Delete</button>
          </form>
        </td>
      </tr>
      @empty
      <tr>
        <td colspan="5">No records found.</td>
      </tr>
      @endforelse
    </tbody>
  </table>

  {{ $students->links() }}
  <!-- pagination links -->
</div>
@endsection