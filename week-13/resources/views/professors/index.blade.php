@extends('layouts.app')

@section('content')
    <h1>Professors</h1>
    <ul>
        @foreach($professors as $professor)
            <li>{{ $professor->name }}</li>
        @endforeach
    </ul>
@endsection