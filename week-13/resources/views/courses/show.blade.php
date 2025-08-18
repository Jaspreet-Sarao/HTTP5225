@extends('layouts.admin')

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <h5 class="card-title">{{ $course->name }}</h5>
        <p class="card-text">{{ $course->description }}</p>
        <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>
@endsection
