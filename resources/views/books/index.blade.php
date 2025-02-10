@extends('layouts.master')

@section('title', 'Book List')

@section('content')
<<<<<<< HEAD
<div class="container mt-5">
    <header class="text-center mb-4">
        <h1 class="display-4 font-weight-bold text-primary">All Books</h1>
        <p class="lead text-muted">Browse through the collection of all books in the database.</p>
    </header>

    <div class="card shadow-lg border-light">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Books in the Database</h3>
            <a href="{{ route('books.create') }}" class="btn btn-light btn-sm">Add New Book</a>
=======
<div class="container">
    <header>
        <h1>All Books</h1>
    </header>
    
    <div class="card">
        <div class="card-header">
            <h3>Books in the Database</h3>
>>>>>>> 91a72233ed18df65e654b71edd02a54d4395067c
        </div>
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

<<<<<<< HEAD
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Author</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                            <tr>
                                <td>{{ $book->id }}</td>
                                <td>{{ $book->name }}</td>
                                <td>{{ \Str::limit($book->description, 50) }}</td>
                                <td>{{ $book->price }}</td>
                                <td>{{ $book->author }}</td>
                                <td>{{ $book->created_at->format('d M Y') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
=======
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Author</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->name }}</td>
                            <td>{{ $book->description }}</td>
                            <td>{{ $book->price }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->created_at->format('d M Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
>>>>>>> 91a72233ed18df65e654b71edd02a54d4395067c
        </div>
    </div>
</div>
@endsection
