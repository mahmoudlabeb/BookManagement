@extends('layouts.master')

@section('title', 'Success')

@section('content')
<<<<<<< HEAD
<div class="container mt-5">
    <div class="alert alert-success text-center">
        <h1>Book Created Successfully!</h1>
        <a href="{{ route('books.index') }}" class="btn btn-primary mt-3">Go back to Book List</a>
    </div>
=======
<div class="container">
    <h1>Book Created Successfully!</h1>
    <a href="{{ route('books.index') }}">Go back to Book List</a>
>>>>>>> 91a72233ed18df65e654b71edd02a54d4395067c
</div>
@endsection
