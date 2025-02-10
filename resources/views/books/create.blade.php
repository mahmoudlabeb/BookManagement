@extends('layouts.master')

@section('title', 'Create Book')

@section('content')
<div class="container mt-5">
    <header class="text-center mb-4">
        <h1 class="display-4 font-weight-bold text-primary">Create a New Book</h1>
        <p class="lead text-muted">Fill in the details below to add a new book to the system.</p>
    </header>

    <div class="card shadow-lg border-light">
        <div class="card-header bg-primary text-white">
            <h3>Book Details</h3>
        </div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('books.store') }}" method="POST">
                @csrf

                <div class="form-group mb-4">
                    <label for="name">Book Name</label>
                    <input type="text" id="name" name="name" class="form-control form-control-lg" value="{{ old('name') }}" required>
                </div>

                <div class="form-group mb-4">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" class="form-control form-control-lg" rows="4" required>{{ old('description') }}</textarea>
                </div>

                <div class="form-group mb-4">
                    <label for="price">Price</label>
                    <input type="number" id="price" name="price" class="form-control form-control-lg" value="{{ old('price') }}" required>
                </div>

                <div class="form-group mb-4">
                    <label for="author">Author</label>
                    <input type="text" id="author" name="author" class="form-control form-control-lg" value="{{ old('author') }}" required>
                </div>

                <button type="submit" class="btn btn-primary btn-lg btn-block">Save Book</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Additional custom JS
    console.log('Create Book Page Loaded');
</script>
@endsection
