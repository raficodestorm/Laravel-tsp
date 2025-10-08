@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Add Student</h2>

  @if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $err)
      <li>{{ $err }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <form action="{{ route('students.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="text" name="name" class="form-control" value="{{ old('name') }}">
    </div>

    <div class="mb-3">
      <label class="form-label">Email</label>
      <input type="email" name="email" class="form-control" value="{{ old('email') }}">
    </div>

    <div class="mb-3">
      <label class="form-label">Phone</label>
      <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
    </div>

    <button class="btn btn-success">Save</button>
  </form>
</div>
@endsection