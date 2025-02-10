@extends('layouts.master')

@section('title', 'Success')

@section('content')
<div class="container mt-5">
    <div class="alert alert-success text-center">
        <h1>Book Created Successfully!</h1>
        <a href="{{ route('books.index') }}" class="btn btn-primary mt-3">Go back to Book List</a>
    </div>
</div>
@endsection
