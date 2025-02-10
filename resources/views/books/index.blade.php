@extends('layouts.master')

@section('title', 'Book List')

@section('content')
<div class="container mt-5">
    <header class="text-center mb-4">
        <h1 class="display-4 font-weight-bold text-primary">All Books</h1>
        <p class="lead text-muted">Browse through the collection of all books in the database.</p>
    </header>

    <div class="card shadow-lg border-light">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Books in the Database</h3>
            <a href="{{ route('books.create') }}" class="btn btn-light btn-sm">Add New Book</a>
        </div>
        <div class="card-body">
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

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
        </div>
    </div>
</div>
@endsection
