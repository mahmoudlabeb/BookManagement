@extends('layouts.master')

@section('title', 'Create Book')

@section('content')
<<<<<<< HEAD
<div class="container mt-5">
    <header class="text-center mb-4">
        <h1 class="display-4 font-weight-bold text-primary">Create a New Book</h1>
        <p class="lead text-muted">Fill in the details below to add a new book to the system.</p>
    </header>

    <div class="card shadow-lg border-light">
        <div class="card-header bg-primary text-white">
=======
<div class="container">
    <header>
        <h1>Create a New Book</h1>
    </header>

    <div class="card">
        <div class="card-header">
>>>>>>> 91a72233ed18df65e654b71edd02a54d4395067c
            <h3>Book Details</h3>
        </div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
<<<<<<< HEAD
                    <ul class="mb-0">
=======
                    <ul>
>>>>>>> 91a72233ed18df65e654b71edd02a54d4395067c
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('books.store') }}" method="POST">
                @csrf
<<<<<<< HEAD

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
=======
                <div class="form-group">
                    <label for="name">Book Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" required>{{ old('description') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" id="price" name="price" value="{{ old('price') }}" required>
                </div>

                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" id="author" name="author" value="{{ old('author') }}" required>
                </div>

                <button type="submit">Save Book</button>
>>>>>>> 91a72233ed18df65e654b71edd02a54d4395067c
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<<<<<<< HEAD
<script>
    // Additional custom JS
    console.log('Create Book Page Loaded');
</script>
=======
    <script>
        // Custom JavaScript can be added here.
        console.log('Create Book Page Loaded');
    </script>
>>>>>>> 91a72233ed18df65e654b71edd02a54d4395067c
@endsection
