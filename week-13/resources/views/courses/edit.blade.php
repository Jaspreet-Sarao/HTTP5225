@extends('layouts.admin')

@section('content')
<h1>Edit Course</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('courses.update', $course->id) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label class="form-label">Course Name</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $course->name) }}">
        @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control @error('description') is-invalid @enderror">{{ old('description', $course->description) }}</textarea>
        @error('description') <span class="invalid-feedback">{{ $message }}</span> @enderror
    </div>
    <button class="btn btn-success">Update</button>
</form>
@endsection
