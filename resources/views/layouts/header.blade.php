<<<<<<< HEAD
<header>
    <div class="container">
        <h1>Book Management System</h1>
       
=======
<!-- resources/views/layouts/header.blade.php -->
<header>
    <div class="container">
        <h1>Book Management System</h1>
        <nav class="navbar">
        <ul>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ route('books.create') }}">Add Book</a></li>
            <li><a href="{{ route('books.index') }}">Show Books</a></li>
        </ul>
    </nav>
>>>>>>> 91a72233ed18df65e654b71edd02a54d4395067c
    </div>
</header>
