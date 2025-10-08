@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Edit Student</h2>

  <form action="{{ route('students.update', $student) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="text" name="name" class="form-control" value="{{ old('name', $student->name) }}">
    </div>

    <div class="mb-3">
      <label class="form-label">Email</label>
      <input type="email" name="email" class="form-control" value="{{ old('email', $student->email) }}">
    </div>

    <div class="mb-3">
      <label class="form-label">Phone</label>
      <input type="text" name="phone" class="form-control" value="{{ old('phone', $student->phone) }}">
    </div>

    <button class="btn btn-primary">Update</button>
  </form>
</div>
@endsection